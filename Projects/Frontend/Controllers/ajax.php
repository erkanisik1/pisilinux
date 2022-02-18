<?php namespace Project\Controllers;
use DB;
use Import;
use URL;
use Cookie;
use Session;
use ML; 
/**
* 
*/
class Ajax extends Controller{
	
	function downup(){
		$id = method::post('count');
		$d = DB::select('count')->where('id',$id)->get('download')->value();
		DB::where('id',$id)->update('download',[
			'count' => $d+1,
		]);

		$sayi = DB::select('count')->where('id',$id)->get('download')->value();

		echo $sayi.'-'.$id;
	}

	function forumcevapsil(){
		$id = method::post('id');
		DB::where('id',$id)->delete('forum');
		
	}

	
}