<?php import::view('header'); ?>
<div class="widget-box">
  	
  	<div class="widget-content">   
  
          <form action="#" method="post" class="form-horizontal">
		

             <div class="control-group">
              <label class="control-label">Başlık :</label>
              <div class="controls">
                <input type="text" name="title" class="span11" value="<?php echo forum_content_row($id)->title; ?>">
              </div>
            </div>

               <div class="control-group">
	              <label class="control-label">Kategori :</label>
		              <div class="controls">
		               	<select name="category" id="" class="span11">
		               		<option value="0">ANA KATEGORİ</option>
		               			<?php $select = ""; foreach (forum_kategori_panel() as $key ): 
		               				if ($key->id == forum_content_row($id)->category_id) {$select = 'selected';}
		               			?>

		               			<option value="<?php echo $key->id ?>" <?php echo $select; ?>><?php echo $key->adi ?></option>

		               			<?php $select = ""; foreach (forum_kategori_panel($key->id) as $key1 ): 
		               				if ($key1->id == forum_content_row($id)->category_id) {$select = 'selected';}

		               				?>
		               			<option value="<?php echo $key1->id ?>" <?php echo $select; ?>>--><?php echo $key1->adi ?></option>
		               		<?php $select = ""; endforeach ?>
		               		<?php endforeach ?>
		               	</select>
		              </div>
		            </div>


            
             <div class="control-group">
              <label class="control-label">İçerik :</label>
              <div class="controls">
                <textarea name="content" id="editor" rows="20" class="span11"><?php echo forum_content_row($id)->content ?></textarea>
              </div>
            </div>

              <div class="form-actions">
              	<input type="hidden" name="id" value="<?php echo $id; ?>">
              <button type="submit" class="btn btn-success btn-block">Kaydet</button>
            </div>
	            </form>

	</div>        
</div>



<?php import::view('footer'); ?>