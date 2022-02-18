<?php 
	/**
	* Created By  : Erkan IŞIK
	* Created Date: 2018-02-15
	* Update Date : 2018-02-15
 	*/
class Wiki_model extends Model{
	
	function liste(){
		return DB::orderBy('id','desc')->get('wiki')->result();
	}

	function edit($id){
		return DB::where('id',$id)->get('wiki')->row();
	}

	function yeni($post){
		Upload::settings([
		    'encode'     => false,
		    'prefix'     => 'wiki_',
		    'extensions' => 'jpg|png|gif',			    
		])->target('upload')->start('resim');

		DB::insert('wiki',[
			'resim' => Upload::info()->path,
			'baslik' => $post['baslik'] ,
			'baslik_seo' => seo($post['baslik']),
			'detay' => $post['yazi'],
			'keywords' => $post['keywords'],
			'label' => $post['label'],
			'katid' => $post['kategori'] ,
			'editor' => Session::select('userid'),
		]);

		redirect(baseUrl('members/wiki'));
	}


	function update($post){

		
		Upload::settings([
		    'encode'     => false,
		    'prefix'     => 'wiki_',
		    'extensions' => 'jpg|png|gif',			    
		])->target('upload')->start('resim');

		if (Upload::info()->name) {
			unlink(pathinfo($_SERVER['SCRIPT_FILENAME'],PATHINFO_DIRNAME).'/'.$post['imgurl']);
			DB::where('id',$post['id'])->update('wiki',[
			'resim' => Upload::info()->path,
			'baslik' => $post['baslik'] ,
			'baslik_seo' => seo($post['baslik']),
			'detay' => $post['yazi'],
			'keywords' => $post['keywords'],
			'label' => $post['label'],
			'durum' => '0',
			'katid' => $post['kategori'] ,
			'editor' => Session::select('userid'),
		]);

		redirect(baseUrl('members/wiki'));
		}else{
			DB::where('id',$post['id'])->update('wiki',[			
			'baslik' => $post['baslik'] ,
			'baslik_seo' => seo($post['baslik']),
			'detay' => $post['yazi'],
			'keywords' => $post['keywords'],
			'label' => $post['label'],
			'durum' => '0',
			'katid' => $post['kategori'] ,
			'editor' => Session::select('userid'),
		]);

		redirect(baseUrl('members/wiki'));
		}

	
	}


}// class sonu