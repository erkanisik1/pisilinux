<?php import::view('header'); ?>
<h3>Yeni Üye Kaydı</h3><hr>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Yeni Üye ekle</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Kullanıcı Adı :</label>
              <div class="controls">
                <input type="text" class="span11" name="username" placeholder="First name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kullanıcı Email :</label>
              <div class="controls">
                <input type="text" class="span11" name="email" placeholder="Last name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kullanıcı Şifresi</label>
              <div class="controls">
                <input type="password"  class="span11" name="password" placeholder="Enter Password"  />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Kullanıcı Kayıt Tarihi :</label>
              <div class="controls">
                <input type="text" class="span11" name="date" value="<?php echo date("Y-m-d H:i:s") ?>" />
              </div>
            </div>
          <div class="control-group">
              <label class="control-label">Kullanıcı Durumu :</label>
              <div class="controls">
                <select name="authority" id="" class="span11">
                  <option value="1" selected>Aktif</option>
                  <option value="0">Pasif</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kullanıcı Yetkisi :</label>
              <div class="controls">
                <select name="status" id="" class="span11">
                	<?php  foreach ($authority as $key) { ?>
                	<option value="<?php echo $key->status; ?>"><?php echo $key->authority; ?></option>
                	<?php } ?>
                </select>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Kullanıcı resim yükle :</label>
              <div class="controls">
               <input type="file" name="avatar">
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
<?php import::view('footer'); ?>