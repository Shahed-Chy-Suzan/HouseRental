<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class SubcityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

//------------read----------------
    public function subcities(){
        $city=DB::table('cities')->get();
        $subcity=DB::table('subcities')
            ->join('cities','subcities.city_id','cities.id')
            ->select('subcities.*','cities.city_name')
            ->get();
        return view('admin.city.subcity',compact('subcity','city'));
    }

//--------------insert-------------------
    public function Storesubcity(Request $request){
        $validatedData = $request->validate([
            'city_id'  => 'required',
            'subcity_name'  => 'required|unique:subcities|max:55',
        ]);

        $data= array();
        $data['subcity_name']=$request->subcity_name;
        $data['city_id']=$request->city_id;

        DB::table('subcities')->insert($data);
        $notification = array(
            'message'=>'Successfully Sub-city Inserted',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

//------------delete--------
    public function deletesubcity($id){
        DB::table('subcities')->where('id',$id)->delete();

        $notification = array(
            'message'=>'Successfully Sub-city Deleted',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

//--------edit----------------
    public function editsubcity($id){
        $subcity=DB::table('subcities')->where('id',$id)->first();
        $city=DB::table('cities')->get();
        return view('admin.city.edit_subcity',compact('subcity','city'));
    }

//-------update------
    public function updatesubcity(Request $request,$id){
        $validatedData = $request->validate([
            'subcity_name'  => 'required',
            'city_id'  => 'required',
        ]);

        $data=array();
        $data['subcity_name']=$request->subcity_name;
        $data['city_id']=$request->city_id;
        $subcity= DB::table('subcities')->where('id',$id)->update($data);

        $notification = array(
            'message'=>'Successfully Sub-city Updated',
            'alert-type'=>'success'
        );
        return redirect()->route('subcity')->with($notification);
    }




}
