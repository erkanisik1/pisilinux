<!-- bluebox theme  -->
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">İçerik Düzenle</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post">
            <div class="form-group">
              <label>Wiki Kategori</label>
              <select name="kategori" id="" class="form-control">
                <option value=""><strong>Yazının kategorinisi seçiniz...</strong></option>
                @foreach (wikiCategory('30') as $key)
                  <option value="{{ $key->id }}" {{ selected($key->id, wikiContentRowAdmin($id)->katid) }} >{{ $key->adi }}</option>
                    @foreach (wikiCategory($key->id) as $key1)
                     <option value="{{$key1->id}}" {[ selected(wikiContentRowAdmin($id)->katid,$key1->id) ]}>{{'-->'.$key1->adi}}</option>
                  @endforeach
                @endforeach

              </select>             
            </div> 

            <div class="form-group">
              <label>Baslık</label>

              <input class="form-control" name="baslik" value="{{ wikiContentRowAdmin($id)->baslik }}">
            </div>

            <div class="form-group">
              <label>Yazı</label>
              <textarea class="form-control" id="editor" name="yazi">{{ wikiContentRowAdmin($id)->detay }}</textarea>
             <script>
                      CKEDITOR.replace('editor', {
                        height: 500,
                        language: "{{LANG}}" ,
                      
                      });
                    </script>
            </div>

            <div class="form-group">
              <label>Etiketler</label>
              <input class="form-control" name="label" value="{{ wikiContentRowAdmin($id)->label }}">
            </div>

            <div class="form-group">
              <label>Kısa Açıklama</label>
              <input class="form-control" name="keywords" value="{{ wikiContentRowAdmin($id)->keywords }}">
            </div>

             <div class="form-group">
              <label>{[ echo lang('wiki','choose_language') ]}</label>
             <select name="lang" id="" class="form-control" required>
                  <option value="">{[ echo lang('wiki','please_select_language') ]}</option>
                 @foreach (languageList() as $key)
                    <option value="{{ $key->slug }}" {{ selected($key->slug, wikiContentRowAdmin($id)->lang) }}>{{ $key->language }}</option>
                 @endforeach
                </select>
            </div>
            <input type="hidden" name="id" value="{{$id}}">	     
            <button type="submit" class="btn btn-primary btn-block">KAYDET</button>

          </form>
        </div>
      </div>
    </div>
  </div>