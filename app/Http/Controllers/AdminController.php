<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        if(User::where([['id',Auth::id()],['isAdmin',FALSE]])->exists()){
            return redirect()->route('myprofile');
        }

        // $data['doctor'] = Doctor::all()->count();
        // return view('admin.dashboard');

        $data['doctors'] = Doctor::all();
        return view('admin.dashboard',$data);
    }
    public function patients(){
    //     if(User::where([['id',Auth::id()],['isAdmin',TRUE]])->exists()){
    //         return redirect()->route('patients');
    // }
        $data['patients'] = Patient::all();
        return view('admin.patients', $data);
    }
}
