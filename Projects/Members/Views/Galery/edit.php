<?php IMPORT::view('header'); ?>
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Yeni İçerik Ekleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
			
			<div class="control-group">
              <label class="control-label">KATEGORİSİ :</label>
              <div class="controls">
              <select name="category_id" id="" class="span11">

        <option value="">Yazının kategorinisi seçiniz...</option>

                  <?php echo KategoriListesi(0,0,0,content_edit($id)->category_id); ?>
                  </select>
              </div>
            </div>
            
          

             <div class="control-group">
              <label class="control-label">BAŞLIK :</label>
              <div class="controls">
                <input type="text" name="title" class="span11" value="<?php echo content_edit($id)->title ?>">
              </div>
            </div>


            
             <div class="control-group">
              <label class="control-label">YAZI :</label>
              <div class="controls">

                <textarea name="content" id="editor" rows="20" class="span11"><?php echo content_edit($id)->content ?></textarea>
               
              </div>
            </div>

             

            <div class="control-group">
              <label class="control-label">ETİKETLER :</label>
              <div class="controls">
                <input type="text" name="label" class="span11" placeholder="Etiketleri aralarına virgül koyarak ekleyin..." value="<?php echo content_edit($id)->label ?>">
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">KISA AÇIKLAMA :</label>
              <div class="controls">
                <input type="text" name="keywords" class="span11" placeholder="Yazı hakkında kısa bir açıklama yazın..." value="<?php echo content_edit($id)->keywords ?>">
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">DURUM :</label>
              <div class="controls">
                <select name="status" id="" class="span11">
                	<option value="">SEÇİNİZ...</option>
                	<option value="1" <?php echo content_edit($id)->status == '1'?'selected':''; ?>>AKTİF</option>
                	<option value="0" <?php echo content_edit($id)->status == '0'?'selected':''; ?>>PASİF</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">ANASAYFADA YAYINLANSINMI :</label>
              <div class="controls">
                <select name="mainpage" id="" class="span11">
                	
                	<option value="1" <?php echo content_edit($id)->mainpage == '1'?'selected':''; ?>>EVET</option>
                	<option value="0" <?php echo content_edit($id)->mainpage == '0'?'selected':''; ?>>HAYIR</option>
                </select>
              </div>
            </div>
          
            <div class="form-actions">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>
<?php Import::view('footer'); ?>