<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;

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

/*
//PRAKTIKUM 1
//nomor1
Route::get('/', function () {
    echo "Hi! Selamat Datang di Website Laravel";
});
//nomor2
Route::get('/about', function () {
    echo "NIM   : 2041720033 <br>";
    echo "NAMA  : Isma Fitria Risnandari <br>";
    echo "KELAS : TI-2G";
});
//nomor3
Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah halaman Artikel dengan ID: ".$id;
});
*/


//PRAKTIKUM 2
/*
//nomor1
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

//nomor2
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
*/


//PRAKTIKUM 3
//nomor1
Route::get('/', [WelcomeController::class, 'index']);
//nomor2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        // Matches The "/category/marbel-edu-games" URL
        echo "Display 'MARBEL EDU GAMES'";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        // Matches The "/category/marbel-and-friends-kids-games" URL
        echo "Display 'MARBEL AND FRIENDS KIDS GAMES'";
    });
    Route::get('riri-story-books', function () {
        // Matches The "/category/riri-story-books" URL
        echo "Display 'RIRI STORY BOOKS'";
    });
    Route::get('kolak-kids-songs', function () {
        // Matches The "/category/kolak-kids-songs" URL
        echo "Display 'KOLAK KIDS SONGS'";
    });
});
//nomor3
Route::get('/news/{id}', function ($id) {
    return 'News '.$id;
    });
    Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
    });
//nomor4
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        // Matches The "/program/karir" URL
        echo "Display 'KARIR MAHASISWA'";
    });
    Route::get('/magang', function () {
        // Matches The "/program/magang" URL
        echo "Display 'MAGANG MAHASISWA'";
    });
    Route::get('kunjungan-industri', function () {
        // Matches The "/program/kunjungan-industri" URL
        echo "Display 'KUNJUNGAN INDUSTRI MAHASISWA'";
    });
});
//nomor5
Route::get('/about-us', function () {
    echo "Saya sedang belajar routing dan controller pada web";
});



/*

*/