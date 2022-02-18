<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method, URI; 

class Page extends Controller{
 	function __construct(){if (!USERID) {redirect(URL::base('panel'));}}

	function main(){	
		
	View::list($this->page_model->page_list())->get('main');
		//import::view('page/index',$data);
	}

	function new(){
		if(method::post()){$this->page_model->new(method::post());}
	}


	function edit(){

		if(method::post()){$this->page_model->Update(method::post());}

		//$data['pages'] = DB::where('id',$id)->get('content')->row();


		view::id(Uri::get('edit'));
		//import::view('page/page_edit',$data);
	}

	function delete($id){
		DB::where('id', $id)->delete('content');
		redirect('page');
	}

}// class sonu

