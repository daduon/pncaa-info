<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
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
	public function index(){
		return view('admins.about');
	}
    public function about(Request $request){
		$about = new About();
		$id = 1;
		$data = [
			'banner_image'=> 'https://cdn.pixabay.com/photo/2015/10/29/14/39/web-1012469_1280.jpg',
			'banner_title'=> $request->banner_title,
			'banner_sub_title'=> $request->banner_sub_title,
			'title'=> $request->title,
			'sub_title'=> $request->sub_title,
			'description'=> $request->description,
		];
		dd($data);
		$about->find($id);
		$about->save($data);
		return redirect()->back();
    }
}
