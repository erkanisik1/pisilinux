<?php 

/*
* Created By: Erkan IŞIK
* Created Date: 2018-09-04
* Update Date: 2020-09-04
*/
class Content_model extends Model{
	
	function update($post){

		DB::where('id',$post['id'])->update('content',[
			'title' 		=> $post['title'] ,
			'title_seo' 	=> seo($post['title']),
			'content' 		=> $post['content'],
			'keywords'		=> $post['keywords'],
			'status' 		=> $post['status'],
			'label' 		=> $post['label'],
			'category_id' 	=> $post['category'] ,
			'mainpage' 		=> $post['mainpage'],
			'lang'			=> $post['lang'],
			'editor'		=> $post['editor']
		]);

		if (DB::affectedRows()) {redirect('content');}
	}


	function new($post){
		DB::insert('content',[
			'title' 		=> $post['title'] ,
			'title_seo' 	=> seo($post['title']),
			'content' 		=> $post['content'],
			'keywords'		=> $post['keywords'],
			'status' 		=> $post['status'],
			'label' 		=> $post['label'],
			'category_id'	=> $post['category'] ,
			'mainpage' 		=> $post['mainpage'],
			'editor' 		=> $post['editor'],
			'content_type'	=> 'content',
			'lang'			=> $post['lang']			
		]);
		
		if (DB::affectedRows()) {redirect('content');}
	}

	function copy($post){
		DB::insert('content',[
			'title' 		=> $post['title'] ,
			'title_seo' 	=> seo($post['title']),
			'content' 		=> $post['content'],
			'keywords'		=> $post['keywords'],
			'status' 		=> $post['status'],
			'label' 		=> $post['label'],
			'category_id' 	=> $post['category'] ,
			'mainpage' 		=> $post['mainpage'],
			'editor' 		=> $post['editor'],
			'content_type'	=> 'content',
			'lang'			=> $post['lang']			
		]);
		
		if (DB::affectedRows()) {redirect('content');}
	}

}