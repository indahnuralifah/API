<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Controllers\TiketAPI\APIController as API;

class Reservasi extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function flight()
	{
		$s['airport'] = \App\Airport::all();
		//view reservasi/flight.blade.php with data
		return view('reservasi.flight')->with($s);
	}





	

}
