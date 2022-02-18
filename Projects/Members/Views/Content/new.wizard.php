

<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">{{lang('content','add_content')}}</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
          <form role="form" method="post">
            <h4><span class="label label-danger">{[ echo lang('content','Fields_marked_with_*_cannot_be_empty') ]}...</span></h4>
            <div class="form-group">
              <label>*{{lang('content','category')}}</label>
               <select name="category_id" id="" class="form-control" required>
                  <option value="">{{lang('content','select_article_category')}}...</option>
                  {{ KategoriListesi() }}
                </select>                     
              </div>
              <div class="form-group">
                <label>*{{lang('content','title')}}</label>
                <input type="text" name="title" class="form-control" required>            
              </div>

              <div class="form-group">
                <label>*{{lang('content','content')}}</label>
                <textarea name="content" id="editor" rows="20" class="form-control" required></textarea> 
                <script>
                  CKEDITOR.replace('editor', {                       
                    language: "{{LANG}}" ,
                    extraPlugins: 'codesnippet',
                    filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
                    filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
                    filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
                  });
                </script>                
              </div>

               <div class="form-group">
                <label>*{{lang('content','labels')}}</label>
                <input type="text" name="label" class="form-control" placeholder="{[ echo lang('content','label_placeholder') ]}..." required>            
              </div>

               <div class="form-group">
                <label>*{{lang('content','description')}}</label>
                <input type="text" name="description" class="form-control" required placeholder="{[ echo lang('content','description_placeholder') ]}...">            
              </div>

     <div class="form-group">
              <label>{{lang('wiki','choose_language')}}</label>
             <select name="lang" id="" class="form-control" required>
                  <option value="">{{lang('wiki','please_select_language')}}</option>
                 @foreach (languageList() as $key)
                    <option value="{[ echo $key->slug ]}">{{$key->language}}</option>
                 @endforeach
                </select>
            </div>


              <button type="submit" class="btn btn-primary btn-block">{{lang('content','save')}}</button><br>
              <h4><span class="label label-danger">{{lang('content','note')}}</span></h4>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>