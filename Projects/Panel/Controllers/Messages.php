<?php  namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, URI, Method; 


class Messages extends Controller
{
	
	function main(){

	}

	function read(){

		View::id(URI::get('read'));
	}

	function delete(){
		DB::where('id', URI::get('delete'))->delete('messages');
		redirect('');
	}

	function write(){
		if(Method::post()){$this->message_model->send(Method::post());
		}
		
		View::userid(URI::get('write'));
	}
}