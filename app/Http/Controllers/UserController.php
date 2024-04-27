<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class UserController extends Controller
{
	public function index() {
		$user = Auth::user();
		return view('dashboard',compact('user'));
	}
    public function UserView(){
		$allData = User::all();
		$user = Auth::user();
    	return view('users.view_user',compact('allData','user'));
    }
    public function UserAdd(){
		$user = Auth::user();
    	return view('users.add_user',compact('user'));
    }
    public function InvUser(){
		$resultats = DB::table("users")->where('users.inv','0')->get();
		$user = Auth::user();
    	return view('users.inv_user',compact('user','resultats') );

    }
	public function Accept($id){
        $data = DB::table("users")->where('users.id',$id)->update(['inv'=>'1']);
		
         $notification = array(
	      'message' => 'Accepted',
	      'alert-type' => 'success'
           );

      return redirect()->back()->with($notification);

    }
	public function Refuse($id){
		$id_user=Auth::id();
        $data = DB::table("users")->where('users.id',$id)->update(['inv'=>'-1']);
		
         $notification = array(
	      'message' => 'Refuse',
	      'alert-type' => 'success'
           );

      return redirect()->back()->with($notification);

    }
    
    public function UserStore(Request $request,$id){

    	$validatedData = $request->validate([
    		'email' => 'required|unique:users',
    		'name' => 'required',
    	]);

    	$data = new User();
    	$data->name = $request->name;
    	$data->prenom = $request->prenom;
    	$data->email = $request->email;
    	$data->inv = 1;
    	$data->role = $request->role;
    	$data->adresse = $request->adresse;
    	$data->departement = $request->departement;
    	$data->Telephone = $request->Telephone;
    	$data->filier = $request->filier;
    	$data->code = $request->code;
		$user = User::find($id);
    	$data->password = bcrypt($request->password);
       if($user->role=='admin'){
	   $data->save();
    	$notification = array(
    		'message' => 'User Inserted Successfully',
    		'alert-type' => 'success'
    	);}
		else{
			$notification = array(
				'message' => 'Désoler',
				'alert-type' => 'error'
			);
		}

    	return redirect()->route('user.view',$id)->with($notification);

    }
	public function UserDelete($id_user,$id){

    	$user = User::find($id_user);
    	$user->delete();

    	$notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'error'
    	);

    	return redirect()->route('user.view',$id)->with($notification);

    }
}
