
  <div class="panel panel-default">
    <div class="panel-heading">{[ echo lang('wiki','add_content') ]}</div>
    <div class="panel-body">
      {{DB::error()}}
<form action="" method="post">
            <div class="form-group">
              <label>{[ echo lang('wiki','wiki_category') ]}</label>
              <select name="category" id="" class="form-control" required>
                <option value=""><strong>{[ echo lang('wiki','select_article_category') ]}...</strong></option>
                @foreach (wikiCategory('30') as $key)
                  <option value="{[ echo $key->id ]}" class="opt">{[ echo '-»'.$key->adi ]}</option>
                   @foreach (wikiCategory($key->id) as $key1)
                     <option value="{[ echo $key1->id ]}">{[ echo '--»'.$key1->adi ]}</option>
                 @endforeach
                @endforeach 
               
              </select>             
            </div>

            <div class="form-group">
              <label>{[ echo lang('wiki','title') ]}</label>
              <input class="form-control" name="title" placeholder="{[ echo lang('wiki','title_placeholder') ]}."  required>
            </div>

            <div class="form-group">
                <label>{{lang('wiki','article')}}</label>
                <textarea class="form-control" id="editor" name="content" rows="20"></textarea>
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
              <label>{[ echo lang('wiki','labels') ]}</label>
              <input class="form-control" name="label" placeholder="{[ echo lang('wiki','label_placeholder') ]}" required>
            </div>

            <div class="form-group">
              <label>{[ echo lang('wiki','description') ]}</label>
              <input class="form-control" name="keywords" placeholder="{[ echo lang('wiki','description_placeholder') ]}" >
            </div>

             <div class="form-group">
              <label>{[ echo lang('wiki','choose_language') ]}</label>
             <select name="lang" id="" class="form-control" required>
                  <option value="">{[ echo lang('wiki','please_select_language') ]}</option>
                 @foreach (languageList() as $key)
                    <option value="{[ echo $key->slug ]}">{[ echo $key->language ]}</option>
                 @endforeach
                </select>
            </div>
                    
              <button type="submit" class="btn btn-primary btn-block">{[ echo lang('wiki','save') ]}</button>
              
            </form>
      
</div>
</div>