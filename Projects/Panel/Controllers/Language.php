<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session,Method, URI; 

class Language extends Controller{

	function main(){ 
		$sql = DB::language()->result();
		View::list($sql);
	}

	function new(){
		if (Method::post()) {$this->Language_model->new(Method::post());}
	}

	function edit(){
		if (Method::post()) {$this->Language_model->update(Method::post());}
		View::id(Uri::get('edit'));
	}
}