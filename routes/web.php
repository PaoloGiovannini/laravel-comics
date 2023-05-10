<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics.comics_list');
    $data = [
        'dc_comics' => [
            [
                'text' => 'Characters',
                'href' => '#Characters',
            ],
            [
                'text' => 'Comics',
                'href' => '#Comics',
            ],
            [
                'text' => 'Movies',
                'href' => '#Movies',
            ],
            [
                'text' => 'TV',
                'href' => '#TV',
            ],
            [
                'text' => 'Games',
                'href' => '#Games',
            ],
            [
                'text' => 'Videos',
                'href' => '#Videos',
            ],
            [
                'text' => 'News',
                'href' => '#News',
            ],
            [
                'text' => 'Fans',
                'href' => '#Fans',
            ],
            [
                'text' => 'Shop',
                'href' => '#Shop',
            ],
        ],
        'shop' => [
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc Collectibles',
                'href' => '#Shop-Dc-Collectibles',
            ]

        ],

        'dc' => [
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
        ],
        'sites' => [
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
            [
                'text' => 'Shop Dc',
                'href' => '#Shop-Dc',
            ],
        ]

    ];

    return view('home', compact('comics'), $data);
})->name('home');
