<script src="ckeditor/ckeditor.js"></script>
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Yeni İçerik Ekleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">

            <div class="control-group">
              <label class="control-label">TITLE :</label>
              <div class="controls">
                <input type="text" name="title" class="span11" value="{{content_edit($id)->title}}">
              </div>
            </div>

                 <div class="control-group">
              <label class="control-label">Yazar Seç :</label>
              <div class="controls">

                <select name="editor" class="span11" required>
                  <option value="">Select Author</option>

                  @foreach (userList() as $key)
                    <option value="{{$key->user_id}}" {[selected(content_edit($id)->editor, $key->user_id )]} >{{$key->username}}</option>
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
                  <option value="{{$key->id}}" {{selected($key->id,content_edit($id)->category_id)}} >{{$key->name}}</option>
              @endforeach
          </select>
        </div>
      </div>
            
             <div class="control-group">
              <label class="control-label">CONTENT :</label>
              <div class="controls">
                <textarea name="content" id="editor" rows="20" class="span11">{{content_edit($id)->content}}</textarea>
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
              <label class="control-label">LABELS :</label>
              <div class="controls">
                <input type="text" name="label" class="span11" value="{{content_edit($id)->label}}">
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">SHORT DESCRIPTION :</label>
              <div class="controls">
                <input type="text" name="keywords" class="span11" value="{{content_edit($id)->keywords}}">
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">STATUS :</label>
              <div class="controls">
                <select name="status" id="" class="span11">
                	
                	<option value="1" {[ selected(content_edit($id)->status,'1');]}>ACTIVE</option>
                	<option value="0" {[ selected(content_edit($id)->status,'0');]}>PASSIVE</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">POSTED ON THE HOMEPAGE? :</label>
              <div class="controls">
                <select name="mainpage" id="" class="span11">
                	
                	<option value="1" {[ selected(content_edit($id)->mainpage,'1');]}>YES</option>
                	<option value="0" {[ selected(content_edit($id)->mainpage,'0');]}>NO</option>
                </select>
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Language :</label>
              <div class="controls">
                <select name="lang" id="" class="span11" required>
                  <option value="">Select Language</option>
                  @foreach (languageList() as $key):
                    <option value="{{$key->slug}}" {[ selected($key->slug, content_edit($id)->lang)]}>{{$key->language}}</option>
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