<?php namespace Project\Controllers;
use DB,URI,Cookie;
/*
* Created By  : Erkan IŞIK
* Created Date: 2017-12-24
* Update Date : 2018-02-15
*/
class Wiki extends Controller{


    function main(){
    	Cookie::insert('returnlink', 'wiki');
		$catlist = $this->wiki_model->catlist();
		View::catlist($catlist);
    }


	function category(){
		$id = explode('-',URI::get('category'));
		$id = $id['0'];

		//$wikikat = $this->wiki_model->wikikat($kat_id);

		//$kategori_name = $id['0']; 
		View::id($id);
	}
 
	function content(){
		$id = explode('-',URI::get('content'));
		$id = $id['0'];

	View::id($id);
	if (!Cookie::select('hit')) {
		$data['content'] = $this->wiki_model->content($id);
		DB::where('id',$data['content']->id)->update('wiki',['hits' => $data['content']->hits+1,]);		
		Cookie::time(60 * 60 * 24)->insert('hit','1');
	
	}



		
		//define('title', ' '.$data['content']->baslik);
		//define('keywords', $data['content']->keywords);
		//define('desc', kelimebol($data['content']->detay,200) );
		//define('img', content_image($data['content']->detay));
		
		//import::view(THEMA_NAME.'wiki/content_view',$data);
	} 

	

	function preview(){
		view::id(URI::get('preview'));
	}

   
}