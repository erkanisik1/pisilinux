
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
                  <option value="{{$key->id}}" {[ selected(wikiContentRowAdmin($id)->katid,$key->id) ]} >{{$key->adi}}</option>
                   @foreach (wikiCategory($key->id) as $key1)
                     <option value="{{$key1->id}}" {[ selected(wikiContentRowAdmin($id)->katid,$key1->id) ]}>{{'-->'.$key1->adi}}</option>
                  @endforeach
                @endforeach               
              </select>  
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Yazıldığı Tarih :</label>
        <div class="controls">
          <input type="text" name="zaman" class="span11" value="{{tcevir(wikiContentRowAdmin($id)->zaman,'1')}}" disabled>
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label">BAŞLIK :</label>
        <div class="controls">
          <input type="text" name="baslik" class="span11" value="{{wikiContentRowAdmin($id)->baslik}}">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">YAZI :</label>
        <div class="controls">
          <textarea name="yazi" id="editor1" rows="100">{[ echo wikiContentRowAdmin($id)->detay ]}</textarea>
             <script>
            CKEDITOR.replace('editor1', {
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
        <label class="control-label">ETİKETLER :</label>
        <div class="controls">
          <input type="text" name="etiket" class="span11" value="{{wikiContentRowAdmin($id)->label}}" >
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">KISA AÇIKLAMA :</label>
        <div class="controls">
          <input type="text" name="keywords" class="span11" value="{{wikiContentRowAdmin($id)->keywords}}" >
        </div>
      </div>

          <div class="control-group">
              <label class="control-label">Durumu</label>
              <div class="controls">
                
                <select name="durum" class="span11">
                  <option value="1" {[ selected(wikiContentRowAdmin($id)->durum,'1') ]}>Aktif</option>
                  <option value="0" {[ selected(wikiContentRowAdmin($id)->durum,'0') ]}>Pasif</option>
                  <option value="3" {[ selected(wikiContentRowAdmin($id)->durum,'3') ]}>Onay Bekliyor</option>
                </select>
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Deleted</label>
              <div class="controls">
                <select name="deleted" class="span11">
                  <option value="1" {[ selected(wikiContentRowAdmin($id)->deleted,'1') ]}>Deleted</option>
                  <option value="0" {[ selected(wikiContentRowAdmin($id)->deleted,'0') ]}>No Deleted</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Language</label>
              <div class="controls">
               <select name="lang" id="" class="span11">
                   <option value="">{[ echo lang('wiki','please_select_language') ]}</option>
                   @foreach (languageList() as $key)
                    <option value="{{$key->slug}}" {{selected(wikiContentRowAdmin($id)->lang,$key->slug)}}>{{$key->language}}</option>
                   @endforeach
                </select>
            </div>
          </div>
    }
<!-- 
            <div class="control-group">
              <label class="control-label">Language</label>
              <div class="controls">
                <select name="lang" class="span11">
                  <option value="">Selected...</option>
                  <option value="tr"{[ selected(wikiContentRowAdmin($id)->lang,'tr') ]}>Turkish</option>
                  <option value="en"{[ selected(wikiContentRowAdmin($id)->lang,'en') ]}>English</option>
                  <option value="de"{[ selected(wikiContentRowAdmin($id)->lang,'de') ]}>Germany</option>
                </select>
              </div>
            </div>
 -->


      <div class="form-actions">
         <input type="hidden" name="id" value="{{$id}}">
        <button type="submit" class="btn btn-primary btn-block">KAYDET</button>
      </div>
    </form>

    <a href="/panel/wiki/adminDelete/{{$id}}"><button class="btn btn-primary">Delete</button></a>
  </div>
</div>