<?php namespace Project\Controllers;
use DB,Import,URL,Cookie,Session,ML,Method; 

/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-07
* Update Date: 2017-12-07
*/
	class Download extends Controller{
		
		function main(){
			//$data = DB::orderBy('id','desc')->get('download')->result();
			//View::data($data)->get('main');
			define('TITLE', 'Download');
		}
		function counter(){
			$id = method::post('id');
			$count = DB::whereId($id)->downloadRowCount();
			
			DB::where('id',$id)->update('download', [
				'count' => $count+1,
			]);
			
			
		}
	}