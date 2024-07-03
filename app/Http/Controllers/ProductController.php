<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        return view('games', [
            'image' => 'https://preview.redd.it/r4tffh9wp7g51.jpg?width=1080&crop=smart&auto=webp&s=457defd9f902a36545f214f91bffff3581784390',
            'title' => 'Apex Legends',
            'rating' => 'Mostly Positive',
            'image1' => 'https://i.pinimg.com/736x/5e/6a/cf/5e6acf9e03b48f5ed16ac41ed129de53.jpg',
            'title1' => 'Grand Theft Auto V',
            'rating1' => 'Very Positive',
            'image2' => 'https://image.api.playstation.com/vulcan/ap/rnd/202209/0617/eiXonwxcJH00bkGo3G6lUm9t.png',
            'title2' => 'Rainbow Six Siege',
            'rating2' => 'Mostly Positive',
            'image3' => 'https://upload.wikimedia.org/wikipedia/en/8/83/Fallout_3_cover_art.PNG',
            'title3' => 'Fallout 3',
            'rating3' => 'Very Positive',
        ]);
    }
}
