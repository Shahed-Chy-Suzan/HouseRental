<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

//--------read----------
    public function cities(){
        $city=DB::table('cities')->get();
        return view('admin.city.city',compact('city'));
    }


//---------insert--------------
    public function storecity(Request $request){
        $validatedData = $request->validate([
            'city_name'  => 'required|unique:cities|max:55',
        ]);

        $data=array();
        $data['city_name']=$request->city_name;
        $storecity= DB::table('cities')->insert($data);

        if($storecity){
            $notification = array(
                'message'=>'Successfully City Inserted',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message'=>'Something went wrong!',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }


//---------------Edit----------
    public function editCity($id){
        $editCity= DB::table('cities')->where('id',$id)->first();

        return view('admin.city.edit_city',compact('editCity'));
    }



//---------delete-------------
    public function deleteCity($id){
        DB::table('cities')->where('id',$id)->delete();

        $notification = array(
            'message'=>'Successfully City Deleted',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

//--------------update-------------
    public function updateCity(Request $request,$id){
        $validatedData = $request->validate([
            'city_name'  => 'required|max:55',
        ]);

        $data=array();
        $data['city_name']=$request->city_name;
        $updatecity= DB::table('cities')->where('id',$id)->update($data);

        if($updatecity){
            $notification = array(
                'message'=>'Successfully City Updated',
                'alert-type'=>'success'
            );
            return redirect()->route('city')->with($notification);
        }else{
            $notification = array(
                'message'=>' Nothing to Update!',
                'alert-type'=>'success'
            );
            return redirect()->route('city')->with($notification);
        }
    }




}
