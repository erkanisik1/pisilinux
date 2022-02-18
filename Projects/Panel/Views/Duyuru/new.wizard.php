
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Yeni Duyuru Ekleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal">
		
             <div class="control-group">
              <label class="control-label">TITLE :</label>
              <div class="controls">
                <input type="text" name="title" class="span11" required>
              </div>
            </div>


            
            <div class="control-group">
              <label class="control-label">Duyuru :</label>
              <div class="controls">
                <textarea name="duyuru" id="editor" rows="20" class="span11"></textarea>
                <script>
                  CKEDITOR.replace('editor', {
                     customConfig: 'admin_config.js',
                    height: 1000,
                    filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
                    filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
                    filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
                  });
                </script>
              </div>
            </div>

     
        <div class="control-group">
              <label class="control-label">Language :</label>
              <div class="controls">
                <select name="lang" id="" class="span11" required>
                  <option value="">Select Language</option>
                  @foreach (languageList() as $key):
                    <option value="{{$key->slug}}">{{$key->language}}</option>
                  @endforeach
                </select>
                
              </div>
            </div>



          
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>