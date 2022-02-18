<?php 

	/*
	* Created By: Erkan IŞIK
	* Created Date: 2017-12-05
	* Update Date: 2017-12-05
	*/

	class Slider_model extends model{

		function new_slider_save($post){
			Upload::settings([
			    'encode'     => false,
			    'prefix'     => '__slider-',
			    'extensions' => 'jpg|png|gif|jpeg',
			   ])->target('upload/slider')->start('resim');

			DB::insert('slider',[
				'baslik' => $post['baslik'],
				'aciklama' => $post['aciklama'],
				'resim' => Upload::info()->path,
				'link' => $post['link'],
				'durum' => '1',			
				]);
			if (DB::affectedRows()) {
				redirect('slayt');
			}else{
				output(DB::error());
			}
			
		}


		function slider_update($post){

			if($_FILES['resim']['name']){
				Upload::settings([
			    'encode'     => false,
			    'prefix'     => '__slider-',
			    'extensions' => 'jpg|png|gif',
			   ])->target('upload')->start('resim');

			DB::where('id',$post['id'])->update('slider',[
				'baslik' => $post['baslik'],
				'aciklama' => $post['aciklama'],
				'resim' => Upload::info()->path,
				'link' => $post['link'],
				'durum' => $post['status'],			
				]);
			redirect('slayt');

			}else{
				DB::where('id',$post['id'])->update('slider',[
				'baslik' => $post['baslik'],
				'aciklama' => $post['aciklama'],
				'link' => $post['link'],
				'durum' => $post['status'],			
				]);
			redirect('slayt');
			}
			

		}

		function delete($id){
			$resimlink = DB::select('resim')->where('id',$id)->get('slider')->value();
			unlink(pathinfo($_SERVER['SCRIPT_FILENAME'],PATHINFO_DIRNAME).'/'.$resimlink);
			DB::where('id',$id)->delete('slider');
			redirect('slayt');
		}

	}