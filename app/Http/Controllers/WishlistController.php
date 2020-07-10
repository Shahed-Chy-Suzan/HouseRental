<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class WishlistController extends Controller
{

//----------------applied AJAX here------------------------------
    public function AddWishlist($id){
        $userid=Auth::id();
        $check=DB::table('wishlists')->where('user_id',$userid)->where('property_id',$id)->first();

        $data = array(
            'user_id' => $userid,
            'property_id'=>$id
        );

        if (Auth::check()) {
            if ($check) {
                return response()->json(['error' => 'This Property already has on your Wishlist']);
            }else{
                DB::table('wishlists')->insert($data);
                return response()->json(['success' => 'Successfully Added on your wishlist']);
            }
        }else{
            return response()->json(['error' => 'At first login to your Account']);
        }

    }



//--------------Add Wishlist(normally using Toastr)------------
    public function AddWishlistTostr($id){
    	$userid=Auth::id();
    	$check=DB::table('wishlists')->where('user_id',$userid)->where('property_id',$id)->first();

    	$data = array(
    		'user_id' => $userid,
    		'property_id'=>$id
    	);

    	if (Auth::check()) {
    		if ($check) {
                 $notification=array(
                    'message'=>'This Property already has on your Wishlist',
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



//----------------/Read/View_Wishlist_(Top_Nav)-Button/----------------------------
    public function Wishlist(){
        $userid=Auth::id();
        $property=DB::table('wishlists')
                    ->join('user_properties','wishlists.property_id','user_properties.id')
                    ->join('cities','user_properties.city_id','cities.id')
                    ->join('subcities','user_properties.subcity_id','subcities.id')
                    ->join('users','wishlists.user_id','users.id')
                    ->select('user_properties.*','wishlists.*','cities.city_name','subcities.subcity_name','users.*')
                    ->where('wishlists.user_id',$userid)
                    ->whereIn('status', [1,2])
                    ->paginate(4);

        $wishlistCount=DB::table('wishlists')
                    ->join('user_properties','wishlists.property_id','user_properties.id')
                    ->join('cities','user_properties.city_id','cities.id')
                    ->join('subcities','user_properties.subcity_id','subcities.id')
                    ->join('users','wishlists.user_id','users.id')
                    ->select('user_properties.*','wishlists.*','cities.city_name','subcities.subcity_name','users.*')
                    ->where('wishlists.user_id',$userid)
                    ->whereIn('status', [1,2])
                    ->get();
        return view('pages.wishlist',compact('property','wishlistCount'));
    }


//---------------//----------------//---------------//---------------//-----------------//--------////--//-----



//---------------------Store_Email_Modal---------------------------------
    public function storeModal(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['property_code']=$request->property_code;
        $data['status']=0;
        $data['message']=$request->message;
        $data['date']= date('d-m-y');

        $modal= DB::table('interested_properties')->insert($data);
        // return response()->json(['success' => 'Your property order request has been recorded.']);

        $notification = array(
            'message'=>'Your property order request has been recorded.',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

}
