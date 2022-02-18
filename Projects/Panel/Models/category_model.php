<?php 
		/**
	* Created By   : Erkan IŞIK
	* Created Date : 2018-02-13
	* Update Date  : 2019-02-27
	*/
	class Category_model extends Model{
		
		function new($post){
			
			DB::insert('content_category',[
				'name' 			=> $post['name'],
				'name_seo' 		=> seo($post['name']),
				'description'	=> $post['description'],
				'parentId' 		=> $post['category'],
				'lang'			=> $post['lang']
			]);
			if (!DB::error()){redirect('category');}
		}


		function update($post){
			
			DB::where('id',$post['id'])->update('content_category',[
				'name' 			=> $post['name'],
				'name_seo' 		=> seo($post['name']),
				'description'	=> $post['description'],
				'parentId' 		=> $post['category'],
				'lang'			=> $post['lang']
			]);
			if (!DB::error()){redirect('category');}
		}

		


	}

