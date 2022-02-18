$(function(){
	$('#example1').DataTable();
	$('#datatable').DataTable();
	$('#activemembers').DataTable();
	$('#wiki_list').DataTable({
		"language": {"url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Turkish.json"}
   });

  $('.username').select2();

 	$('body').on('click', '#selectAll', function () {
      if ($(this).hasClass('allChecked')) {
         $('input[type="checkbox"]', '#example').prop('checked', false);
      } else {
      	$('input[type="checkbox"]', '#example').prop('checked', true);
      }
      $(this).toggleClass('allChecked');
   })

   $('.link').click(function(){
    	var name = $(this).attr("data-link");
    	$("#title").val(name);
    	
    });

   $('.status').click(function(){
		var stat = $(this).data("status");
		var id = $(this).data("id");
		$.post('ajax/duyuruStatusChange', {id:id, status:status}, function(response){ 
		  location.reload();
		});
	})

  $('.sliderStat').click(function(){
  	var id = $(this).attr("data-id");
   	var status = $(this).attr("data-status");
   	$.post('slayt/sliderStatusChange', {id:id, status:status}, function(response){ 
		  location.reload();
		});
  })//sliderStat end
	
	$(".active1").click(function(){
		var param = $(this).data("id");
		$.post('ajax/activemailSend', {par:param}, function(response){ 
			alert(response);
		});
	});

	$(".sendform").click(function(){
		$.ajax({
			type: 'post',
			url: 'ajax/emailSend',
			data: $('#cevap1').serialize(),
			success:function(cvp){

				$.confirm({
					title: 'Pisilinux Eposta!',
					content: cvp,
					theme: 'dark',
					buttons: {
						Mesajlar: function(){
							$(location).attr('href', '/panel/iletisim');
						},					        
						Anasayfa: function(){
							$(location).attr('href', '/panel');
						}
					}    					
				});
			}

		});	
	});

	$(".delete_member").click(function(){

		var param = $(this).data("id");
			Swal.fire({
			  title: 'Üyeyi Silmek İstediğinizden Eminmisiniz?',
			  text: "Bu işlemi geri alamazsınız",
			  icon: 'error',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'EVET ÜYEYİ SİL',
			  cancelButtonText: 'Silme'
			}).then((result) => {
			  if (result.isConfirmed) {

			   	$.post('user/deleteMemberAjax',{par:param},function(response){ 
							Swal.fire({
						  title: response,
						  timer: 1500,
						  timerProgressBar: true,
						  showConfirmButton: false,
						  icon: 'success',
						  willClose: () => {
						    location.reload();
						  }
						});
					});
			  }
			})
		
   
	});


	$(".disable_member").click(function(){

		var param = $(this).data("id");

		$.post('user/disableMemberAjax',{par:param},function(response){
			Swal.fire({
        title: response, 
        timer: 2000,
        timerProgressBar: true,
				showConfirmButton: false,
				icon: 'success',
				willClose: () => {
				  location.reload();
				}
      });
    });
	});





});