<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Kategori ekleme formu</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Kategori :</label>
              <div class="controls">
                <select name="ustkategori" id="" class="span11">

                <option value="30"><strong>Ana Kategori...</strong></option>
                @foreach (wikiCategory() as $key)
                  <option value="{{$key->id}}">{{$key->adi}}</option>
                  @foreach (wikiCategory($key->id) as $key1)
                     <option value="{{$key1->id}}">{{'-»'.$key1->adi}}</option>
                  @endforeach
                @endforeach
               
              </select>      
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kategori Adı :</label>
              <div class="controls">
                <input type="text" class="span11" name="kategori" >
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Kategori Açıklama :</label>
              <div class="controls">
                <input type="text" class="span11" name="aciklama" >
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Kategori resim :</label>
              <div class="controls">
                <input type="file" class="span11" name="resim" >
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
              <button type="submit" class="btn btn-success btn-block">Kategoriyi Kaydet</button>
            </div>
          </form>
        </div>
      </div>
