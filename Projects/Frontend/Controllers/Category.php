<?php namespace Project\Controllers;
use DB,Import,URL,Cookie,Session,ML;
class Category extends Controller{
	
	function main($id){
		Cookie::insert('returnlink', 'category');
		$id = explode('-', $id);
		$id1 = $id['0'];
		view::id($id1);
	}
}