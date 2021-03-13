<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProModel;

class ProControl extends Controller
{
    function insertpro(Request $r)
    {
    	$data = new ProModel;
    	$data->pname = $r->name;
    	$data->pcode = $r->code;
    	$data->pbuy = $r->buy;
    	$data->psale = $r->sale;
    	$data->pcategory = $r->category;
    	$data->pdesc = $r->desc;
		$data->pstock = $r->stock;
    	// $data->pcode = $r->code;

		// $_file = $r->file('img')->getClientOriginalName();
		// $r->file('img')->storeAs('images/',$_file);
		// $data->pimg = $_file;

		// $_file = $r->file('image')->GetClientOriginalName();
		// $r->file('image')->storeAs('images/',$_file);
		// $data->img = $_file;

			// $image = ;
            // $filename = $r->file('image')->getClientOriginalName();
            // $r()->$r->file('image')->move(public_path('images/'), $filename);
            // $data->pimg = $r->file('image')->getClientOriginalName();

		// $data->pimg = $r->image;
		// $_file = $r->file('image')->GetClientOriginalName();
		// $r->file('image')->storeAs('images',$_file);
		// $data->pimg = $_file;

    	$data->save();

    	// return view('addproduct');
    	    	
    }
}
