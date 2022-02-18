<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
          <h5>Yeni İçerik Ekleme Formu</h5>
        </div>
        <div class="widget-content nopadding">
     
       
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
			
			<div class="control-group">
              <label class="control-label">KATEGORİSİ :</label>
              <div class="controls">
              <select name="category_id" id="" class="span11">

        <option value="">Yazının kategorinisi seçiniz...</option>

                  {[ echo KategoriListesi(0,0,0,content_edit($id)->category_id); ]}
                  </select>
              </div>
            </div>
            
          

             <div class="control-group">
              <label class="control-label">BAŞLIK :</label>
              <div class="controls">
                <input type="text" name="title" class="span11" value="{[ echo content_edit($id)->title ]}">
              </div>
            </div>


            
             <div class="control-group">
              <label class="control-label">YAZI :</label>
              <div class="controls">

                <textarea name="content" id="editor" rows="20" class="span11">{[ echo content_edit($id)->content ]}</textarea>
               
              </div>
            </div>

             

            <div class="control-group">
              <label class="control-label">ETİKETLER :</label>
              <div class="controls">
                <input type="text" name="label" class="span11" placeholder="Etiketleri aralarına virgül koyarak ekleyin..." value="{[ echo content_edit($id)->label ]}">
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">KISA AÇIKLAMA :</label>
              <div class="controls">
                <input type="text" name="keywords" class="span11" placeholder="Yazı hakkında kısa bir açıklama yazın..." value="{[ echo content_edit($id)->keywords ]}">
              </div>
            </div>

              <div class="form-group">
              <label>{[ echo lang('wiki','choose_language') ]}</label>
             <select name="lang" id="" class="form-control" required>
                  <option value="">{[ echo lang('wiki','please_select_language') ]}</option>
                 @foreach (languageList() as $key)
                    <option value="{{ $key->slug }}" {{ selected($key->slug, $content->lang) }}>{{ $key->language }}</option>
                 @endforeach
                </select>
            </div>


          
            <div class="form-actions">
              <input type="hidden" name="id" value="{[ echo $id; ]}">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>