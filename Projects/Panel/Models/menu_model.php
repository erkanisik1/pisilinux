<?php 

/*
* Created By: Erkan IŞIK
* Created Date: 2017-12-10
* Update Date: 2018-02-14
*/
class Menu_model extends Model{
	
	function menuname_save($post)
	{
		DB::insert('menucat',[
			'name' => $post['menuname'],
			'nameSeo' => seo($post['menuname']),
		]);

		redirect('menu');
	}

	function menusave($post){

	
		$link ='';

		
		if (!empty($post['link'])) {
			$link = $post['link'];
		}else{
			$link = $post['link1'];
		}

		DB::insert('menu',[
			'menuCatId'	=> $post['menuCatId'],
			'title' 	=> $post['title'],
			'nameSeo'	=> seo($post['title']),
			'link' 		=> $link,
			'lang'		=> $post['lang'],
			'icon' 		=> $post['icon'],
			'language'	=> ''
		]);

		if (!DB::error()) {
			redirect('menu');
		}
	}

	function edit($post){

		
		$link ='';

		
		if (!empty($post['link'])) {
			$link = $post['link'];
		}else{
			$link = $post['link1'];
		}

		DB::where('id',$post['id'])->update('menu',[
			'menuCatId'	=> $post['menuCatId'],
			'title' 	=> $post['title'],
			'nameSeo'	=> seo($post['title']),
			'link' 		=> $link,
			'lang'		=> $post['lang'],
			'icon' 		=> $post['icon'],
			
		]);

		if (!DB::error()) {
			redirect('menu');
		}
	}

	function copy($post){
				
		$link ='';
		
		if (!empty($post['link'])) {
			$link = $post['link'];
		}else{
			$link = $post['link1'];
		}

		DB::insert('menu',[
			'menuCatId'	=> $post['menuCatId'],
			'title' 	=> $post['title'],
			'nameSeo'	=> seo($post['title']),
			'link' 		=> $link,
			'lang'		=> $post['lang'],
			'icon' 		=> $post['icon'],
			'language'	=> ''
		]);

		if (!DB::error()) {
			redirect('menu');
		}
	}

}