<?php namespace Project\Controllers;
use Method, URI, DB, Session, Cookie; 

class Bugs extends Controller{
	
	function main(){
		/*
		Masterpage::meta([
			'name:title' => settings('title'),
			'name:description' => contentRow($id)->keywords,
			'name:keywords' => contentRow($id)->label,
		]);
		*/
		Cookie::insert('returnlink', 'bugs');
		Masterpage::meta([
			'name:description' => "Pisilinux istek ve hata kayıtlarının toplandığı alandır",
			'name:keywords' => "Bugs, hata, istek",

		]);
	}

	function new(){
		if (Session::select('userid') =='') {
			redirect('bugs');
		}
		if (Method::post()) {$this->bugs_model->new(Method::post());}
	}

	function pkt(){
		$id = Uri::get('pkt');
		if (Method::post()) {$this->bugs_model->pktInsert(Method::post());}
	}

	function package(){
		echo APPDIR;
	}



	function edit(){
		$id = Uri::get('edit');
		$userid = Session::select('userid');

		if (bugsRow($id)->userid == $userid OR session::select('yetki')=='1') {
		
			if (Method::post()) {$this->bugs_model->edit(Method::post());}
			View::id($id)->control('1');
		}else{
			view::control('0');
			//echo "<h1>bu içeriği düzenlemeye yetkili değilsiniz.</h1>";		
		}
	}

	function search(){		
	}

	function detail(){
		$id = Uri::get('detail');
		if (Method::post()) {$this->bugs_model->insert(Method::post());}
		View::id($id);		
	}


	function help(){
		import::view(THEMA_NAME.'bugs/help');
	}

	function bugsClose(){
		$id =  Method::post('id');
		DB::where('id',$id)->update('bugs',[
			'status' => '0'
		]);
		echo 1;
	}
}