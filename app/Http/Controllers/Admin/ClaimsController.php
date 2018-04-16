<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Claim;
use DB;
use Carbon\Carbon;

class ClaimsController extends Controller
{
	public function claims(Request $request) {

		$claim = new Claim();
		$claim->name = $request->name;
		$claim->phone_number = $request->phone_number;
		$claim->type = $request->type;
		$claim->description = $request->description;
		$claim->save();

		$result = 'Buenísimo, acabamos de registrar tu ' . $claim->type . '. Muchas gracias.';
		
		return response()->json($result)->setStatusCode( Response::HTTP_OK, Response::$statusTexts[ Response::HTTP_OK ]);
	}
}
