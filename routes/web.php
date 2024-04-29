<?php

use Illuminate\Support\Facades\Route;
use App\Models\Weather;
use App\Models\News;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\WeatherAdd;
use App\Http\Controllers\NewsAdd;

use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/favorites', function () {
    $userWeather = Weather::where('user_id', '=', Auth::user()->id)->get();
    $storage = array();
    for ($i = 0; $i < count($userWeather); $i++) {
        $request = Http::get("api.openweathermap.org/data/2.5/forecast?lat=".$userWeather[$i]->lat."&lon=".$userWeather[$i]->lon."&units=imperial&appid=8af833f9b0b265a82b696bc9e10f35dd");
        $data = $request->json();
        $data['id'] = $userWeather[$i]->id;
        array_push($storage, $data);
    }
    return view('favorites', ['userWeather' => $storage]);
});

Route::get('/detail/{weather}', function (Weather $weather) {
    $lat = $weather->lat;
    $lon = $weather->lon;
    $request = Http::get("api.openweathermap.org/data/2.5/forecast?lat=$lat&lon=$lon&units=imperial&appid=8af833f9b0b265a82b696bc9e10f35dd");
    $data = $request->json();
    return view('detail', ['weather' => $data]);
});

Route::get('/search', function () {
    return view('search.create');
});

Route::get('/news', function (News $news) {
    return view('news', ['news' => $news->all()]);
});

Route::get('/news/create', function () {
    return view('news.create');
});

Route::post('/release', [NewsAdd::class, 'store'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [LogoutController::class, 'create'])->middleware('guest');
Route::post('/login', [LogoutController::class, 'store'])->middleware('guest');
Route::post('/logout', [LogoutController::class, 'destroy'])->middleware('auth');

Route::post('/precipitate', [WeatherAdd::class, 'store'])->middleware('auth');
Route::get('/delete/{id}', [WeatherAdd::class, 'destroy'])->middleware('auth');