<?php 
	/**
	* Created By  : Erkan IŞIK
	* Created Date: 2018-02-15
	* Update Date : 2019-01-06
 	*/
class wiki_model extends Model{
	
	function liste(){
		return DB::orderBy('id','desc')->where('editor',Session::select('userid'))->get('wiki')->result();
	}

	function onay(){
		return DB::orderBy('id','desc')->where('editor',Session::select('userid'))->get('wiki_update')->result();
	}

	function edit($id){
		return DB::where('id',$id)->get('wiki')->row();
	}

	function yeni($post){
		DB::insert('wiki',[
			'baslik' 		=> $post['title'] ,
			'baslik_seo'	=> seo($post['title']),
			'detay' 		=> $post['content'],
			'keywords' 		=> $post['keywords'],
			'label' 		=> $post['label'],
			'katid' 		=> $post['category'] ,
			'editor' 		=> USERID,
			'hits'			=> '0',
			'lang'			=> LANG,
			'durum'			=> '3'
		]);

		
		if (!DB::error()){
			jalert('Yöneticilerimizin kontrolundan sonra yayına alınacaktır');
			$message = 'Onayınızı bekleyen yeni bir wiki yazısı var. Lütfen kontrol ediniz.';
			telegram($message);
			redirect('wiki');}
	}
 
	

	function update($post){
		$up = wikiContentRow($post['id']);

		DB::insert('wiki_update',[			
			'baslik' 		=> $up->baslik ,
			'baslik_seo'	=> seo($up->baslik),
			'detay' 		=> $up->detay,
			'keywords' 		=> $up->keywords,
			'label' 		=> $up->label,
			'katid' 		=> $up->katid ,
			'wikiId'		=> $up->id,
			'editor' 		=> USERID,
			'lang'			=> $up->lang
			
		]);
		
	
		DB::where('id',$post['id'])->update('wiki',[			
			'baslik' 		=> $post['baslik'] ,
			'baslik_seo'	=> seo($post['baslik']),
			'detay' 		=> $post['yazi'],
			'keywords' 		=> $post['keywords'],
			'label' 		=> $post['label'],
			'katid' 		=> $post['kategori'] ,
			'editor' 		=> USERID,
			'lang'			=> $post['lang'],
					
		]);

/*
		DB::insert('wiki_update',[			
			'baslik' 		=> $post['baslik'] ,
			'baslik_seo'	=> seo($post['baslik']),
			'detay' 		=> $post['yazi'],
			'keywords' 		=> $post['keywords'],
			'label' 		=> $post['label'],
			'katid' 		=> $post['kategori'] ,
			'wikiId'		=> $post['id'],
			'editor' 		=> USERID,
			'lang'			=> $post['lang']
			
		]);

	*/
		if (!DB::error()){redirect('wiki');}else{
			echo DB::error();
		}
	}



}// class sonu