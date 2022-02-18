<?php 

/*
* Created By: Erkan IŞIK
* Created Date: 2018-09-04
* Update Date: 2018-09-04
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
				'category_id' 	=> $post['category_id'] ,
				'mainpage' 		=> $post['mainpage'],
				
			]);

			
			if (DB::affectedRows()) {
				redirect('content');
			}else{
				output(DB::error());
			}
		}


		function save($post){
			DB::insert('content',[
				'title' 		=> $post['title'] ,
				'title_seo' 	=> seo($post['title']),
				'content' 		=> $post['content'],
				'keywords'		=> $post['description'],
				'status' 		=> 0,
				'label' 		=> $post['label'],
				'category_id'	=> $post['category_id'] ,
				'mainpage' 		=> 0,
				'editor' 		=> Session::select('userid'),
				'content_type' 	=> 'content',
				'hits'			=> '1',
				'lang'			=> $post['lang']
			]);
		

			if (DB::affectedRows()) {
				redirect('content');
			}else{
				output(DB::error());
			}
		}

}