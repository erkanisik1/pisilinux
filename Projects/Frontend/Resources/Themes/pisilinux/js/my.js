$(function(){

  if (!Cookies.get('popup')) {
    $("#duyuru").modal({ backdrop: 'static', keyboard: false, show: true });
  }//popup
 

  $("#popupKapat").click(function(){
    Cookies.set('popup', 'off', { expires: 7 })
  })//popupKapat

  $(".download").click(function(){
    var id = $(this).data("id");
    $.ajax({
      type: 'post',
      url: 'download/counter',
      data: {id:id},     
    })
  })//download

  $('#contactSubmit').click(function(){
    $.ajax({
      type: 'post',
      url: 'contact/formControl',
      data: $('form').serialize(),
      success: function (message) {
        uyari = message.split('&');
      
        // name Alert
        if (uyari['0'] == 1) { swal("",uyari['1'],"error").then((value) => {$("#name").focus();}); }

        // mail Null uyari
        if (uyari['0'] == 2) { swal("",uyari['1'],"error") }
        if (uyari['0'] == 3) { swal("",uyari['1'],"error") }

        if (uyari['0'] == 4) { swal("",uyari['1'],"error") }

        // token Null uyari
        if (uyari['0'] == 5) { swal("",uyari['1'],"error") }
        // mail Fault uyari
     
        if (uyari['0'] == 6) {swal("",uyari['1'],"success").then((value) => {$(location).prop('href', '/');});  }
     
        // token Fault uyari
        if (uyari['0'] == 7) { swal("",uyari['1'],"error") }
        
      }
    })
  })//contactSubmit
  
  // üye kayıt sayfasının ajax kontrol scripti
  $('#registerSubmit').click(function(){

    var username = $("#username").val();
    var surname = $("#surname").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var password2 = $("#password2").val();
    var token = $("#token").val();

    if(username.length <= 2){
         swal('','Adınız boş yada 3 karakterden az olamaz','error').then((value) =>{$("#username").focus();});
      }else if(surname.length <= 2){
         swal('','Soyadınız boş yada 3 karakterden az olamaz','error').then((value) =>{$("#surname").focus();});
      }else if(!MailKontrol(email)){
        swal('','Email alanı boş yada geçersiz mail adresi girdiniz','error').then((value) => {$("#email").focus();}); 
      }else if(password == ''){
        swal('','Şifre alanı boş olamaz ','error').then((value) => {$("#password").focus();});
      }else if(password.length <= 5){
        swal('','Şifreniz 6 karakterden az olamaz','error').then((value) => {$("#password").focus();});
      }else if(password2 == ''){
        swal('','Şifrenizi tekrar yazın!','error').then((value) => {$("#password2").focus();}); 
      }else if(password != password2){
        swal('','Şifreleriniz uyuşmuyor','error').then((value) => {$("#password2").focus();});
      }else if(token == ''){
        swal('','Güvenlik kodunu yazmadınız.','error').then((value) => {$("#token").focus();}); 
      }else if($.cookie('secret') != token){
          swal('','Güvenlik kodunu yanlış girdiniz.','error').then((value) => {$("#token").focus();});
      }else{
        $.post( "/member/control", $( "#registerForm" ).serialize(),function( data ) {
          swal('',data,'success').then((value) => {window.location.replace("/");});
        });        
    };    
  });//registerSubmit


  $(window).show(500);
  $("img").addClass("img-fluid");
  $("div.carousel-item:first").addClass('active');
  $('#submit').attr("disabled", "disabled");
  $('#gorev').click(function(){
    window.location.replace("https://pisilinux.org/bugs/addtask");
  });//gorev

  // footer alanını ekranın altına yapıştırır
  var docHeight = $(window).height();
  var footerHeight = $('#footer').height();
  var footerTop = $('#footer').position().top + footerHeight;
  var ppx = docHeight - footerTop-40;
  if (footerTop < docHeight) {
    $('#footer').css('margin-top', ppx + 'px');
  }
  // footer alanını ekranın altına yapıştırır

  // forum ekran seçme (kaldırıldı)
  $('#gorunum').change(function(){
    var val = $(this).val(); 
    if (val == 1) {}
    if (val == 2) {window.location.replace("/question_answer");}        
  });

  $('#task').change(function(){
    var val = $(this).val(); 
    if (val == 1) {
      $('#sistem1').show(500);
    }else{
      $('#sistem1').hide(500);
    }
  });

  $('.nav-link').on('click', function (e) {    
    localStorage.setItem('activeLink', $(this).attr('href'));
  });

  // read hash from page load and change tab
  var activeTab = localStorage.getItem('activeLink');
  if(activeTab){$('li.nav-item').find('a[href="'+activeTab+'"]').parent().addClass('active');}

  $(window).scroll(function(){
    var scrolltop=$(this).scrollTop();    
    if(scrolltop>=50){
      $(".imgup").show(500);
    }else{ 
      $(".imgup").hide(500);
    }
  });
  $(".imgup").click(function(){$("html,body").animate({scrollTop: 0}, 500);});

  $(".flags").on('click', function(){
    var flags = $(this).data("id");
    Cookies.set('country', flags);
    //location.reload();
    $(location).prop('href', '/');
  });

  // Bugs page functions start
  $("#bugsnew" ).submit(function( event ){
    if ($(".details").val() == "" ) {
      $(".detayUyari").css('color', 'red');
      $( ".detayUyari" ).text( "( Detaylar alanı boş bırakılamaz...)" ).show().fadeOut( 5000 );
      return false;
    }else{
      return
    }
  });//bugsnew

  $('#bugsClose').click(function(){
    var bugsId = $(this).attr('data-id');

    $.post( "/bugs/bugsClose", {id:bugsId}, function(message){
      location.reload();
    });

 
  });//bugsClose

  // Bugs page functions end 

  function MailKontrol(email){
    var kontrol = new RegExp(/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/i);
    return kontrol.test(email);
  }

  var username = document.getElementById('username');
  username.addEventListener("keyup",function(){
  if (username.value.match(/[^a-zA-Z' 'wığüşöçĞÜŞÖÇİ]/g)){
      username.value = this.value.replace(/[^a-zA-ZwığüşöçĞÜŞÖÇİ]/g,'');
    }
  })

  var surname = document.getElementById('surname');
    surname.addEventListener("keyup",function(){
    if (surname.value.match(/[^a-zA-Z' 'wığüşöçĞÜŞÖÇİ]/g)){
        surname.value = this.value.replace(/[^a-zA-ZwığüşöçĞÜŞÖÇİ]/g,'');
    }
  })


});// jquery sonu