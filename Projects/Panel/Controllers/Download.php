<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML, Method, URI ;
/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-07
* Update Date: 2019-12-09
*/
	class Download extends Controller{
		 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
		function main(){
			
			View::list(DB::orderBy('id','desc')->get('download')->result());
			//import::view('indir/index',$data);			
		}

		function new(){
			if (method::post()){$this->download_model->new(method::post());}
					
		}

		function edit(){
			$id = Uri::get('edit');
			if (method::post()){$this->download_model->update(method::post());}
			
			View::id($id)->get('edit');			
		}

		function copy(){
			$id = Uri::get('copy');
			if (method::post()){$this->download_model->copy(method::post());}
			
			View::id($id)->get('copy');			
		}

		function delete(){
			$id = Uri::get('delete');
			DB::where('id',$id)->delete('download');
			redirect('download');
		}
	}