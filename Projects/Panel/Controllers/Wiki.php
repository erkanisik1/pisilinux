<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, URI, Method; 

/**
* Created By  : Erkan IŞIK
* Created Date: 2017-12-27
* Update Date : 2019-01-06
*/
class Wiki extends Controller{
	
	 function __construct(){if (!USERID) {redirect(URL::base('panel'));}}
	 
		function main(){
			$sql = $this->wiki_model->content_list();
			View::yazilist($sql)->get('main');

			//import::view('wiki/main',$data);
		}

		function edit(){
			$id = URI::get('edit');
			if (method::post()) {$this->wiki_model->wiki_update(method::post());}
			
			View::id($id);
			//import::view('wiki/wiki_edit',$data);
		}

		function update(){
			$id = URI::get('update');
			//if (method::post()) {$this->wiki_model->wiki_update(method::post());}
			
			View::id($id);
			//import::view('wiki/wiki_edit',$data);
		}

		function delete(){
			$id = URI::get('delete');
			DB::where('id', $id)->update('wiki',['durum'=>'0']);
			redirect('wiki');
		}

		function adminDelete(){
			$id = URI::get('adminDelete');
			DB::where('id',$id)->delete('wiki');
			redirect('wiki');
		}

		function adminUpdateDelete(){
			$id = URI::get('adminUpdateDelete');
			DB::where('id',$id)->delete('wiki_update');
			redirect('wiki');
		}

		function new_content(){
			if (method::post()) {$this->wiki_model->new_content_save(method::post());
			}
			//import::view('wiki/new_content'); 
		}


		function category(){
			$data = DB::where('kat_ustid','30')->get('wiki_kat')->result();
			//import::view('wiki/wiki_kat_list',$data);
			view::katList($data);
		}

		function new_category(){
			if (method::post()) {$this->wikiModel->new_category_save(method::post());}
			import::view('wiki/new_category');
		}



}