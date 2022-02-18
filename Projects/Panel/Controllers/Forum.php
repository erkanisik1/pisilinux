<?php namespace Project\Controllers;
use DB, Import,URL,Cookie,Session,ML,Method,URI;
/**
* Created By  : Erkan IŞIK
* Created Date: 2017-09-27
* Update Date : 2018-03-28
*/
class Forum extends Controller{
    
    function __construct(){if (!USERID) {redirect(URL::base('panel'));}}

    function main(){ 
        $konu = DB::where('content_id', '0')->orderBy('id','asc')->get('forum')->result();
        //$katlist = $this->forum_model->katlist();
        View::konu($konu)->get('main');
        //Import::view('forum/index',$data);
      
    }

      function category_list(){ 
        $lists = $this->forum_model->katlist();
        View::catList($lists);
        //Import::view('forum/kategori_list',$data);
      
    }

    function forumKat(){
    	if(method::post()){$this->forum_model->cat_insert(method::post());}
    	//import::view('forum/forumKat_new_view');
    }

    function kategori_edit(){
        $id = Uri::get('kategori_edit');
        if(method::post()){
        	$this->forum_model->cat_update(method::post());
        }
        
        View::id($id);
    }

    
	function category_delete($id){
		DB::where('id', $id)->delete('forum_kat');
		redirect('forum/category_list');
	}

    /* konu işlemleri*/

    function konular(){
        $data['konu'] = DB::where('content_id', '0')->orderBy('id','asc')->get('forum')->result();
        Import::view('forum/konular_view',$data);
    }

    function konu($id){
        $data['id'] = $id;
        
         Import::view('forum/konu_view',$data);
    }

    function edit($id){
        $data['id'] = $id;
        if (Method::post()) {$this->forum_model->update(Method::post());}
         Import::view('forum/konu_edit',$data);
    }




	
}