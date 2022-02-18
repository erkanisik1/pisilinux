<?php import::view('header');  ?>
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Şifre Değiştirme Formu</h5>
        </div>
        <div class="widget-content nopadding">
        <?php if(isset($message)){ ?>
          <div class="alert alert-error alert-block" style="margin:10px;border-radius: 5px;"> 
            <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading">Hata!</h4>
            <?php echo $message; ?> 
          </div>
        <?php } ?>
       
          <form action="#" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Eski Şifreniz :</label>
              <div class="controls">
                <input type="password" name="pass" class="span11" placeholder="Geçerli Şifrenizi Yazın">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Yeni Şifreniz :</label>
              <div class="controls">
                <input type="password" name="newpass" class="span11" placeholder="Yeni Şifrenizi Yazın">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Yeni Şifrenz Tekrar</label>
              <div class="controls">
                <input type="password" name="newpassrepeat" class="span11" placeholder="Yeni Şifrenizi Tekrar Yazın">
              </div>
            </div>
          
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>

<?php import::view('footer'); ?>