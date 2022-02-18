<?php 
	/**
	* Created By  : Erkan IŞIK
	* Created Date: 2017-12-27
	* Update Date : 2019-01-06
	*/
class Wiki_model extends model{

	function content_list(){return DB::orderBy('id','desc')->get('wiki')->result();}
	
	function edit($id){return DB::where('id',$id)->get('wiki')->row();}
	
	function new_category_save($post){
		/* Wiki kategori resmini yüklüyoruz */
		Upload::settings([
		    'encode'     => false,
		    'prefix'     => 'wiki_cat_',
		    'extensions' => 'jpg|png|gif',			    
		])->target('upload')->start('resim');
		/* Yeni wiki kategori adını veritabanına kaydediyoruz */
		DB::insert('wiki_kat',[
			'adi' => $post['kategori'],
			'adi_seo' => seo($post['kategori']),
			'kat_ustid' => $post['ustkategori'],
			'aciklama' => $post['aciklama'],
			'img' => Upload::info()->path,
		]);
		if (DB::affectedRows()) {redirect('kategori');}
	}


	function new_content_save($post){
		/* Yeni wiki içeriğini veritabanına kaydediyoruz */
		DB::insert('wiki',[
			'baslik' 		=> $post['baslik'] ,
			'baslik_seo'	=> seo($post['baslik']),
			'detay' 		=> $post['yazi'],
			'keywords' 		=> $post['keywords'],
			'label' 		=> $post['etiket'],
			'katid' 		=> $post['kategori'] ,
			'editor'		=> Session::select('userid'),
			'hits' 			=> '0'
			]);
		if (DB::affectedRows()) {redirect('wiki_content');}else{jalert(DB::error());}
	}


	function wiki_update($post){
		/* Yeni wiki içeriğini veritabanını güncelliyoruz */			
		DB::where('id',$post['id'])->update('wiki',[
			'baslik' 		=> $post['baslik'] ,
			'baslik_seo'	=> seo($post['baslik']),
			'detay' 		=> $post['yazi'],
			'keywords' 		=> $post['keywords'],
			'label' 		=> $post['etiket'],
			'katid' 		=> $post['kategori'] ,
			'durum'			=> $post['durum'],
			'deleted'		=> $post['deleted'],
			'lang'			=> $post['lang']
		]);
		if (DB::error()){jalert(DB::error());}else{redirect('wiki');}
	}

		

}// class sonu