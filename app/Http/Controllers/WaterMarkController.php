<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class WaterMarkController extends Controller
{
    public function imageWatermark()
    {
        $img = Image::make(public_path('images/background.png'));

        /* insert watermark at bottom-right corner with 10px offset */
        $img->insert(public_path('images/watermark.png'), 'bottom-right', 10, 10);

        $img->save(public_path('images/new-image.png'));

        $img->encode('png');
        $type = 'png';
        $new_image = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return view('show_watermark', compact('new_image'));
    }

    public function textWatermark()
    {
        $img = Image::make(public_path('images/background.png'));

        $img->text('MyNotePaper', 710, 370, function ($font) {
            $font->file(public_path('font/amandasignature.ttf'));
            $font->size(30);
            $font->color('#f4d442');
            $font->align('center');
            $font->valign('top');
            $font->angle(0);
        });

        $img->save(public_path('images/new-image.png'));

        $img->encode('png');
        $type = 'png';
        $new_image = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return view('show_watermark', compact('new_image'));
    }
}