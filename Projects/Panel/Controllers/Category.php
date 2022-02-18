<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML,  Method; 

	/**
	* Created By   : Erkan IŞIK
	* Created Date : 2017-09-05
	* Update Date  : 2018-02-13
	*/
class Category extends Controller{

	 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
	
	function main(){
	}

	function new(){
		if (method::post()) {$this->category_model->new(method::post());}
	}

	function edit($id){
		//if (method::post()) {$this->category_model->update(method::post());}
/*
		$data['edit'] = $this->category_model->edit($id);
		$data['ustkatid'] = $data['edit']->kat_ustid;

		import::view('category/edit_view',$data);	

*/

		View::id($id)->get('edit');
	}

	function delete($id){
		DB::where('id', $id)->delete('kategoriler');
		redirect('category');
	}
}