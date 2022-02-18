
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Slider Düzenleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">

           <div class="control-group">
              <label class="control-label">RESİM :</label>
              <div class="controls">
                <div >
                  <img src="{{URL::base($edit->resim)}}" width="200">
                </div>
                <input type="file" name="resim" class="span11">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">BAŞLIK :</label>
              <div class="controls">
                <input type="text" name="baslik" class="span11" value="{{$edit->baslik}}">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">AÇIKLAMA :</label>
              <div class="controls">
                 <textarea name="aciklama" id="area2" rows="20" class="span11">{{$edit->aciklama}}</textarea>
               
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">LİNK :</label>
              <div class="controls">
                <input type="text" name="link" class="span11" value="{[ echo $edit->link; ]}" >
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">YAYINLAMA DURUMU :</label>
              <div class="controls">
                <select name="status" id="" class="span11">
                  <option value="0"{[selected($edit->durum,'0')]}>Yayınlama</option>
                  <option value="1" {[selected($edit->durum,'1')]}>Yayınla</option>
                </select>
               
              </div>
            </div>

            <div class="form-actions">
              <input type="hidden" name="id" value="{[ echo $edit->id ]}">
              <input type="hidden" name="resimurl" value="{[ echo $edit->resim ]}">
              <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
          </form></div></div>
