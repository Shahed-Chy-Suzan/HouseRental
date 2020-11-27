<?php

namespace App\Http\Controllers\Admin;
use DB;
use Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



//------------------------User Property Show/Read to Admin-Panel----------------------------------


//----------------------------------------------------------------------------
// --ekhane Database onosare "Status" er term gular rules holo :--
//         Status = 0 = Pending
//         Status = 1 = PropertyAccepted === Upload_Property
//         Status = 2 = Delivery_Progress
//         Status = 3 = Successfully_Delivered
//         Status = 4 = Cancelled_Property
// --frontend e show korbe = 1 && 2 hole
//-----------------------------------------------------------------------------



//--------------Add Property(form) by Admin------------
    public function create(){
        $city=DB::table('cities')->get();
        $subcity=DB::table('subcities')->get();
        return view('admin.properties.create',compact('city','subcity'));
    }


//--------------Read---Nav-(Pending_Properties)------------------------
    public function backendUserProperty(){
        $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->select('user_properties.*','cities.city_name')
                ->where('status',0)
                ->get();
        return view('admin.properties.user_property_request',compact('property'));
        // dd($userProperties);
    }


//------------Delete----------------
    public function DeleteProperty($id){
        $property=DB::table('user_properties')->where('id',$id)->first();
        $image1=$property->image_one;
        $image2=$property->image_two;
        $image3=$property->image_three;
        unlink($image1);
        unlink($image2);
        unlink($image3);
        DB::table('user_properties')->where('id',$id)->delete();
        $notification=array(
                    'message'=>'Successfully Property Deleted ',
                    'alert-type'=>'success'
                    );
        return Redirect()->back()->with($notification);
    }


//------------view-------------
    public function ViewProperty($id){

        $check = DB::table('orders')->where('property_id',$id)->exists();

        if($check){
            $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->join('subcities','user_properties.subcity_id','subcities.id')
                ->join('orders','user_properties.id','orders.property_id')
                ->select('user_properties.*','cities.city_name','subcities.subcity_name','orders.amount','orders.transaction_id')
                ->where('user_properties.id',$id)
                ->first();
            return view('admin.properties.show',compact('property'));
        }
        else{
            $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->join('subcities','user_properties.subcity_id','subcities.id')
                ->select('user_properties.*','cities.city_name','subcities.subcity_name')
                ->where('user_properties.id',$id)
                ->first();
            return view('admin.properties.show',compact('property'));
        }

    }



//--------------------------------------------------------------------------------------------------------------------

//--------------Upload_property(button)------------------
    public function uploadProperty($id){
        DB::table('user_properties')->where('id',$id)->update(['status'=>1]);
        $notification=array(
                'message'=>'Property Upload Done',
                'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

//---------------Cancel_property(button)-------------------
    public function cancelProperty($id){
        DB::table('user_properties')->where('id',$id)->update(['status'=>4]);
        $notification=array(
                'message'=>'Property Cancelled',
                'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }

//---------------Delivery_Progress-property(button)-------------------
    public function DeliveryProgress($id){
        DB::table('user_properties')->where('id',$id)->update(['status'=>2]);
        $notification=array(
                'message'=>'Sent To Delivery',
                'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

//---------------Pendin_Stage-property(button)-------------------
    public function pendingProperty($id){
        DB::table('user_properties')->where('id',$id)->update(['status'=>0]);
        $notification=array(
                'message'=>'Sending Back To Pending Stage',
                'alert-type'=>'warning'
        );
        return Redirect()->back()->with($notification);
    }

//---------------Delivery_Done-property(button)-------------------
    public function DeliveryDone($id){

        DB::table('user_properties')->where('id',$id)->update(['status'=>3,'date'=>date('d-m-y'),'month'=>date('F'),'year'=>date('Y')]);
        $notification=array(
                'message'=>'Property Delivered Successfully',
                'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }







//----------------------------------NAV---------------------------------------------------
    public function uploadedProperties(){
        $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->select('user_properties.*','cities.city_name')
                ->where('status',1)
                ->get();
        return view('admin.properties.user_property_request',compact('property'));
    }

    public function delivery_Progress(){
        $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->select('user_properties.*','cities.city_name')
                ->where('status',2)
                ->get();
        return view('admin.properties.user_property_request',compact('property'));
    }

    public function successfully_Delivered(){
        $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->select('user_properties.*','cities.city_name')
                ->where('status',3)
                ->get();
        return view('admin.properties.user_property_request',compact('property'));
    }

    public function cancelledProperty(){
        $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->select('user_properties.*','cities.city_name')
                ->where('status',4)
                ->get();
        return view('admin.properties.user_property_request',compact('property'));
    }



//---------------------------------------------------------------------------------------------------------------------------


//-----------------Edit---------------------
    public function EditProperty($id){
        $property=DB::table('user_properties')->where('id',$id)->first();

        return view('admin.properties.edit',compact('property'));
    }


//---------------Update-----------------------
    public function UpdatePropertyWithoutPhoto(Request $request,$id){

        if($request->discount_price == NULL){
            $price= implode(explode(',',$request->price));
            $total= $price + $request->service_charge;
        }
        else{
            $discount_price= implode(explode(',',$request->discount_price));
            $total= $discount_price + $request->service_charge;
        }

        $subCity=$request->subcity_id;
        $separate= explode('|',$subCity);
        // $subcit_id=$separate[0];
        // $subcit_name=$separate[1];
        // $data['subcity_id']=$subcit_id;
        // $data['subcity']=$subcit_name;

        $data=array();
        // $data['user_id']=Auth::id();
        $data['city_id']=$request->city_id;
        $data['subcity_id']=$separate[0];  //$request->subcity_id;  //id
        $data['subcity']= $separate[1];    //$request->subcity; //name
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;
    	$data['address']=$request->address;
    	$data['bedroom']=$request->bedroom;
    	$data['bathroom']=$request->bathroom;
    	$data['parking']=$request->parking;
    	$data['type']=$request->type;
    	$data['kitchen']=$request->kitchen;
    	$data['area']=$request->area;
        $data['price']=$request->price;
        $data['discount_price']=$request->discount_price;
        $data['total_price']=$total;
        $data['category']=$request->category;
        $data['floor']=$request->floor;
    	$data['details']=$request->details;
    	$data['video']=$request->video;
        $data['purpose']=$request->purpose;
        $data['map_link']=$request->map_link;
        // $data['status']=0;
        // $data['property_code']= 'BW-'.mt_rand(100000,999999);
        // $data['date']=date('d-m-y');
        // $data['month']=date('F');
        // $data['year']=date('Y');
        $data['trend']=$request->trend;
        $data['best_rated']=$request->best_rated;
        $data['hot_new']=$request->hot_new;
        $data['service_charge']=$request->service_charge;
        // $data['added_by']=$request->added_by;

        $update=DB::table('user_properties')->where('id',$id)->update($data);
        if ($update) {
            $notification=array(
                    'message'=>'Successfully Property Updated',
                    'alert-type'=>'success'
            );
            // return Redirect()->route('pending.user_property')->with($notification);
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                    'message'=>'Nothing To Update',
                    'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }


//--------------------
    public function UpdatePropertyPhoto(Request $request,$id){
        $old_one=$request->old_one;
        $old_two=$request->old_two;
        $old_three=$request->old_three;

        $image_one=$request->image_one;
        $image_two=$request->image_two;
        $image_three=$request->image_three;
        $data=array();

        if($image_one) {  //$request->has('image_one')
        unlink($old_one);
        $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(1140,702)->save('public/media/user_property/'.$image_one_name);
        $data['image_one']='public/media/user_property/'.$image_one_name;
        DB::table('user_properties')->where('id',$id)->update($data);
            $notification=array(
                    'message'=>'Image One Updated',
                    'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);


        }if($image_two) {   ////$request->has('image_two')
        unlink($old_two);
        $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(1140,702)->save('public/media/user_property/'.$image_two_name);
        $data['image_two']='public/media/user_property/'.$image_two_name;
        DB::table('user_properties')->where('id',$id)->update($data);
            $notification=array(
                    'message'=>'Image Two Updated',
                    'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);

        }if($image_three) {     //$request->has('image_three')
        unlink($old_three);
        $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
        Image::make($image_three)->resize(1140,702)->save('public/media/user_property/'.$image_three_name);
        $data['image_three']='public/media/user_property/'.$image_three_name;
        DB::table('user_properties')->where('id',$id)->update($data);
            $notification=array(
                    'message'=>'Image Three Updated',
                    'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);

    //-----Not working from here---------//
        }if($image_one && $image_two){      //$request->has('image_one') && $request->has('image_two')

        unlink($old_one);
        $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(1140,702)->save('public/media/user_property/'.$image_one_name);
        $data['image_one']='public/media/user_property/'.$image_one_name;

        unlink($old_two);
        $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(1140,702)->save('public/media/user_property/'.$image_two_name);
        $data['image_two']='public/media/user_property/'.$image_two_name;

        DB::table('user_properties')->where('id',$id)->update($data);
            $notification=array(
                    'message'=>'Image One and Two Updated',
                    'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);



        }if($image_one && $image_two && $image_three){  //$request->has('image_one') && $request->has('image_two') && $request->has('image_three')
        unlink($old_one);
        unlink($old_two);
        unlink($old_three);
        $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(1140,702)->save('public/media/user_property/'.$image_one_name);
        $data['image_one']='public/media/user_property/'.$image_one_name;

        $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(1140,702)->save('public/media/user_property/'.$image_two_name);
        $data['image_two']='public/media/user_property/'.$image_two_name;

        $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
        Image::make($image_three)->resize(1140,702)->save('public/media/user_property/'.$image_three_name);
        $data['image_three']='public/media/user_property/'.$image_three_name;

        DB::table('user_properties')->where('id',$id)->update($data);
            $notification=array(
                    'message'=>'Image One and Two and Three Updated',
                    'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }
        return Redirect()->back()->with($notification);

    }




}
