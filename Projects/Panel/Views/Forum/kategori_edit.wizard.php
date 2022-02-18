
<h2>KATEGORİ DÜZENLE</h2><hr>
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
		               			<option value="{{$key->id}}" {[selected(forum_kategori_row($id)->kat_ustid,$key->id)]}>{{$key->adi}}</option>
		               		@endforeach
		               		 
		               	</select>
		              </div>
		            </div>
	            	<div class="control-group">
		              <label class="control-label">Kategori Adı:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="adi" value="{{forum_kategori_row($id)->adi}}">
		              </div>
		            </div>

		            <div class="control-group">
		              <label class="control-label">Açıklama:</label>
		              <div class="controls">
		                <input type="text" class="span11" name="aciklama" value="{{forum_kategori_row($id)->aciklama}}">
		              </div>
		            </div>

		             <div class="control-group">
		              <label class="control-label">Durumu:</label>
		              <div class="controls">
		                <select name="status" class="span11">
		                	<option value="1" {{selected(forum_kategori_row($id)->status,1)}}>Aktif</option>
		                	<option value="0" {{selected(forum_kategori_row($id)->status,0)}}>Pasif</option>
		                </select>
		              </div>
		            </div>

            <div class="form-actions">
            	<input type="hidden" name="id" value="{{$id}} ">
              <button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
            </div>
	            </form>
        	</div>
        </div>
