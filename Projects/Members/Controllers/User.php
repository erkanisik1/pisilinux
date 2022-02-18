<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, Method, ML; 
	/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-08-28
	* Update Date : 2018-01-01
	*/
	class User extends Controller{

		function main(){
			if (method::post()) {$this->login_model->update(method::post());}
			$profil = DB::where('user_id',Session::select('userid'))->get('user')->row();
			
			view::profil($profil);
		}
		
		function passrename()
		{
			if(method::post()){$data['message'] = $this->login_model->passrename(method::post());}
			
		}

	

		function deleted(){
			//Import::view('user/deleted');
		}


		function logout(){
	        Session::deleteAll();
	        redirect(URL::base());
	    }
	}