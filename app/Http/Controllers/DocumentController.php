<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DocumentController extends Controller
{
    public function documentView(){
        $user = Auth::user();
 
    	return view('documents.view_document',compact('user'));

    }
    public function documentAdd(){
        $user = Auth::user();
    	return view('documents.add_document',compact('user'));
    }
}
