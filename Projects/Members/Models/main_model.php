<?php 

	
	class Main_model extends Model{
		
		function iletisim_mail($post){

			$mesaj = '
				Mesajı Gönderen: '.$post['name'].'<br>
				Mail Adresi: '.$post['email'].'<br>
				Mesaj: '.$post['message'];
							

			Email::sender('musteri_hizmetleri@kartalelektronik.com', 'Pisilinux')
			->receiver('info@kartalelektronik.com')
			->subject('İletişim Formundan Mesaj var')
			->message($mesaj)
			->send();

			if (!Email::error()) {
				jalert('İletişime geçtiğiniz için teşekkürler, en kısa zamanda dönüş yapılacaktır.');
				
			}else{
				echo Email::error();
			}

			
			redirect(baseUrl());
		}
			
	}