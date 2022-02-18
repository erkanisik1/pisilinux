<script src="ckeditor/ckeditor.js"></script>
	<div class="widget-box">
       <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
        	<h5>YENİ SSS Düzenleme</h5>
        </div>
        
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal">
	        
	            	<div class="control-group">
		              <label class="control-label">Soru:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="question" value="{[ echo $edit->question; ]}" >
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Cevap:</label>
		              <div class="controls">
		               <textarea name="answer" id="editor" rows="20" class="span11">{[ echo $edit->answer; ]}</textarea>
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

            <div class="form-actions">
            	<input type="hidden" name="id" value="{[ echo $edit->id; ]}">
            	<input type="hidden" name="status" value="1">
              <button type="submit" class="btn btn-success btn-block">Kaydet</button>
            </div>
	            </form>
        	</div>
        </div>
