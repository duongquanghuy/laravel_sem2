<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


class bt646Controller extends Controller
{
    public function showHotel(Request $request){
	    
		

   		$index = 1;
   		$dataFake =  [];
    	$dataFake[0] =  array( 'maPhong' => 112 , 'loaiPhong' => 'A' ,'tang' => 1 , 'giaTien' => 100 );
    	$dataFake[1] =   array( 'maPhong' => 112 , 'loaiPhong' => 'b' ,'tang' => 2 , 'giaTien' => 100 );
    	$dataFake[2] =   array( 'maPhong' => 112 , 'loaiPhong' => 'b' ,'tang' => 3 , 'giaTien' => 100 );
    	$dataFake[3] =   array( 'maPhong' => 112 , 'loaiPhong' => 'd' ,'tang' => 4 , 'giaTien' => 100 );

    
    
    	
    	return view('bt646.index')->with([
    		'index' => $index,
    		'dataFake' => $dataFake,

    	]);

    }
    public function showDetail(Request $request){
    	$hotelList =  DB::table('bt646')->paginate(3);

    	$index = 1;
    	if (isset($request->page)) {
    	 	$index = ($request->page-1)*3+1;
    	 } 

    	return view('bt646.view')->with([
    		'index' => $index,
    		'hotelList' => $hotelList

    	]);
    }
    
}
