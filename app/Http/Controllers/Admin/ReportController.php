<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function TodayOrder()
    {
        $today=date('d-m-y');
        $order=DB::table('interested_properties')->whereIn('status',[0,1])->where('date',$today)->get();
        return view('admin.report.today_order',compact('order'));
    }

    public function TodayDelevered()
    {
        $today=date('d-m-y');
        $total=DB::table('user_properties')->where('status',3)->where('date',$today)->sum('total_price');
        $order=DB::table('user_properties')->where('status',3)->where('date',$today)->get();
        return view('admin.report.search_report',compact('order','total'));
    }

    public function ThisMonth()
    {
        $month=date('F');
        $total=DB::table('user_properties')->where('status',3)->where('month',$month)->sum('total_price');
        $order=DB::table('user_properties')->where('status',3)->where('month',$month)->get();
        return view('admin.report.search_report',compact('order','total'));
    }

    public function search()
    {
        return view('admin.report.search');
    }

    public function searchByYear(Request $request)
    {
        $year=$request->year;
        $total=DB::table('user_properties')->where('status',3)->where('year',$year)->sum('total_price');
        $order=DB::table('user_properties')->where('status',3)->where('year',$year)->get();
        return view('admin.report.search_report',compact('order','total'));
    }

    public function searchByMonth(Request $request)
    {
        $month=$request->month;
        $total=DB::table('user_properties')->where('status',3)->where('month',$month)->sum('total_price');
        $order=DB::table('user_properties')->where('status',3)->where('month',$month)->get();
        return view('admin.report.search_report',compact('order','total'));
    }

    public function searchByDate(Request $request)
    {
        $date=$request->date;
        $newdate = date("d-m-y", strtotime($date)); //date ta k Database er formate(d-m-y) e ana hoyeche,
        $total=DB::table('user_properties')->where('status',3)->where('date',$newdate)->sum('total_price');
        $order=DB::table('user_properties')->where('status',3)->where('date',$newdate)->get();
        return view('admin.report.search_report',compact('order','total'));
    }



//--------------//----------------//----------------//-----------------//----------------//----------------//-------



//==============================================================================
        //------------ User_Role --//-- Admin_Add --------------------
//==============================================================================

    public function UserRole(){
        $user=DB::table('admins')->where('type',2)->get();
        return view('admin.role.all_role',compact('user'));
    }

    public function UserCreate(){
    	return view('admin.role.create');
    }


    public function UserStore(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['password']= Hash::make($request->password);
        $data['places']=$request->places;
        $data['coupon']=$request->coupon;
        $data['blogs']=$request->blogs;
        $data['all_properties']=$request->all_properties;
        $data['orders']=$request->orders;
        $data['reports']=$request->reports;
        $data['user_role']=$request->user_role;
        $data['newsletter']=$request->newsletter;
        $data['contact_messages']=$request->contact_messages;
        $data['site_setting']=$request->site_setting;
        $data['database_backup']=$request->database_backup;
        $data['type']=2;

        DB::table('admins')->insert($data);
        $notification=array(
                'message'=>'Child Admin Created Successfully',
                'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }


    public function UserDelete($id){
        DB::table('admins')->where('id',$id)->delete();
        $notification=array(
                'message'=>' Admin Deleted Successfully',
                'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);
    }


    public function UserEdit($id){
        $user=DB::table('admins')->where('id',$id)->first();
        return view('admin.role.edit_role',compact('user'));
    }

    public function UserUpdate(Request $request)
    {
        $id=$request->id;
        $data=array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['places']=$request->places;
        $data['coupon']=$request->coupon;
        $data['blogs']=$request->blogs;
        $data['all_properties']=$request->all_properties;
        $data['orders']=$request->orders;
        $data['reports']=$request->reports;
        $data['user_role']=$request->user_role;
        $data['newsletter']=$request->newsletter;
        $data['contact_messages']=$request->contact_messages;
        $data['site_setting']=$request->site_setting;
        $data['database_backup']=$request->database_backup;

        $update = DB::table('admins')->where('id',$id)->update($data);

        if ($update) {
            $notification=array(
                    'message'=>'Child Admin Updated Successfully',
                    'alert-type'=>'success'
            );
                return Redirect()->route('create.user.role')->with($notification);
        }else{
            $notification=array(
                'message'=>'Nothing To Updated ',
                'alert-type'=>'success'
        );
            return Redirect()->route('create.user.role')->with($notification);
        }
    }


}
