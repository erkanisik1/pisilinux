<?php 
/**
* Created By  : Erkan IŞIK
* Created Date: 2017-09-27
* Update Date : 2018-11-24
*/
	class User_model extends Model{
		
		function logincheck($data){
			$pass = md5($data['pass']);
			$user = DB::where('mail',$data['email'], 'and')
			->where('password',$pass,'and')
			->where('status','1')
			->get('user')
			->row();

			if ($user) {
				DB::where('user_id', $user->user_id)->update('user',['login_date' => $data['currentDate']]);
				Session::insert('login','true');
				Session::insert('userid',$user->user_id);
				Session::insert('username',$user->username);
				Session::insert('avatar',$user->avatar);
				Session::insert('yetki',$user->authority);

				if(isset($data['remember']) == '1'){
					Cookie::time(60 * 60 * 24)->insert('userlogin','true');
					Cookie::time(60 * 60 * 24)->insert('userid',$user->user_id);
					Cookie::time(60 * 60 * 24)->insert('username',$user->username);
				}
				
				if (Cookie::select('returnlink')){redirect(URL::base(Cookie::select('returnlink')));}else{redirect(URL::base());}
			}else{redirect(URL::base().'member');}
		}

		function yeniuye($post){
			
			$password = md5($post['password']);
			$rnd = md5(date('Ymd His'));
			$check = DB::where('mail', $post['email'])->get('user')->result();
			$say = COUNT($check);

			$username = mb_convert_case($post['username'], MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($post['surname'], MB_CASE_TITLE, "UTF-8");

			DB::insert('user',[
				'username' => $username, 
				'mail' => $post['email'], 
				'password' => $password, 
				'avatar' => '', 
				'status' => '0', 
				'authority' => '2',
				'aktivizasyon' => $rnd, 
				'egitim' => $post['egitim'],
				'meslek' => $post['meslek'],
				'beceri' => $post['beceri'],
				'nickname' => ''
			]);
		
			if (DB::affectedRows()){	
			       		
				$mesaj = "
					Merhaba $username.<br>
					Sitemize kayıt olduğunuz için teşekkür ederiz.<br>
					Aşağıdaki linke tıklayarak üyeliğinizi aktif edebilirsiniz.<br>
					<a href=\"https://pisilinux.org/member/aktivizasyon/$rnd\">Üyelik aktif etmek için lütfen buraya tıklayın.</a><br>
					Ayrıca sizleri <a href=\"https://t.me/joinchat/MAcpp0o6E4dAAoz090cDjA.\"> Telegram </a> pisilinux kanalında sizide aramızda görmekten memnuniyet duyarız.
				";
				
				Email::from('info@pisilinux.org', 'Pisi Linux','info@pisilinux.org')
			    ->receiver($post['email'])
			    ->subject('Üyelik onayı')
			    ->message($mesaj)
			    ->send();
			    
				echo lang('user','userNewSuccess');
		 	}
		}

		function sifremiunuttum_model($post){
			$rnd = md5(date('Ymd His'));

			DB::where('mail',$post['email'])->update('user',['aktivizasyon' => $rnd,'status' => '0']);

			if (DB::affectedRows()) {
				$mesaj = "
				Bu mail unuttuğunuz şifreyi kurtarabilmeniz için Gönderilmiştir.<br>
				<br>
				<a href=\"https://pisilinux.org/member/yenisifre/$rnd\">Buraya tıklayarak yeni şifrenizi belirleyebilirsiniz.</a> yada<br>
				https://pisilinux.org/member/yenisifre/$rnd adresini tarayıcınızın adres barına kopyalayın...
				";
							
				if (DB::affectedRows()){
					Email::from('info@pisilinux.org', 'Pisi Linux','info@pisilinux.org')
					    ->receiver($post['email'])
					    ->subject('Yeni Şifre belirleme')
					    ->message($mesaj)
					    ->send();

					
					jalert('Kurtarma maili Gönderildi. Yeni Şifre Belirleyebilmeniz için lütfen mail adresinizi kontrol edin...');
					git();
				}
			}else{
				jalert('Böyle Bir mail adresi kayıtlı değil...');
				git();
			}			
		}//sifremiunuttum_model

		function yenisifre($post){
			$password = md5($post['password']);
			DB::where('aktivizasyon',$post['act'])->update('user',['aktivizasyon' => '']);
			DB::where('user_id',$post['id'])->update('user',['password' => $password,'status' => '1']);
			jalert('Şifreniz Başarıyla Güncellendi. Üye giriş sayfasına yönlendiriliyorsunuz...');
			git('uye');
		}//yenisifre
	}//class sonu