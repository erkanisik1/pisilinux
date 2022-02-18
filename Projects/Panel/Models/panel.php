<?php 
	/**
	* Created By  : Erkan IŞIK
	* Created Date: 2017-09-05
	* Update Date : 2018-02-13
	*/
	class Panel extends model{
	


		

		

		function setting_update($post){

				if($_FILES["logo"]["name"]){
					$eski_logo = DB::get('settings')->row();
				unlink(pathinfo($_SERVER['SCRIPT_FILENAME'],PATHINFO_DIRNAME).'/'.$eski_logo->ayar_logo);

					Upload::settings([
			    'encode'     => false,
			    'prefix'     => 'log-',
			    'extensions' => 'jpg|jpeg|png|gif',
			   ])->target('upload')->start('logo');
			$logo_path = Upload::info()->path;

				}
			if($_FILES["favicon"]["name"]){
					$eski_logo = DB::get('settings')->row();
				unlink(pathinfo($_SERVER['SCRIPT_FILENAME'],PATHINFO_DIRNAME).'/'.$eski_logo->ayar_ico);

					Upload::settings([
			    'encode'     => false,
			    'prefix'     => 'fav-',
			    'extensions' => 'ico',
			   ])->target('upload')->start('favicon');
			$favicon_path = Upload::info()->path;

				}

			
			DB::update('settings',[
				'ayar_logo' => $logo_path,
				'ayar_ico' => $favicon_path,
				'ayar_title' => $post['title'],
				'ayar_siteurl' => $post['siteurl'],
				'ayar_description' => $post['description'],
				'ayar_keywords' => $post['keywords'],
				'ayar_author' => $post['author'],
				'ayar_email' => $post['email'] ,
				'ayar_facebook' => $post['facebook'],
				'ayar_twitter' => $post['twitter'],
				'ayar_footer' => $post['footer'],
				'ayar_soz' => $post['ayarsoz'],
				'ayar_smtphost' => $post['smtphost'],
				'ayar_smtpuser' => $post['smtpuser'],
				'ayar_recaptcha' => $post['recaptcha'],
				'ayar_smtppassword' => $post['smtppassword'],
				'ayar_smtpport' => $post['smtpport'],
				'ayar_googlemap' => $post['googlemap'],
			]);
			redirect(baseUrl('panel/setting'));
			
		}
	}// class sonu