<h3>Site Settings</h3><hr>
<div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Site Settings</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <div class="span3">
                <label class="control-label">Sayfa Resmi :</label>
                <div class="controls">
                  <img src="{{$settings->ayar_logo}}" alt="{{$settings->ayar_title}}" width="150">
                </div>
              </div>
              <div class="span9">
                <label class="control-label">Yeni Logo Yükle :</label>
                <div class="controls">
                  <input type="file" name="logo" class="span11" placeholder="Logo Yükle" />
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="span3">
                <label class="control-label">Site Favicon :</label>
                <div class="controls">
                  <img src="{{URL::base($settings->ayar_ico)}}" alt="{{$settings->ayar_title}}" title="{{$settings->ayar_title}}" width="150">
                </div>
              </div>
              <div class="span9">
                <label class="control-label">Yeni Favicon Yükle :</label>
                <div class="controls">
                  <input type="file" name="favicon" class="span11" placeholder="Logo Yükle" />
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site Başlığı :</label>
              <div class="controls">
                <input type="text" class="span11" name="title" value="{{$settings->ayar_title}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site URL :</label>
              <div class="controls">
                <input type="text" class="span11" name="siteurl" value="{{$settings->ayar_siteurl}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site Açıklaması :</label>
              <div class="controls">
                <input type="text" class="span11" name="description" value="{{$settings->ayar_description}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site Anahtar Kelimeleri :</label>
              <div class="controls">
                <input type="text" class="span11" name="keywords" value="{{$settings->ayar_keywords}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Giriş doğrulama kodu :</label>
              <div class="controls">
                <input type="text" class="span11" name="recaptcha" value="{{$settings->ayar_recaptcha}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site Sahibi :</label>
              <div class="controls">
                <input type="text" class="span11" name="author" value="{{$settings->ayar_author}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site e-mail :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" value="{{$settings->ayar_email}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site Facebook Sayfası :</label>
              <div class="controls">
                <input type="text" class="span11" name="facebook" value="{{$settings->ayar_facebook}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site Twitter :</label>
              <div class="controls">
                <input type="text" class="span11" name="twitter" value="{{$settings->ayar_twitter}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site Alt Kısmı :</label>
              <div class="controls">
                <input type="text" class="span11" name="footer" value="{{$settings->ayar_footer}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site Söz :</label>
              <div class="controls">
                <input type="text" class="span11" name="ayarsoz" value="{{$settings->ayar_soz}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site SMTP Host :</label>
              <div class="controls">
                <input type="text" class="span11" name="smtphost" value="{{$settings->ayar_smtphost}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site SMTP User :</label>
              <div class="controls">
                <input type="text" class="span11" name="smtpuser" value="{{$settings->ayar_smtpuser}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site SMTP Password :</label>
              <div class="controls">
                <input type="text" class="span11" name="smtppassword" value="{{$settings->ayar_smtppassword}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Site SMTP Port :</label>
              <div class="controls">
                <input type="text" class="span11" name="smtpport" value="{{$settings->ayar_smtpport}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Google Map :</label>
              <div class="controls">
                <input type="text" class="span11" name="googlemap" value="{{$settings->ayar_googlemap}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Temayı Seçin</label>
            
              <div class="controls">
                <select name="value1" id="" class="form-control">
              <option value="">secin...</option>
              @foreach (theme_list() as $key)
                <option value="{{$key}}">{{$key}}</option>
              @endforeach
            </select>
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
