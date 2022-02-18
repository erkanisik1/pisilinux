<?php namespace Project\Controllers;
use Method,Captcha,Email, Validator;
/*
* Created By: Erkan IŞIK
* Created Date: 2017-05-09
* Update Date: 2020-09-07
*/

class Contact extends Controller{


    function main(){
            $message1 = '';
        
            if (Method::post()) {
                
                if (Method::post('token') == Captcha::getCode()) {  
                    $email = strtolower(trim(method::post('email')));
                    $message = 'Gönderildiği Yer: Contact Form
                    Mesajı Gönderen: '.method::post('name').'
                    Mail Adresi: '.$email.'
                    Mesaj: '.method::post('message');
                    //telegram($message);
                    /*
                    Email::sender('form@pisilinux.org', 'Pisilinux İletişim')
                    ->receiver('admins@pisilinux.org')
                    ->ReplyTo($email, method::post('name'))
                    ->subject(method::post('name').' mesajı var')
                    ->message(method::post('message'))
                    ->send();
                    */
                    $message1 = lang('contact','message1');
                }else{
                    $message1 = lang('contact','message4');
                }
            }
   
       

/*
        if(method::post()){
            Email::sender('form@pisilinux.org', 'Pisilinux İletişim')
            ->receiver('info@pisilinux.org')
            ->subject(method::post('name').' mesajı var')
            ->message($mesaj)
            ->send();
      
                
                DB::insert('iletisim',[
                    'isim'      => method::post('name'),
                    'email'     => $email,
                    'mesaj'     => method::post('message'),
                    'date'      => method::post('currentDate'),
                    'durum'     => '1',
                    'cevap'     => '0',
                    'senddate'  => '0000-00-00',
                    'yazan'     => '66'
                ]);
     
               
          
        }

*/
    	//view::alert($message1);
   
    }

    function formControl(){
        
        /*  my.js deki #contactSubmit ajaxından gelen verileri işleniyor, tüm alanlar geçerli ise mesaj mail atılıyor ve telegram kanalına bilgi gönderiliyor.
        */
        $email = Method::post('email');

        // isim alanı kontrolu yapılıyor 
        if (Method::post('name') == '') {echo '1&'.lang('contact','nameAlert').'&'; }
        //mail alanı boşmu kontrolu yapılıtor.
        if ($email == '') {echo '2&'.lang('contact','mailNullAlert').'&';}
        //mail alanı doğru girilmiş kontrolu yapılıtor.
        if (Validator::email($email) == 0) {echo '3&'.lang('contact','mailFaultAlert').'&'; }
        // message alanı kontrolu yapılıyor 
        if (Method::post('message') == '') {echo '4&'.lang('contact','messageAlert').'&'; }
        // Doğrulama kodu yazılmışmı kontrol ediliyor
        if (Method::post('token')=='') { echo '5&'.lang('contact','tokenNullAlert').'&'; }
        //Doğrulama kodu doğru yazılmışmı kontrolu
        elseif(Method::post('token') == Captcha::getCode()) {

                    $email = strtolower(trim(method::post('email')));
                    $message = 'Gönderildiği Yer: Contact Form
                    Mesajı Gönderen: '.method::post('name').'
                    Mail Adresi: '.$email.'
                    Mesaj: '.method::post('message');
                   echo '6&'.lang('contact','formSuccess').'&';
                   telegram($message);
                  /* 
                    Email::sender('form@pisilinux.org', 'Pisilinux İletişim')
                    ->receiver('admins@pisilinux.org')
                    ->ReplyTo($email, method::post('name'))
                    ->subject(method::post('name').' mesajı var')
                    ->message(method::post('message'))
                    ->send();
                   */

                }else{
                    echo '7&'.lang('contact','tokenFaultAlert').'&';
                }
        
    }
}