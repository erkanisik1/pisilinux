<script src="ckeditor/ckeditor.js"></script> 
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Forum Edit</div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label>{[ echo lang('forum','title') ]}</label>
                        <input type="text" name="title" class="form-control" value="{{forum_content_row($id)->title}}">
                    </div>

                      <div class="form-group">
                        <label>{[ echo lang('forum','messages') ]}</label>
                        <textarea name="content" class="form-control" id="editor" rows="10">
                            {[ decode(forum_content_row($id)->content); ]}
                        </textarea>
                        <script>
                      CKEDITOR.replace('editor', {
                        height: 1000,
                        language: "{{LANG}}" ,
                        extraPlugins: 'codesnippet, youtube',
                      
                      });
                    </script>
            </div>
                    </div>

                    <input type="hidden" name="id" value="{[ echo $id ]}">
                    <input type="hidden" name="content_id" value="{[ echo $id; ]}">
                    <input type="hidden" name="link" value="{[ echo URL::base('forum/konu/') . $id1 . '-' . seo(forum_content_row($id)->title); ]}">
                    <button type="submit" class="btn btn-primary btn-block"> {[ echo lang('forum','save') ]}</button>
                </form>










            </div>
        </div>
    </div>
</div>