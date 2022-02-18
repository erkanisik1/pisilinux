
<script src="ckeditor/ckeditor.js"></script>

<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>New Content Form</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
      
      <div class="control-group">
        <label class="control-label">TITLE :</label>
        <div class="controls">
          <input type="text" name="title" class="span11" required>
        </div>
      </div>


      <div class="control-group">
              <label class="control-label">Yazar Seç :</label>
              <div class="controls">

                <select name="editor" class="span11" required>
                  <option value="">Select Author</option>
                  @foreach (userList() as $key)
                    <option value="{{$key->user_id}}" {[selected($userid, $key->user_id )]}>{{$key->username}}</option>
                  @endforeach
                </select>
                
              </div>
            </div>


      <div class="control-group">
        <label class="control-label">CATEGORY :</label>
        <div class="controls">
          <select name="category" id="" class="span11">
            <option value="">Category Select...</option>
              @foreach (content_category() as $key)
                  <option value="{{$key->id}}">{{$key->name}}</option>
              @endforeach
          </select>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label">CONTENT :</label>
        <div class="controls">
          <textarea name="content" id="editor" rows="20" class="span11"></textarea>
          <script>
            CKEDITOR.replace('editor', {
              height: 1000,
              filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
              filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
              filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
            });
          </script>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">LABELS :</label>
        <div class="controls">
          <input type="text" name="label" class="span11" placeholder="Add tags with commas between them..." required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">SHORT DESCRIPTION :</label>
        <div class="controls">
          <input type="text" name="keywords" class="span11" placeholder="Write a short description about the article..." required>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">STATUS :</label>
        <div class="controls">
          <select name="status" id="" class="span11">
            <option value="">SELECT...</option>
            <option value="1" selected>ACTİVE</option>
            <option value="0">PASSIVE</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">POSTED ON THE HOMEPAGE? :</label>
        <div class="controls">
          <select name="mainpage" id="" class="span11">
            <option value="1" selected>YES</option>
            <option value="0">NO</option>
          </select>
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
        <button type="submit" class="btn btn-success btn-block">SAVE</button>
      </div>
    </form>
  </div>
</div>
