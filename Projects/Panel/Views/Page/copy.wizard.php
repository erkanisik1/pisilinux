<script src="ckeditor/ckeditor.js"></script>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
      <h5>Sayfa Düzenleme Formu</h5>
  </div>
    <div class="widget-content nopadding">
      <form action="" method="post" class="form-horizontal">
        
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                  <input type="text" name="title" value="{{pageEdit($id)->title}}" class="span11" required>
                  
                </div>
            </div>            
            <div class="control-group">
              <label class="control-label">Content :</label>
                <div class="controls">
                   <textarea name="content" id="editor" rows="50" class="span11" required>{{pageEdit($id)->content}}</textarea>

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
              <label class="control-label">Etiketler :</label>
              <div class="controls">
                  <input type="text" name="label" value="{{pageEdit($id)->label}}" class="span11">
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kısa açıklama :</label>
                <div class="controls">
                  <input type="text" name="keywords" value="{{pageEdit($id)->keywords}}" class="span11">
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Durumu :</label>
                <div class="controls">
                  <select name="status" id="" class="span11">
                    <option value="0" {{selected(pageEdit($id)->status,'0')}}>Pasif</option>
                    <option value="1" {{selected(pageEdit($id)->status,'1')}}>Aktif</option>
                  </select>
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Language :</label>
              <div class="controls">
                <select name="lang" id="" class="span11" required>
                  <option value="">Select Language</option>
                  @foreach (languageList() as $key)
                    <option value="{{$key->slug}}" {[ selected($key->slug, pageEdit($id)->lang)]}>{{$key->language}}</option>
                  @endforeach
                </select>
                
              </div>
            </div>

            <div class="form-actions">
              <input type="hidden" name="id" value="{{$id}}">
              <button type="submit" class="btn btn-success btn-block">KAYDET</button>
            </div>
        </form>
    </div>
</div>
