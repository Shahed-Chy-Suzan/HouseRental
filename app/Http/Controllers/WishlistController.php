<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class WishlistController extends Controller
{


//--------------(normally using toastr)------------
    public function AddWishlist($id){
    	$userid=Auth::id();
    	$check=DB::table('wishlists')->where('user_id',$userid)->where('property_id',$id)->first();

    	$data = array(
    		'user_id' => $userid,
    		'property_id'=>$id
    	);

    	if (Auth::check()) {
    		if ($check) {
                 $notification=array(
                    'message'=>'Property already has on your Wishlist',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
    		}else{
                DB::table('wishlists')->insert($data);
                $notification=array(
                    'message'=>'Successfully Added on your Wishlist',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
    		}
    	}else{
            $notification=array(
                'message'=>'At first login to your Account',
                'alert-type'=>'warning'
            );
            return Redirect()->back()->with($notification);
    	}
    }


//--------------------------------------------

    public function Wishlist(){
        $userid=Auth::id();
        $property=DB::table('wishlists')
                    ->join('user_properties','wishlists.property_id','user_properties.id')
                    ->join('cities','user_properties.city_id','cities.id')
                    ->join('subcities','user_properties.subcity_id','subcities.id')
                    ->select('user_properties.*','wishlists.user_id','cities.city_name','subcities.subcity_name')
                    ->where('wishlists.user_id',$userid)
                    ->get();

        // $property2=DB::table('user_properties')
        //             ->join('cities','user_properties.city_id','cities.id')
        //             ->join('subcities','user_properties.subcity_id','subcities.id')
        //             ->select('cities.city_name','subcities.subcity_name')
        //             ->where('user_properties.user_id',$userid)
        //             ->first();
                    // dd($property);
            return view('pages.wishlist',compact('property'));
    }


}
