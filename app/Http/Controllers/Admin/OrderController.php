<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


//--------------Add new Order(form) by Admin------------
    public function addOrder(){
        return view('admin.order.add_order');
    }

//--------------------------Property Orders------------------------------------------------------
// --ekhane Database(interested_properties) onosare "Status" er term gular rules holo:-
//         Status = 0 = New/Unseen Orders
//         Status = 1 = Seen/all Orders
//-----------------------------------------------------------------------------------------------

//--------------Read/New/Unseen Order(nav)----------------
    public function newOrder(){
        $order=DB::table('interested_properties')->where('status',0)->get();
        return view('admin.order.orders',compact('order'));
    }

//---------------Seen/all Orders(nav)----------------
    public function allOrder(){
        $order=DB::table('interested_properties')->where('status',1)->get();
        return view('admin.order.orders',compact('order'));
    }


//------------View-------------
    public function ViewProperty($property_code){
        $property=DB::table('user_properties')
                ->join('cities','user_properties.city_id','cities.id')
                ->join('subcities','user_properties.subcity_id','subcities.id')
                ->select('user_properties.*','cities.city_name','subcities.subcity_name')
                ->where('user_properties.property_code',$property_code)
                ->first();
        return view('admin.properties.show',compact('property'));
    }

//-----------------Delete----------------------
    public function deleteOrder($id){
        DB::table('interested_properties')->where('id',$id)->delete();

        $notification = array(
            'message'=>'Successfully Property Order Deleted',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

//------------Mark as Read----------------------
    public function markAsRead($id){
        DB::table('interested_properties')->where('id',$id)->update(['status'=> 1]);
        $notification=array(
                    'message'=>'Successfully Order Marked as Responded',
                    'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }

//-------------Mark as Unread--------------------
    public function markAsUnRead($id){
        DB::table('interested_properties')->where('id',$id)->update(['status'=> 0]);
        $notification=array(
                    'message'=>'Successfully Order Marked as New Order',
                    'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }



}
