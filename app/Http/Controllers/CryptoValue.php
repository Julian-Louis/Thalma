<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CryptoValue extends Controller
{
    //

    public static function bitcoin()
    {
        $bitcoinInfo = json_decode(self::getCryptoCurrencyInformation("bitcoin"));
        return [
            'text'=> 's',
            'completed'=>'false',
        ];

        // return $bitcoinInfo->bpi->EUR->rate;

    }


    /**
     * Retrieves the complete information providen by the coinmarketcap API from a single currency.
     * By default returns only the value in USD.
     *
     * WARNING: do not use this code in production, it's just to explain how the API works and how
     * can the information be retrieved. See step 3 for final implementation.
     *
     * @param string $currencyId Identifier of the currency
     * @param string $convertCurrency
     * @return mixed
     * @see https://coinmarketcap.com/api/
     */
    public static function getCryptoCurrencyInformation($currencyId, $convertCurrency = "EUR")
    {
        // Create a new Guzzle Plain Client
        $client = new Client();

        // Define the Request URL of the API with the providen parameters
        $requestURL = "https://api.coindesk.com/v1/bpi/currentprice.json";

        // Execute the request
        $singleCurrencyRequest = $client->request('GET', $requestURL)->getBody()->getContents();


        return $singleCurrencyRequest;
    }
}
