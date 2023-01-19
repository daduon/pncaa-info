<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Home;
use App\About;
use App\Contact;
use App\Module;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	    $this->middleware('auth:admin');
	}


    public function index()
    {
		$modules = DB::select('select * from modules where status = ?', [1]);
    	return view('admins.home',['modules' => $modules]);
    }

	public function formHome($id){
		$homes = Module::find($id)->homes;
		$data = null;
		foreach( $homes as $key => $item){
			$data = (object)$item;
		}
		return view('admins.formHome',['home'=>$data]);
	}

	public function formAbout($id){
		$abouts = Module::find($id)->abouts;
		$data = null;
		foreach($abouts as $key => $item){
			$data = (object)$item;
		}
		return view('admins.formAbout',['about'=>$data]);
	}

	public function formContact($id){
		$contacts = Module::find($id)->contacts;
		$data = null;
		foreach($contacts as $key => $item){
			$data = (object)$item;
		}
		return view('admins.formContact',['contact'=>$data]);
	}
	 
	public function updateHome(Request $request,$id){
		$home = new Home();
		$data = [
			'banner_image' => $request->banner_image,
			'banner_title' => $request->banner_title,
			'banner_sub_title' => $request->banner_sub_title,
			'title' => $request->title,
			'sub_title' => $request->sub_title,
			'description' => $request->description,

		];
	
		$home->find($id)->update($data);
		return response()->json($data, 200);
	}
}
