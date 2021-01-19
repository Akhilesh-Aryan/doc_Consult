<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\User;

class PatientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function myprofile(){

        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');
        }

        if(Patient::where('user_id',Auth::id())->doesntExist()){
            return redirect()->route('apply');
        }
        $data['patient'] = Patient::where('user_id',Auth::id())->first();
        return view('homepage.myprofile',$data);
    }
    public function apply(){
        if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');
        }
        if (User::where([['id',Auth::id()],['isDoctor',TRUE]])->exists()){
            return redirect()->route('docProfile');
        }
        elseif(Auth::check()){
        return view('homepage.apply');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function applyStore(Request $request,$id){
        $request->validate([
            "contact"=>'required|integer',
            "age"=>'required',
            "gender"=>'required',
            "image"=>'required|mimes:png,jpg',
            "desc"=>'required',
            "address"=>'required',
        ]);

        $filename = time()."." .$request->image->extension();
        $request->image->move(public_path('images'),$filename);
       $p = new Patient();
       $p->contact = $request->contact;
       $p->age = $request->age;
       $p->gender = $request->gender;
       $p->desc = $request->desc;
       $p->address = $request->address;
       $p->image = $filename;
       $p->user_id = Auth::id();
       $p->doctor_id = $id;
       $p->save();
        return redirect()->route('myprofile');
    }
}
