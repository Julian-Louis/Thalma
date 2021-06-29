<?php

use App\Http\Controllers\CryptoValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/bitcoin', CryptoValue::bitcoin());

 Route::get('/bitcoin', function (Request $request) {
     return response()->json(json_decode(CryptoValue::getCryptoCurrencyInformation("bitcoin"))->bpi->EUR);
});

 Route::get('/info', function (Request $request) {

     $value = rand(0,1);
     if($value == 0){
         $truc = json_decode(CryptoValue::getCryptoCurrencyInformation("bitcoin"))->bpi->EUR->rate;
         $badgeValue = "BTC";
         $imagePath = "/img/bitcoin.png";
         $textInfo = "La valeur du bitcoin est de ".$truc.'€';

         return ['badge'=>$badgeValue,'text'=>$textInfo,'image'=>$imagePath];
     }
     $truc = json_decode(CryptoValue::getCryptoCurrencyInformation("etherum"))->bpi->EUR->rate;
     $badgeValue = "ETH";
     $imagePath = "/img/eth.png";
     $textInfo = "La valeur du ETH est de ".$truc.'€';

     return ['badge'=>$badgeValue,'text'=>$textInfo,'image'=>$imagePath];

});



