
<script src="ckeditor/ckeditor.js"></script>

<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>New Content Form</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="#" method="post" class="form-horizontal">
<div class="control-group">
        <label class="control-label">Kullanıcı :</label>
        <div class="controls">
          <input type="text" name="title" class="span11" value="{{username($userid)}}" >
        </div>
      </div>
      
       <div class="control-group">
        <label class="control-label">CONTENT :</label>
        <div class="controls">
          <textarea name="message" id="editor" rows="20" class="span11"></textarea>
          <script>
            CKEDITOR.replace('editor', {
              customConfig: 'admin_config.js',
              height: 200,
              width: 1000,
              filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
              filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
              filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
            });
          </script>
        </div>
      </div>

 {{DB::error()}}


      <div class="form-actions">
        <input type="hidden" name="userid" value="{{$userid}}">
        <button type="submit" class="btn btn-success btn-block">Gönder</button>
      </div>
    </form>
  </div>
</div>
