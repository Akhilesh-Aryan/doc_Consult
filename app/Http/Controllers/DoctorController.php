<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\User;
class DoctorController extends Controller
{


    public function docreg(){
        if(Auth::check()){
        return view('homepage.docreg');
        }
        else{
            return redirect()->route('login');
        }
     }
    public function docStore(Request $request){
        $request->validate([
            'contact'=>'required',
            "gender"=>'required',
            "hname"=>'required',
            "speciality"=>'required',
            "designation"=>'required',
            "city"=>'required',
            "state"=>'required',
            "district"=>'required',
            "pin"=>'required',
            "image"=>'required|mimes:jpg,png',
            "fees"=>'required',
        ]);
        $filename = time(). "." .$request->image->extension();
        $request->image->move(public_path('images'),$filename);

      $d = new Doctor();
      $d->contact = $request->contact;
      $d->gender = $request->gender;
      $d->hname = $request->hname;
      $d->image = $filename;
      $d->speciality = $request->speciality;
      $d->designation = $request->designation;
      $d->city= $request->city;
      $d->state = $request->state;
      $d->district = $request->district;
      $d->pin = $request->pin;
      $d->fees = $request->fees;
      $d->user_id = Auth::id();
      $d->save();
      return redirect()->route('docProfile');
    }
    public function doctor(){
        $data['doctor'] = Doctor::all();
        return view('homepage.index',$data);
    }

    public function docProfile(Request $request){

        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');


        }
          if(User::where([['id',Auth::id()],['isDoctor',TRUE]])->exists()){
                return redirect()->route('docProfile');
            }

        if(Doctor::where('user_id',Auth::id())->doesntExist()){
            return redirect()->route('docreg');
        }
         $data['doctor'] = Doctor::where('user_id',Auth::id())->first();
         return view('homepage.docProfile',$data);


     }
}
