<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade as PDF;

class ProductController extends Controller
{
    public function save(Request $request)
    {
        Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|max:50',
            'code' => 'required|max:15',
            'buy_in' => 'required|max:12',
            'minimum_price' => 'required|max:12',
            'sale_price' => 'required|max:12',
            'brand' => 'required|max:20',
            'colors' => 'required|max:20',
            'size' => 'required|max:5',
            'description' => 'max:200'
        ]);

        $name_image = round(microtime(true) * 1000);
        $extension = $request->file('image')->extension();
        $request->file('image')->storeAs('public/images/' . $name_image . "/", "sneaker." . $extension);
        $url_image = "storage/images/" . $name_image . '/sneaker.' . $extension;
        //QR GENERATOR -> Funciona con Imagick
        $renderer = new ImageRenderer(
            new RendererStyle(1000),
            new ImagickImageBackEnd()
        );
        $writer = new Writer($renderer);
        $writer->writeFile($name_image, '../storage/app/public/images/' . $name_image . '/qrcode.png');

        $buy_in = str_replace(" \$us", "", $request->buy_in);
        $minimum_price = str_replace(" \$us", "", $request->minimum_price);
        $sale_price = str_replace(" \$us", "", $request->sale_price);
        DB::beginTransaction();
        try {
            DB::table('products')
                ->insert([
                    'name' => $request->name,
                    'code' => $request->code,
                    'buy_price' => $buy_in,
                    'minimum_price' => $minimum_price,
                    'sale_price' => $sale_price,
                    'qr_code' => $name_image,
                    'qr_image' => 'storage/images/' . $name_image . '/qrcode.png',
                    'image' => $url_image,
                    'brand' => $request->brand,
                    'colors' => $request->colors,
                    'size' => $request->size,
                    'description' => $request->description,
                    'status' => 'OnSold',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return $th;
        }

        return back();
    }
    public function showProducts()
    {
        return view('pages.table');
    }
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|max:50',
            'code' => [
                'required',
            ],
            'buy_in' => 'required|max:12',
            'minimum_price' => 'required|max:12',
            'sale_price' => 'required|max:12',
            'brand' => 'required|max:20',
            'colors' => 'required|max:20',
            'size' => 'required|max:5',
            'description' => 'max:200'
        ]);

        $this_product = DB::Table('products')->where('id', '=', $request->id)->first();
        $url_image = $this_product->image;
        if ($request->image != null) {
            date_default_timezone_set('America/Los_Angeles');
            $today = date("Ymd-His");
            $name_file = "sneaker-" . $today;
            $extension = $request->file('image')->extension();
            $request->file('image')->storeAs('public/images/' . $this_product->qr_code . "/", $name_file."." . $extension);
            $url_image = "storage/images/".$this_product->qr_code ."/".$name_file.".".$extension;
        }
        $buy_in = str_replace(" \$us", "", $request->buy_in);
        $minimum_price = str_replace(" \$us", "", $request->minimum_price);
        $sale_price = str_replace(" \$us", "", $request->sale_price);
        DB::beginTransaction();
        try {
            DB::table('products')
            ->where('id', '=',$request->id)
                ->update([
                    'name' => $request->name,
                    'code' => $request->code,
                    'buy_price' => $buy_in,
                    'minimum_price' => $minimum_price,
                    'sale_price' => $sale_price,
                    'image' => $url_image,
                    'brand' => $request->brand,
                    'colors' => $request->colors,
                    'size' => $request->size,
                    'description' => $request->description,
                    'updated_at' => now()
                ]);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return $request->buy_in;
        }

        return back();
    }
    public function printOne($id){
        $products = DB::table('products')
        ->where('status','=','OnSold')
        ->where('id', '=', $id)
        ->get();
        // return view('pages.report');
        return \PDF::loadView('pages.report',compact('products'))
        ->setPaper('a4', 'portrait')
        ->stream('archivo.pdf');
    }
    public function printAll(){
        $products = DB::table('products')
        ->where('status','=','OnSold')
        ->get();
        // return view('pages.report');
        return \PDF::loadView('pages.report',compact('products'))
        ->setPaper('a4', 'portrait')
        ->stream('archivo.pdf');
    }
    public function sale(){
        return view('pages.sale');
    }
}



