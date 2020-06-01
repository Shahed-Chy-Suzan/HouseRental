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
                    'message'=>'Successfully order marked as read',
                    'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }

//-------------Mark as Unread--------------------
    public function markAsUnRead($id){
        DB::table('interested_properties')->where('id',$id)->update(['status'=> 0]);
        $notification=array(
                    'message'=>'Order marked as Unread',
                    'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }



}
