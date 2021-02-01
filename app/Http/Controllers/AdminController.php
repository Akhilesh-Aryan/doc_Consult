<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use Symfony\Component\HttpFoundation\Request;
use phpDocumentor\Reflection\PseudoTypes\False_;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        if(User::where([['id',Auth::id()],['isAdmin',FALSE]])->exists()){
            return redirect()->route('myprofile');
        }

         $data['doctors'] = Doctor::all()->count();
        return view('admin.dashboard',$data);
    }

    public function doctors(){

        if(User::where([['id',Auth::id()],['isAdmin',FALSE]])->exists()){
            return redirect()->route('docProfile');
        }
        $data['doctors'] = Doctor::all();
        return view('admin.doctors',$data);
    }

    public function patients(){
        if(User::where([['id',Auth::id()],['isAdmin',FALSE]])->exists()){
            return redirect()->route('myprofile');
        }
        $data['patients'] =  Patient::get();
        return view('admin.patients',$data);
    }


    // public function edit(User $user){
    //          $data['data'] = $user;
    //         return view('admin.doctors');
    // }

    public function editStatus(Request $request){
        // echo $request->user;
        User::find($request->user)->update([
            'isDoctor'=>TRUE,
        ]);
        return redirect()->back();
    }
}
