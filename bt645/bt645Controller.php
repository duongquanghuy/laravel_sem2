<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class bt645Controller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function addProduct(Request $request){
      
    	return view('bt645.viewAddproduct');
    }
    public function postProduct(Request $request){
    	$product = $imgProduct = $priceProduct = $description = '';
        
    	
    		
    	$product = $request['product'];
    		
    	
    	$imgProduct = $request['imgProduct'];
    	
    		
    	$priceProduct = $request['priceProduct'];
    
    	$description = $request['description'];
    	
        if ($product != '' && $imgProduct != '') {
                $dataProduct[] =  array('name' => $product,'imgProduct' => $imgProduct,'priceProduct' => $priceProduct,'description' => $description );
              
           
            
           echo '<h1>name '.$product.'</h1>
                 <h1>name '.$imgProduct.'</h1>
                 <h1>name '.$priceProduct.'</h1>
                 <h1>name '.$description.'</h1>

                ';
        }else{
            return redirect()->route('viewAdd');
        }
    


        
    }
}
