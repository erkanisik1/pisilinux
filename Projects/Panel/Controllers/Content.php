<?php namespace Project\Controllers;
use DB,Import,URL,URI,Cookie,Session,Method; 
	/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-08-30
	* Upcdate Date: 2017-12-29
	*/
	class Content extends Controller{

		function __construct(){if (!USERID) {redirect(URL::base('panel'));}}

		function main(){}

		function edit(){
			$id = Uri::get('edit');
			if (method::post()){$this->content_model->update(method::post());}
			View::id($id)->get('edit');
			//import::view('content/content_edit',$data);
		}

		function delete(){
			$id = Uri::get('delete');
			DB::where('id', $id)->delete('content');
			redirect('content');
		}

		function new(){
			if (method::post()) {
				$this->content_model->new(method::post());
			}

			
			View::userid(Session::select('userid'));
			
		}

		function copy(){
			$id = Uri::get('copy');
			if (method::post()){$this->content_model->new(method::post());}
			View::id($id);
			
		}




	}

