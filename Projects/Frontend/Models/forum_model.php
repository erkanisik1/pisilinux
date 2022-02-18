<?php 

class Forum_model extends Model{

	function kategori($par = '0'){
		return DB::where('kat_ustid',$par)->get('forum_kat')->result();
	}

	// soru/cevap gösterimdeki konu gönderimi
	function konu_kaydet($post){
		$userid = Session::select('userid');
		$title = trim(linkcleaner($post['title']));
		
		if($userid > 0){		
				DB::insert('forum',[
					'category_id'	=> $post['category_id'], 
					'title' 		=> $title, 
					'title_seo'		=> seo($title), 
					'content' 		=> $post['content'],
					'user_id'		=> $userid,
					'content_id'	=> '0',
					'view'			=> '0',
					'message'		=> '0'
					
				]);
			
				if (DB::affectedRows()) {
					$konu_id = DB::insertID();
		            $url = 'forum/konulist/'.$konu_id;
		        	$konu_url = 'forum/subject/'.isset($konu_id).'-'.seo($post['title']);
		            $message = "Mesajın geldiği yer: Forum\nGönderen: ".yazar(Session::select('userid'))."\nBaşlık: ".$post['title']."\nMesaj: ".decode1($post['content'])."\nLink: https://pisilinux.org/forum/subject/".DB::insertID()."-".seo($post['title']);
					telegram($message);
					redirect('forum');
				}
			}
		}

	// forum gösterimdeki konu gönderimi
	function konu_kaydet1($post){
		$title = linkcleaner($post['title']);
		DB::insert('forum',[
			'category_id'	=> $post['category_id'], 
			'title' 		=> $title, 
			'title_seo'		=> seo($title), 
			'content' 		=> $post['content'],
			'user_id'		=> Session::select('userid'),
			'content_id'	=> '0',
			'view'			=> '0',
			'message'		=> '0'
			
		]);
	
		if (DB::affectedRows()) {
			$konu_id = DB::insertID();
            $url = 'forum/konulist/'.$konu_id;
        	$konu_url = 'forum/subject/'.isset($konu_id).'-'.seo($post['title']);
            $message = "Mesajın geldiği yer: Forum\nGönderen: ".yazar(Session::select('userid'))."\nBaşlık: ".$post['title']."\nMesaj: ".$post['content']."\nLink: https://pisilinux.org/forum/subject/".DB::insertID()."-".seo($post['title']);
			$link = "forum/subject/".DB::insertID()."-".seo($post['title'])."'>".$post['title'];
			telegram($message);
			redirect($link);
		}
		
	}

	function forumkonu($post){
		//$title_seo = explode('.',$post); 
		return DB::where('id',$post)->get('forum')->row();
	}

	function cevap($post){
		$fd = DB::where('id', $post['konu_id'])->get('forum')->row();
		$userid = $fd->user_id;
	
		DB::insert('forum',[
			'category_id'	=> $fd->category_id, 
			'title' 		=> $fd->title, 
			'title_seo'		=> $fd->title_seo, 
			'content' 		=> $post['konu_cevap'],
			'user_id'		=> Session::select('userid'),
			'content_id'	=> $post['konu_id'],
			'view'			=> '0',
			'message'		=> '0'
		]);

		if (DB::affectedRows()) {

			$konu_id = $post['konu_id'];
            $konu_url = 'forum/subject/'.$konu_id.'-'.seo(forum_title($konu_id));
			//$link = "forum/subject/".DB::insertID()."-".seo($post['title'])."'>".$post['title'];
            $message = "Mesajın geldiği yer: Forum\nGönderen: ".yazar(Session::select('userid'))."\nBaşlık: ".forum_title($konu_id)."\nLink:" .URL::base($konu_url) ;
			telegram($message);


			$notice = 'Yazdığınıza cevap verildi linki aşağıda.</br><a href="/forum/subject/'.$post['konu_id'].'-'.$post['title_seo'].'.html">'.$fd->title.'</a>';
			$notice1 = 'Forumdaki yazdığınıza konuya cevap verildi. <a href="'.URL::base().'forum/subject/'.$post['konu_id'].'-'.$post['title_seo'].'.html">'.URL::base().'forum/subject/'.$post['konu_id'].'-'.$post['title_seo'].'.html</a>';

			Email::from('info@pisilinux.org', 'Pisi Linux Forum','info@pisilinux.org' )
				->receiver(userRow($userid)->mail)
				->subject('Pisi Linux Forum [ '.$fd->title.' ]')
				->message($notice1)
				->send(); 

			DB::insert('messages',[
				'title' => 'Forumdan mesaj var ['.$fd->title.' ]',
				'userId' => $fd->user_id,
				'message' => $notice,

			]);
			
			
			redirect('forum/subject/'.$post['konu_id'].'-'.$post['title_seo'].'.html');
		}else{
			output(DB::error());
		}
	}

	function edit($data){
		return DB::where('id',$data)->get('forum')->row();
	}

	function update($post){
		DB::where('id',$post['content_id'])->update('forum',[
			'title' 		=> $post['konubaslik'], 
			'title_seo'	=> seo($post['konubaslik']), 
			'content' 			=> $post['konuicerik'],
			'user_id'		=> Session::select('userid'),
		]);

		if (DB::affectedRows()) {
		redirect(baseUrl('forum/konu/'.$post['konuid'].'-'.seo($post['konubaslik'])));
		}
	}

	function cat_update($post){
		DB::where('id',$post['id'])->update('forum_kat',[
			'adi' => $post['adi'],
			'adi_seo' => seo($post['adi']),
			'aciklama' => $post['aciklama'],
			'kat_ustid' => $post['kat_ustid']
		]);
		
		if (DB::affectedRows()) {
			redirect('forum/category_list');
		}
		
	}


}