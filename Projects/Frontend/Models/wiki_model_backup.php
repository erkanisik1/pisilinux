			$password = md5($post['password']);
			$rnd = md5(date('Ymd His'));
			$check = DB::where('mail', $post['email'])->get('user')->result();
			$say = COUNT($check);

			if ($say == '1') {
				Jalert($post['email'].' eposta ile bir üye kayıtlı. Şifrenizi Unuttuysanız lütfen üye girişinden şifremi unuttum linkine tıklayın');
				git('member');
			}else{
		
						DB::insert('user',[
							'username' => $post['username'], 
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
			
						$mesaj = "
						Merhaba $post[username].<br>
						Sitemize kayıt olduğunuz için teşekkür ederiz.<br>
						Aşağıdaki linke tıklayarak üyeliğinizi aktif edebilirsiniz.<br>
						<a href=\"https://pisilinux.org/member/aktivizasyon/$rnd\">Üyelik aktif etmek için lütfen buraya tıklayın.</a><br>
						Ayrıca sizleri <a href=\"https://t.me/joinchat/MAcpp0o6E4dAAoz090cDjA.\"> Telegram </a> pisilinux kanalında sizide aramızda görmekten memnuniyet duyarız.
					";
						
					if (DB::affectedRows()){
			
						Email::sender('form@pisilinux.org', 'Pisi Linux Üyelik İşlemleri')
						->receiver($post['email'])
						->subject('Üyelik onayı')
						->message($mesaj)
						->send(); 
				 if (Email::error()) {output(Email::error());}else{
						jalert("Sitemize kayıt olduğunuz için teşekkür ederiz.\nÜyeliğinizin aktif olabilmesi için lütfen mail adresinizi kontrol edin...");
						git();
					}

						
					}else{
						output(DB::error());
					}
				}