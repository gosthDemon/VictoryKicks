<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class ProductController extends Controller
{
    public function save(Request $request){

        $name_image = round(microtime(true) * 1000);
        $extension = $request->file('image')->extension();
        $request->file('image')->storeAs('public/images/'.$name_image."/", "sneaker.".$extension);
        $name_to_save = 'public/images/'.$name_image.'/sneaker.'.$extension;

        // 'public/images/'.$name_image.'/qrCode.png'
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
        $writer = new Writer($renderer);
        $writer->writeFile($name_image, '../storage/app/public/images/'.$name_image.'/QRCode.png');
        //VERIFICAR CUAL ES LA RUTA QUE SIRVE PARA MOSTRAR LA IMAGEN

        DB::beginTransaction();
        try {
            DB::table('products')
                ->insert([
                    'name' => $request->name,
                    'code' => $request->code,
                    'buy_price' => $request->buy_in,
                    'minimum_price' => $request->minimum_price,
                    'sale_price' => $request->sale_price,
                    'qr_code' => "",
                    'qr_image' => "",
                    'image' => $name_to_save,
                    'brand' => $request->brand,
                    'colors' => $request->colors,
                    'size' => $request->size,
                    'description' => $request->description
                ]);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
            DB::rollBack();
        }
    }
}
