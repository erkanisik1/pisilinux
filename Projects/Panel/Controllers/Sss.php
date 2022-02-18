<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method,URI; 

class Sss extends Controller
{
	 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
	function main(){
		
		View::liste($this->sss_model->liste())->get('main');
		//import::view('sss/index',$data);
	}

	function new(){
		if (method::post()) {$this->sss_model->new(method::post());}
		import::view('sss/new');
	}

	function delete(){
		$id = Uri::get('delete');
		DB::where('id',$id)->delete('sss');
		redirect('sss');
	}

	function edit(){
		$id = Uri::get('edit');
		if (method::post()) {$this->sss_model->update(method::post());}
		$edit = $this->sss_model->edit($id);
		View::edit($edit);
		
	}

}