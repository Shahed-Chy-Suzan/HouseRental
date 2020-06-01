<?php

namespace App\Http\Controllers;
use DB;
use Image;
use Auth;
use Illuminate\Http\Request;

class FrontController extends Controller
{

//-----------------Newsletter-------------------------------------------
    public function storeNewsletter(Request $request){
        $validatedData = $request->validate([
            'email'  => 'required|unique:newsletters|max:55',
        ]);

        $data=array();
        $data['email']=$request->email;
        $category= DB::table('newsletters')->insert($data);

        $notification = array(
            'message'=>'Thanks for Subscribing',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
//----------------//------------------//-------------------//------------------//-----------------//------------



//----------------User Contact Message//Get_in_Touch--------------------------
    public function storeContact(Request $request){
        $data= array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['subject']=$request->subject;
        $data['message']=$request->message;
        $data['status']=0;
        $data['date']=date('d-m-y');

        $contact= DB::table('contacts')->insert($data);

        $notification = array(
            'message'=>'Thanks for your Message! We will replay you soon',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
//----------------//--------------//--------------//----------------//----------------//----------------//----



//--------------user_property_add_form--------------------------
    public function userProperty(){
        return view('pages.user_add_property');
    }

//----------------Store_User_added_Property----------------------------
    public function storeUserProperty(Request $request){
        $data=array();
        $data['user_id']=Auth::id();
        $data['city_id']=$request->city_id;
        $data['subcity_id']=$request->subcity_id;
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;
    	$data['address']=$request->address;
    	$data['subcity']=$request->subcity;
    	$data['bedroom']=$request->bedroom;
    	$data['bathroom']=$request->bathroom;
    	$data['parking']=$request->parking;
    	$data['type']=$request->type;
    	$data['kitchen']=$request->kitchen;
    	$data['area']=$request->area;
        $data['price']=$request->price;
        $data['discount_price']=$request->discount_price;
        $data['category']=$request->category;
        $data['floor']=$request->floor;
    	$data['details']=$request->details;
    	$data['video']=$request->video;
        $data['purpose']=$request->purpose;
        $data['status']=0;
        $data['property_code']= 'BW-'.mt_rand(100000,999999);
        $data['map_link']=$request->map_link;
        $data['date']=date('d-m-y');
        $data['month']=date('F');
        $data['year']=date('Y');
        $data['trend']=$request->trend;
        $data['best_rated']=$request->best_rated;
        $data['hot_new']=$request->hot_new;
        $data['service_charge']=$request->service_charge;
        $data['added_by']=$request->added_by;

    	$image_one=$request->image_one;
    	$image_two=$request->image_two;
    	$image_three=$request->image_three;

    if($image_one && $image_two && $image_three){
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(600,467)->save('public/media/user_property/'.$image_one_name);
                $data['image_one']='public/media/user_property/'.$image_one_name;

            $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(600,467)->save('public/media/user_property/'.$image_two_name);
                $data['image_two']='public/media/user_property/'.$image_two_name;

            $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(600,467)->save('public/media/user_property/'.$image_three_name);
                $data['image_three']='public/media/user_property/'.$image_three_name;

                $userProperty=DB::table('user_properties')->insert($data);

                $notification=array(
                    'message'=>'Successfully Property Inserted',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
        }
    }

//----------------------------------------------------------------------------------------------------------





}
