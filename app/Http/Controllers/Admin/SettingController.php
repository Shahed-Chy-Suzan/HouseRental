<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function SiteSetting()
    {
    	 $setting=DB::table('sitesetting')->first();
    	 return view('admin.setting.site_setting',compact('setting'));
    }

    public function UpdateSetting(Request $request)
    {
        $id=$request->id;
        $data=array();
        $data['phone_one']=$request->phone_one;
        $data['phone_two']=$request->phone_two;
        $data['email_one']=$request->email_one;
        $data['email_two']=$request->email_two;
        $data['company_name']=$request->company_name;
        $data['address_one']=$request->address_one;
        $data['address_two']=$request->address_two;
        $data['facebook']=$request->facebook;
        $data['linkedin']=$request->linkedin;
        $data['twitter']=$request->twitter;
        $data['youtube']=$request->youtube;
        $data['instagram']=$request->instagram;
        $data['pinterest']=$request->pinterest;
        $data['whatsapp']=$request->whatsapp;

        $data['experience']=$request->experience;
        $data['project']=$request->project;
        $data['award']=$request->award;
        $data['clients']=$request->clients;

        $update=DB::table('sitesetting')->where('id',$id)->update($data);

        if ($update) {
            $notification=array(
                'message'=>'Setting has Updated',
                'alert-type'=>'success'
            );
                return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'message'=>'Nothing To Update',
                'alert-type'=>'success'
            );
                return Redirect()->back()->with($notification);
        }
    }




// //============================================================================================
// //============================================================================================

//-------------Database BackUp-------------------

    public function DatabaseBackup()
    {
        return view('admin.setting.db_backup')->with('files', File::allFiles('storage/app/Laravel'));
    }


    public function BackupNow()
    {
        \Artisan::call('backup:run');
        $notification=array(
                    'message'=>'Successfully Database Backup Done',
                    'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }


    public function DeleteDatabase($getFilename)
    {
        Storage::delete('Laravel/'.$getFilename);      //'Storage' er 'Laravel' folder theke delete hobe,
        $notification=array(
                    'message'=>'Successfully Backup Deleted',
                    'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }


    public function DownloadDatabase($getFilename)
    {
        $path = storage_path('app\Laravel/'.$getFilename);
        return response()->download($path);
    }


}
