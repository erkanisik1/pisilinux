
<h3>Üye düzenleme formu </h3><hr>
      <div class="widget-box">
        
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Kullanıcı Adı :</label>
              <div class="controls">
                <input type="text" class="span11" name="username" value="<?php echo $edit->username ?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kullanıcı Email :</label>
              <div class="controls">
                <input type="text" class="span11" name="mail" value="<?php echo $edit->mail ?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kullanıcı Kayıt Tarihi :</label>
              <div class="controls">
                <input type="text" class="span11" name="date" value="<?php echo tcevir($edit->date); ?>" disabled />
              </div>
            </div>
               <div class="control-group">
              <label class="control-label">Onay Kodu :</label>
              <div class="controls">
                <input type="text" class="span11" name="aktivizasyon" value="<?php echo $edit->aktivizasyon; ?>"  /> 
              </div>
            </div>
          <div class="control-group">
              <label class="control-label">Kullanıcı Durumu :</label>
              <div class="controls">
                <select name="status" id="" class="span11">
                  <option value="1" <?php selected('1', $edit->status) ?>>Aktif</option>
                  <option value="0" <?php selected('0', $edit->status) ?>>Pasif</option>
                  <option value="2" <?php selected('2', $edit->status) ?>>Yasaklı</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kullanıcı Yetkisi :</label>
              <div class="controls">
                <select name="authority" id="" class="span11">
                	<?php  foreach (authority_list() as $key) { ?>
                	<option value="<?php echo $key->id; ?>"  <?php selected($key->id, $edit->authority) ?>><?php echo $key->authority; ?></option>
                	<?php } ?>
                </select>
              </div>
            </div>
            
            <div class="form-actions">
              <input type="hidden" name="id" value="<?php echo $edit->user_id; ?>">
              <button type="submit" class="btn btn-success btn-block">Güncelle</button>
            </div>
          </form>
        </div>
      </div>
