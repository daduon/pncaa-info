<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function updateAbout(Request $request,$id){

		$about = new About();
		$data = [
			'banner_image' => $request->banner_image,
			'banner_title' => $request->banner_title,
			'banner_sub_title' => $request->banner_sub_title,
			'title' => $request->title,
			'sub_title' => $request->sub_title,
			'description' => $request->description,
		];

		$about->find($id)->update($data);
		return response()->json($data, 200);
	}
}
