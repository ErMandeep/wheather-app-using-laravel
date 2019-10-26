<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Input;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function myapp(Request $request){

    	if(request('city')){
    	$city = request('city');
    	}else{

    	$city = 'Chandigarh';
    	}

// api website https://weatherstack.com/dashboard

    	$access_key = 'db4d22fda877f11681af765c3d59731a';
    	$url = 'http://api.weatherstack.com/current?access_key='.$access_key.'&query='.$city;
    	$app = file_get_contents($url);

    	$data = json_decode($app, true);

    	$a = response()->json($data); 


    	$wind_dir = $a->getData()->current->wind_dir;
    	$request = $a->getData()->request->query;
    	$location = $a->getData()->location->name;
    	$temperature = $a->getData()->current->temperature;
    	$precip = $a->getData()->current->precip;
    	$humidity = $a->getData()->current->humidity;
    	$pressure = $a->getData()->current->pressure;
    	$weather_descriptions = $a->getData()->current->weather_descriptions[0];

    	return view('app' , compact('request', 'weather_descriptions', 'wind_dir', 'temperature', 'precip', 'humidity', 'pressure', 'location'));

    }



}
