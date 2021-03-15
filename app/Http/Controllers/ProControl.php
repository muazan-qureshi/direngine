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

		$_file = $r->file('image')->getClientOriginalName();
		$r->file('image')->storeAs('images/',$_file);
		$data->pimg = $_file;

    	echo $data->save();
        return redirect()->back();
    }//insert function end here

    function selectpro()
    {
        $data = ProModel::all();
        return view('allproducts',['list'=>$data]);
    }
}



// function viewpro(){
//         $data = mymd::all();
//         return view('products',['list'=>$data]);
//     }