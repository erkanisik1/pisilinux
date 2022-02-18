$(function(){

 
$(window).show(500);
 $("img").addClass("img-fluid");



$('#submit').attr("disabled", "disabled");

 	$("#password2").focusout(function() {
        var password = $("#password").val();
        var password2 = $("#password2").val();
      
        if (password != password2) {
			$("#password2").val("");
			  $('#password2').attr("placeholder", "Şifreleriniz uyuşmuyor lütfen kontrol edin!");
			  $('#password2').css("background-color","#FBDDDD");


		}else{
			
			$('#password').css("background-color","#9DFADC").show(1500);
			$('#password2').css("background-color","#9DFADC");
			$('#submit').removeAttr("disabled");
		}
       
    });

    $('#gorev').click(function(){
      window.location.replace("https://pisilinux.org/bugs/addtask");
    });

   
	// footer alanını ekranın altına yapıştırır
 	var docHeight = $(window).height();
   	var footerHeight = $('#footer').height();
   	var footerTop = $('#footer').position().top + footerHeight;
   	var ppx = docHeight - footerTop-40;

   	if (footerTop < docHeight) {
    	$('#footer').css('margin-top', ppx + 'px');
   	}
   	// footer alanını ekranın altına yapıştırır
    
    // forum ekran seçme
  $('#gorunum').change(function(){
        var val = $(this).val(); 
         if (val == 1) {
          
        }

      if (val == 2) {
        window.location.replace("/question_answer");
        
      }
        
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
    
    $(".imgup").click(function()
    {
        $("html,body").animate({scrollTop: 0}, 500);
    });

$(".flags").on('click', function() {
 
  var flags = $(this).data("id");
          Cookies.set('country', flags);
          //location.reload();
          $(location).prop('href', '/');

});

$("#bugsnew" ).submit(function( event ) {
  if ($(".details").val() == "" ) {
    $(".detayUyari").css('color', 'red');
    $( ".detayUyari" ).text( "( Detaylar alanı boş bırakılamaz...)" ).show().fadeOut( 5000 );
    return false;
  }else{
    return
  }
 
  
  //event.preventDefault();
});


});
