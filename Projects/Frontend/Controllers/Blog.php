<?php namespace Project\Controllers;
use URI,DB,Cookie;
/*
* Created By  : Erkan IŞIK
* Created Date: 2017-12-05
* Update Date : 2021-11-17
*/

class Blog extends Controller{

	function main(){
	
			Cookie::insert('returnlink', 'blog');
	}

	function category(){
		$id = explode('-',URI::get('category'));
		$id = $id['0'];
			//$data['catlist'] = DB::where('icerik_katid',$id['0'])->get('content')->result();
		//	define('TITLE', ' '.$seo['0']);
			//import::view(THEMA_NAME.'blog/category_view',$id);
		view::id($id);
	}

	function content(){

		$id = explode('-',URI::get('content'));
		$id = $id['0'];

		if (Cookie::select('contentid') != $id) {
			DB::where('id',$id)->update('content',['hits' => contentRow($id)->hits+1,]);
			Cookie::time(60 * 60 * 24)->insert('contentid',$id);
		}

		view::id($id);
	}



}