
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Duyuru Düzenleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal">
		
             <div class="control-group">
              <label class="control-label">TITLE :</label>
              <div class="controls">
                <input type="text" name="title" class="span11" value="{{duyuruRow($id)->title}}" required>
              </div>
            </div>


            
            <div class="control-group">
              <label class="control-label">Duyuru :</label>
              <div class="controls">
                <textarea name="duyuru" id="editor" rows="20" class="span11">{{duyuruRow($id)->text}}</textarea>
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
                    <option value="{{$key->slug}}" {{selected(duyuruRow($id)->lang,$key->slug)}}>{{$key->language}}</option>
                  @endforeach
                </select>
                
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <select name="status" id="" class="span11" required>
                  <option value="">Select Status</option>
                    <option value="0" {{selected(duyuruRow($id)->status,'0')}}>Pasif</option>
                     <option value="1" {{selected(duyuruRow($id)->status,'1')}}>Active</option>
                </select>
                
              </div>
            </div>



          
            <div class="form-actions">
              <input type="hidden" name="id" value="{{$id}}">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>