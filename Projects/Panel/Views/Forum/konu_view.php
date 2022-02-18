<?php import::view('header'); ?>
<div class="widget-box">
  	<div class="widget-title"> <h5><?php echo forum_content_row($id)->title; ?></h5></div>
  	<div class="widget-content">    
      	<img src="<?php echo avatar1(forum_content_row($id)->user_id); ?>" alt="" width="100">
      	<?php echo forum_content_row($id)->user_id.'-'.yazar(forum_content_row($id)->user_id).' - '.tcevir(forum_content_row($id)->insertDate,1).' - '.forum_kategori_adi(forum_content_row($id)->category_id)->adi; ?>   
 		<hr>
       	<?php echo forum_content_row($id)->content; ?>

    </div> 
    <div class="widget-content">
    	<a href="/panel/forum/edit/<?php echo $id ?>"><button>Düzenle</button></a>
    </div>    
   
</div>

<!-- cevaplar -->
<?php $a=1; foreach (cevaplist($id) as $key): $a = $a+1; ?>
	<div class="widget-box">
  		
  		<div class="widget-content">    
      		<img src="<?php echo avatar1($key->user_id); ?>" alt="" width="100">
      		<?php echo yazar($key->user_id).' - '.tcevir($key->insertDate,1); ?>   
 			<hr>
       		<?php echo $key->content; ?>
    	</div>  
    	 <div class="widget-content">
    	<a href="/panel/forum/edit/<?php echo $key->id ?>"><button>Düzenle</button></a>
    </div>          
	</div>

  
 <?php endforeach ?>


<?php import::view('footer'); ?>