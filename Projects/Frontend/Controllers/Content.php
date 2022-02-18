<?php namespace Project\Controllers;
use DB; 
/**
* Created By: Erkan IŞIK
* Created Date: 2017-05-09
* 
*/
class Content extends Controller{
	
	function main($p = ''){
		$p = explode('-', $p);


		$content = DB::where('id',$p[0])->get('content')->row();

		view::content($content);
	}
}