
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Download Copy Form</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal">
            <div class="control-group">
              <div class="controls">
                <img src="{{downloadEdit($id)->image}}" alt="" class="span11">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">IMAGE URL:</label>
              <div class="controls">
                <input type="text" name="image" class="span11" value="{{downloadEdit($id)->image}}">
              </div>
            </div>


		

             <div class="control-group">
              <label class="control-label">TITLE :</label>
              <div class="controls">
                <input type="text" name="baslik" class="span11" value="{{downloadEdit($id)->baslik}}">
              </div>
            </div>


                 
            <div class="control-group">
              <label class="control-label">DESCRIPTION :</label>
              <div class="controls">
                <textarea name="yazi" id="editor" rows="20" class="span11">{{downloadEdit($id)->aciklama}}</textarea>
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
              <label class="control-label">LINK1 :</label>
              <div class="controls">
                <input type="text" name="link" class="span11" value="{{downloadEdit($id)->link}}">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">LINK2 :</label>
              <div class="controls">
                <input type="text" name="link2" class="span11" value="{{downloadEdit($id)->link2}}">
              </div>
            </div>
           
          
             <div class="control-group">
              <label class="control-label">SUMX :</label>
              <div class="controls">
                <input type="text" name="md5sum" class="span5" placeholder="MD5SUM ADD" value="{{downloadEdit($id)->md5sum}}">
                <input type="text" name="sha1sum" class="span6" placeholder="SHA1SUM ADD" value="{{downloadEdit($id)->sha1sum}}">
              </div>
            </div>

         
            <div class="control-group">
              <label class="control-label">LANGUAGE :</label>
              <div class="controls">
                <select name="lang" id="" class="span11" required>
                  <option value="">Select Language</option>
                  @foreach (languageList() as $key):
                    <option value="{{$key->slug}}" {[selected($key->slug,downloadEdit($id)->lang)]}>{{$key->language}}</option>
                  @endforeach
                </select>
                
              </div>
            </div>



          
            <div class="form-actions">
              <input type="hidden" name="id" value="{{$id}}">
              <button type="submit" class="btn btn-success btn-block">UPDATE</button>
            </div>
          </form>
        </div>
      </div>



