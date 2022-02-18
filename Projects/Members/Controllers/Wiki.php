<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, URI,  Method;
	/**
	* Created By  : Erkan IŞIK
	* Created Date: 2017-08-30
	* Update Date : 2021-01-20
 	*/

	class Wiki extends Controller{


 		function __construct(){
 			Cookie::insert('page','wiki');
 		}



		function main(){

			$yazilist = $this->wiki_model->liste();
			$onay = $this->wiki_model->onay();

			view::yazilist($yazilist)->onay($onay);
		}

		function edit(){
			$id = URI::get('edit');
			if (method::post()){$this->wiki_model->update(method::post());}
			
			//$content = $this->wiki_model->edit(URI::get('edit'));
			view::id($id);
		}

		function delete(){
			$id = URI::get('delete');
			if (method::post()) {
				$title = ' [ Silinme talebi ] '.wikiContentRow($id)->baslik;
				
				DB::insert('messages',[
					'admin'=>'1',
					'userId' => USERID,
					'title' => $title,
					'message' => Method::post('message')
				]);

				DB::where('id',$id)->update('wiki',[
					'deleted' => '1'
				]);
				if (!DB::error()) {
					telegram('Wiki içeriklerinden birinin sahibi tarafından silinme talebi gönderildi. Lütfen kontrol edin!');
					redirect('wiki');
				}

			}
			//import::view('wiki/delete');
			
			
		}

		function new(){
			if (method::post()) {$this->wiki_model->yeni(method::post());}

	
		}


	}