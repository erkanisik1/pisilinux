<?php namespace Project\Controllers;
use DB,Import,URL,Cookie,Session,ML,Method; 
	/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-08-30
	* Upcdate Date: 2017-12-29
	*/
	class Content extends Controller{

		function __construct(){
			Cookie::insert('page','content');
 			
 		}

		function main(){
			
			//import::view('content/content_list');
		}

		function edit($id){
			if (method::post()){$this->content_model->update(method::post());}
			$data['id'] = $id;
			import::view('content/content_edit',$data);
		}

		function delete($id){

			DB::where('id', $id)->delete('content');
			redirect('content');
		}

		function new(){
			if (method::post()) {
				$this->content_model->save(method::post());
			}
			//import::view('content/new_content');
		}


	}