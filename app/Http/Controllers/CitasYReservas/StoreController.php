<?php

namespace App\Http\Controllers\CitasYReservas;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Geolocation;

class StoreController extends Controller
{   
	use Geolocation;

    public function index(Request $request)
    {
        try{

			$lat = null;
			$lon = null;
        	$geo = false;

        	if (isset($request->lat) && isset($request->lon)) {
        		$lat = $request->lat;
        		$lon = $request->lon;
        		$geo = true;
        	}
        	
        	$new_stores_response = [];

            $stores = Store::select(
        						'store.store_id',
        						'store.name',
        						'store.description',
        						'store.hours',
        						'store.geolocation',
        						'store.image_banner',
        						'store.image_logo',
        						'store.discount_percentage',
        						'store.cash_back',
        						'store_config_reservas.active_citas',
        						'store_config_reservas.active_reservas'
            				)
            			   ->join('store_config_reservas','store_config_reservas.store_id','store.store_id')
            			   ->where('store.store_reserves','Y')
            			   ->orderBy('store.store_id','DESC')
            			   ->get();
            
        	foreach ($stores as $key => $store) {
   		     	$new_stores_response[$key]['store_id'] = $store['store_id'];
   		     	$new_stores_response[$key]['name'] = $store['name'];
   		     	$new_stores_response[$key]['description'] = $store['description'];
   		     	$new_stores_response[$key]['hours'] = $store['hours'];
   		     	$new_stores_response[$key]['image_banner'] = $store['image_banner'];
   		     	$new_stores_response[$key]['image_logo'] = $store['image_logo'];
   		     	$new_stores_response[$key]['discount_percentage'] = $store['discount_percentage']; 
   		     	$new_stores_response[$key]['cash_back'] = $store['cash_back'];
   		     	$new_stores_response[$key]['active_citas'] = $store['active_citas']; 
   		     	$new_stores_response[$key]['active_reservas'] = $store['active_reservas'];

   		     	$location =  explode(',', $store['geolocation']);
   		     	$new_stores_response[$key]['km'] = $geo ? $this->getDistancia($lat,$lon,$location[0],$location[1]) : null;
   		    } 	
            
            $best_discount = Store::select(
        						'store.store_id',
        						'store.name',
        						'store.hours',
        						'store.image_banner',
        						'store.image_logo',
        						'store.discount_percentage'
        					)
            			   ->join('store_config_reservas','store_config_reservas.store_id','store.store_id')
            			   ->where('store.store_reserves','Y')
            			   ->orderBy('store.discount_percentage','DESC')
            			   ->get();

            $best_rating = Store::select(
        						'store.store_id',
        						'store.name',
        						'store.image_banner',
        						'store.image_logo',
        						'store.score'
        					)
            			   ->join('store_config_reservas','store_config_reservas.store_id','store.store_id')
            			   ->where('store.store_reserves','Y')
            			   ->orderBy('store.score','DESC')
            			   ->get(); 			   
       		
            $store_available = Store::join('store_config_reservas','store_config_reservas.store_id','store.store_id')
		            			   ->where('store.store_reserves','Y')
		            			   ->orderBy('store.score','DESC')
		            			   ->count('store.store_id'); 		    			   

            return response()->json([
            							'status' => 'OK', 
            							'new_stores' => $new_stores_response,
            							'best_discount' => $best_discount,
            							'best_rating' => $best_rating,
            							'store_available' => $store_available,
            						],200);
        } catch (Exception $e) {
            return response()->json(['error'=> $e->getMessage()], 500);
        }
    }
}
