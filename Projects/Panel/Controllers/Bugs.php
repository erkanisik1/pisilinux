<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, URI, Method; 

/**
* Created By  : Erkan IŞIK
* Created Date: 2017-12-27
* Update Date : 2019-01-06
*/
class Bugs extends Controller{
	
	 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
	 
		function main(){
			View::list(DB::bugsResult());
		}

		function edit(){
			$id = URI::get('edit');
			if (method::post()) {$this->bugs_model->bugs_update(method::post());}
			View::id($id);
		}

		
		function delete(){
			$id = URI::get('delete');
			DB::where('id',$id)->delete('bugs');
			redirect('bugs');
		}

		

		function tasktype(){
			if (method::post()) {$this->bugs_Model->tasktype_new(method::post());}
			
		}



}