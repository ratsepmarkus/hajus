<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class WeatherController extends Controller
{
    public function index()
    {
        $lat = 58.25;
        $lon = 22.49;

        if (Cache::has("weather")) {
            $data = Cache::get('weather');
        } else {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&units=metric&appid=" . config("services.weather.key"));
            // return $response;
            Cache::put("weather", array("name" => $response["name"], "sys" => $response["sys"], "wind" => $response["wind"], "weather" => $response["weather"], "main" => $response["main"]));
            $data = Cache::get("weather");
        }
        return Inertia::render('Weather', [
            'data' => $data
        ]);
    }
}
