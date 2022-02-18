

<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
    <h5>wiki ekleme formu</h5>
  </div>
  <div class="widget-content nopadding">
    <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="control-group">
        <label class="control-label">KATEGORİSİ :</label>
        <div class="controls">
       
           <select name="kategori" id="" class="span11">
                <option value=""><strong>Wiki kategorinisi seçiniz...</strong></option>
                @foreach (wikiCategory('30') as $key)
                  <option value="{{$key->id}}" {[ selected(wikiUpdateRow($id)->katid,$key->id) ]}>{{$key->adi}}</option>
                   @foreach (wikiCategory($key->id) as $key1)
                     <option value="{{$key1->id}}" {[ selected(wikiUpdateRow($id)->katid,$key->id) ]}>{{'-->'.$key1->adi}}</option>
                  @endforeach
                @endforeach               
              </select>  
        </div> 
      </div>
      <div class="control-group">
        <label class="control-label">BAŞLIK :</label>
        <div class="controls">
          <input type="text" name="baslik" class="span11" value="{{wikiUpdateRow($id)->baslik}}">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">YAZI :</label>
        <div class="controls">
          <textarea name="yazi" id="editor" rows="20">{[ echo wikiUpdateRow($id)->detay ]}</textarea>
           <script>
            CKEDITOR.replace('editor');
          </script>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">ETİKETLER :</label>
        <div class="controls">
          <input type="text" name="etiket" class="span11" value="{{wikiUpdateRow($id)->label}}" >
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">KISA AÇIKLAMA :</label>
        <div class="controls">
          <input type="text" name="keywords" class="span11" value="{{wikiUpdateRow($id)->keywords}}" >
        </div>
      </div>

         

            <div class="control-group">
              <label class="control-label">Language</label>
              <div class="controls">
                <select name="lang" class="span11">
                  <option value="">Selected...</option>
                  <option value="tr"{[ selected(wikiUpdateRow($id)->lang,'tr') ]}>Turkish</option>
                  <option value="en"{[ selected(wikiUpdateRow($id)->lang,'en') ]}>English</option>
                  <option value="de"{[ selected(wikiUpdateRow($id)->lang,'de') ]}>Germany</option>
                </select>
              </div>
            </div>


      <div class="form-actions">
         <input type="hidden" name="id" value="{{$id}}">
        <button type="submit" class="btn btn-primary btn-block">KAYDET</button>
      </div>
    </form>

    <a href="/panel/wiki/adminUpdateDelete/{{$id}}"><button class="btn btn-primary">Delete</button></a>
  </div>
</div>