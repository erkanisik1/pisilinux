<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, Method, URI; 
/*
* Created By	: Erkan IŞIK
* Created Date 	: 09-12-2017
* Update Date 	: 29-12-2017
*/
class Menu extends Controller{
 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}

	function main(){

		if (method::post('islem') == '1') {$this->menu_model->menuname_save(method::post());}
		if (method::post('islem') == '2') {$this->menu_model->menusave(method::post());}
		
		$menu = method::post('menuCatId');
		$lang = DB::language()->result();

		View::lang($lang)->menulist($menu);
	}


	function delete(){
		$id = URI::get('delete');
		DB::where('id',$id)->delete('menu');
		redirect('menu');
	}

	function edit(){
		$id = URI::get('edit');
		if (Method::post()) {$this->menu_model->edit(Method::post());}
		View::id($id);
	}

	function copy(){

		$id = URI::get('copy');
		if (Method::post()) {$this->menu_model->copy(Method::post());}		
		View::id($id);
		
	}

}