<?php namespace Project\Controllers;
use DB, Import, URL, Cookie, Session, ML,  Method,  Email;

class Ajax extends Controller{
	
	function activemailSend(){
		$kisibul = DB::where('aktivizasyon', method::post('par'))->get('user')->row();
		$mesaj = "
			Merhaba $kisibul->username.<br>
			Sitemize kayıt olduğunuz için teşekkür ederiz.<br>
			Aşağıdaki linke tıklayarak üyeliğinizi aktif edebilirsiniz.<br>
			<a href=\"http://pisilinux.org/uye/aktivizasyon/$kisibul->aktivizasyon\">Üyelik aktif etmek için lütfen buraya tıklayın.</a>
		";

		Email::sender('info@pisilinux.org', 'Pisilinux Üyelik İşlemleri')
		->receiver($kisibul->mail)
		->subject('Üyelik onayı')
		->message($mesaj)
		->send(); 

		echo 'Aktivizasyon maili tekrardan gönderildi';
		
	}

	function emailSend(){
		if (method::post('cevap')) {

		email::sender('info@pisilinux.org', 'Pisi Linux')
	     ->receiver(method::post('email'))
	     ->subject('Pisi Linux İletişim Cevap')
	     ->message(method::post('cevap'))
	     ->send();

			

			if (Email::error()){
				echo 'Bir hata oluştu: '.Email::error();
			}else{
					DB::where('id',method::post('id'))->update('iletisim',[
				'cevap' => method::post('cevap'),
				'senddate' => method::post('senddate')
			]);
				echo 'Cevabınız Başarıyla Gönderildi';
			}
	
			//echo 'Cevap maili gönderildi';
		}
		//uzbgetvqeinmkhvl
	}



	function duyuruStatusChange(){
		$status = Method::post('status');
		$id = Method::post('id');		
		if ($status == '0') {$stat = '1';}else{$stat = '0';}
		DB::where('id',$id)->update('duyuru',['status' => $stat]);
		if (DB::error()) {echo DB::error();}else{echo 'başarılı';
		}
	}
}