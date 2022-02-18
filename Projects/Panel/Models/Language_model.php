<?php 
class Language_model extends Model{

	function new($post){ 

		DB::insert('language',[
			'language'	=> $post['language'],
			'slug' 		=> $post['slug'],
			'seo' 		=> seo($post['language']),
			'flag' 		=> $post['flag'],
		]);
		if (!DB::error()){redirect('language');}
 }

 function update($post){ 

		DB::where('id',$post['id'])->update('language',[
			'language'	=> $post['language'],
			'slug' 		=> $post['slug'],
			'seo' 		=> seo($post['language']),
			'flag' 		=> $post['flag'],
		]);
		if (!DB::error()){redirect('language');}
 }

}