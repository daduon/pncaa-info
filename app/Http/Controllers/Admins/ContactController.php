<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function updateContact(Request $request,$id){

		$contact = new Contact();
		$data = [
			'banner_image' => $request->banner_image,
			'banner_title' => $request->banner_title,
			'banner_sub_title' => $request->banner_sub_title,
			'title' => $request->title,
			'sub_title' => $request->sub_title,
			'description' => $request->description,
		];

		$contact->find($id)->update($data);
		return response()->json($data, 200);
	}
}
