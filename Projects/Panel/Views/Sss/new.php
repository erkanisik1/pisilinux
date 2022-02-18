<?php IMPORT::view('header'); ?>

	<div class="widget-box">
       <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
        	<h5>YENİ SSS EKLE</h5>
        </div>
        
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal">
	        
	            	<div class="control-group">
		              <label class="control-label">Soru:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="question" >
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Cevap:</label>
		              <div class="controls">
		               <textarea name="answer" id="editor" rows="20" class="span11"></textarea>
		              </div>
		            </div>

            <div class="form-actions">
            	<input type="hidden" name="status" value="1">
              <button type="submit" class="btn btn-success btn-block">Kaydet</button>
            </div>
	            </form>
        	</div>
        </div>
<?php Import::view('footer'); ?>