
<h2>FORUM NEW CATECORY</h2><hr>
	<div class="widget-box">
       <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
        	<h5>YENİ KATEGORİ </h5>
        </div>
     
        {{DB::error()}}
       	<div class="widget-content nopadding">
        	<form action="" method="post" class="form-horizontal">
	            <div class="control-group">
	              <label class="control-label">Üst Kategori :</label>
		              <div class="controls">
		              	
		               	<select name="kat_ustid" id="" class="span11">
		               		<option value="0">ANA KATEGORİ</option>
		               		@foreach (forum_kategori_panel() as $key )
		               			<option value="{{$key->id}}" >{{$key->adi}}</option>
		               		@endforeach
		               		 
		               	</select>
		              </div>
		            </div>
	            	<div class="control-group">
		              <label class="control-label">Kategori Adı:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="adi" value="">
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Açıklama:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="aciklama" value="">
		              </div>
		            </div>

            <div class="form-actions">
            	
              <button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
            </div>
	            </form>
        	</div>
        </div>
