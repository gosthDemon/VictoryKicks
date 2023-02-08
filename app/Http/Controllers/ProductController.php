<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Exception;
use GuzzleHttp\Psr7\Message;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    public function save(Request $request){
        $product_id = $request->id;
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|max:50',
            'code' => 'required|max:15|unique:Products,$id',
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
        $request->file('image')->storeAs('public/images/'.$name_image."/", "sneaker.".$extension);
        $name_to_save = 'public/images/'.$name_image.'/sneaker.'.$extension;
        $url_image = "storage/images/".$name_image.'sneaker.'.$extension;
        // 'public/images/'.$name_image.'/qrCode.png'
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
        $writer = new Writer($renderer);
        $writer->writeFile($name_image, '../storage/app/public/images/'.$name_image.'/QRCode.png');
        //VERIFICAR CUAL ES LA RUTA QUE SIRVE PARA MOSTRAR LA IMAGEN
        
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
                    'qr_image' => 'storage/images/'.$name_image.'/qrcode.png',
                    'image' => $url_image,
                    'brand' => $request->brand,
                    'colors' => $request->colors,
                    'size' => $request->size,
                    'description' => $request->description,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
            DB::rollBack();
        }

        return back();
    }
    public function showProducts(){
        return view('pages.table');
    }
    public function update(Request $request){
    
            $validate = $request->validate([
                'name' => 'required|max:50',
                'code' => ['required','max:15',Rule::unique('products')->ignore($id)],
                'buy_in' => 'required|max:12',
                'minimum_price' => 'required|max:12',
                'sale_price' => 'required|max:12',
                'brand' => 'required|max:20',
                'colors' => 'required|max:20',
                'size' => 'required|max:5',
                'description' => 'max:200'
            ]);


        
    }
}



