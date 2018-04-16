<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Award;
use DB;
use Carbon\Carbon;

class AwardsController extends Controller
{

    public function awards(Request $request) {

    	$award_exist = Award::where('email', $request->email)->orWhere('uuid', $request->uuid)->get();

    	if($award_exist->isEmpty()) {
    		$award = new Award();
			$award->name = $request->name;
			$award->email = $request->email;
			$award->faculty = $request->faculty;
			$award->career = $request->career;
			$award->phone_number = $request->phone_number;
			$award->uuid = $request->uuid;
			$award->save();
			$result = 'Buenísimo, ya te encuentras participando del sorteo.';
    	} else {
    		$result = 'Tu dispositivo ya se encuentra registrado en el sorteo.';
    	}
		
		return response()->json($result)->setStatusCode( Response::HTTP_OK, Response::$statusTexts[ Response::HTTP_OK ]);
	}
}
