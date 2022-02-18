<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, Method; 

class Ajax extends Controller{
	
	function dissolved(){

		$id = Method::post('id');
		$s = DB::select('dissolved')->where('id',$id)->get('forum')->value();
	

	if ($s == '1') {
			$dissolved = '0';
		}else{
			$dissolved = '1';
		}
		DB::where('id',$id)->update('forum',['dissolved' => $dissolved]);



	}
}