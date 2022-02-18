<?php 
	/**
	* Created By: Erkan IŞIK
	* Created Date: 2017-09-05
	* Update  Date: 2018-08-25
	*/
	class Page_model extends model{

		function page_list(){
			return DB::orderBy('id','desc')->where('content_type','page')->get('content')->result();
		}

		function new($post){
			DB::insert('content',[
				'title' 		=> $post['title'] ,
				'title_seo' 	=> seo($post['title']),
				'content' 		=> $post['content'],
				'keywords' 		=> $post['keywords'],
				'status' 		=> 1,
				'label' 		=> $post['label'],
				'editor' 		=> Session::select('userid'),
				'content_type'	=> 'page',
				'lang' 			=> $post['lang'],
				'category_id'	=> '0',
				'mainpage'		=> '0',
				'hits'			=> '0',
				

			]);
			if (DB::error()) {
				echo DB::error();
			}else{
				redirect('page');
			}
			
		}
		


		function Update($post){
		
		
			DB::where('id',$post['id'])->update('content',[
				'title' => $post['title'] ,
				'title_seo' => seo($post['title']),
				'content' => $post['content'],
				'keywords' => $post['keywords'],
				'status' => $post['status'],
				'label' => $post['label'],
				'editor' => Session::select('userid'),
				'content_type' => 'page'
			]);
			redirect('page');
			
		}
 
		

	}// class sonu