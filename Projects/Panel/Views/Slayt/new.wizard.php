{[ import::view('header'); ]}
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Yeni Slider Ekleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">

           <div class="control-group">
              <label class="control-label">RESİM :</label>
              <div class="controls">
                <input type="file" name="resim" class="span11">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">BAŞLIK :</label>
              <div class="controls">
                <input type="text" name="baslik" class="span11">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">AÇIKLAMA :</label>
              <div class="controls">
                 <textarea name="aciklama" id="area2" rows="20" class="span11"></textarea>
                <script>
            CKEDITOR.replace( 'aciklamma' );
        </script>
              </div>
            </div>
  <div class="control-group">
              <label class="control-label">LİNK :</label>
              <div class="controls">
                <input type="text" name="link" class="span11" >
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form></div></div>
{[ import::view('footer'); ]}