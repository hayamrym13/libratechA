<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Facade\Paypal;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Symfony\Component\Process\Process;
class ProfileController extends Controller
{
    public function Logout(){
    	auth()->guard('web')->logout();
    	return  view('auth/login');

    }
    public function ProfileView(){
    	$id = Auth::user()->id;
    	$user = User::find($id);

    	return view('users.view_profile',compact('user'));
    }


    public function ProfileEdit(){
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('users.edit_profile',compact('user'));
    }


    public function ProfileStore(Request $request){

    	$data = User::find(Auth::user()->id);
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->prenom = $request->prenom;
    	//$data->mobile = $request->mobile;
    	//$data->address = $request->address;
    	//$data->gender = $request->gender;

    	if ($request->file('profile_photo_path')) {
    		$file = $request->file('');
    		@unlink(public_path('upload/user_images/'.$data->profile_photo_path));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/user_images'),$filename);
    		$data['profile_photo_path'] = $filename;
    	}
    	$data->save();

    	$notification = array(
    		'message' => 'Profile Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('profile.view')->with($notification);

    } // End Method



 	public function PasswordView(){
 		return view('users.edit_password');
 	}



 	public function PasswordUpdate(Request $request){
 		$validatedData = $request->validate([
    		'oldpassword' => 'required',
    		'password' => 'required|confirmed',
    	]);


    	$hashedPassword = Auth::user()->password;
    	if (Hash::check($request->oldpassword,$hashedPassword)) {
    		$user = User::find(Auth::id());
    		$user->password = Hash::make($request->password);
    		$user->save();
    		Auth::logout();
    		return redirect()->route('login');
    	}else{
    		return redirect()->back();
    	}


 	} // End Method







}
