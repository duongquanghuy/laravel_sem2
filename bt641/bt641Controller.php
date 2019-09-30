<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Blog;
class bt641Controller extends Controller
{
  
    public function inputStudent(Request $request){
    	DB::table('bt641')->insert([

    		'fullName' =>$request->fullName,
    		'age'      =>$request->age,
    		'address'  =>$request->address

    	]);
    	return redirect()->route('viewDisplay');

    }

    public function display(Request $request){
    	$studentList = DB::table('bt641')->paginate(10);

    	$index =1 ;
    	if(isset($request->page)){
    		$index = ($request->page-1)*10-1;
    	}

    	return view('bt641.student')-> with([
    		'index' =>$index,
    		'studentList' => $studentList
    	]);
    }
    //delete
    public function destroy($id)
	{
   		DB::table('bt641')->where('id', '=', $id)->delete();
    	return redirect()->route('viewDisplay');
	}
	//update
	    
}
