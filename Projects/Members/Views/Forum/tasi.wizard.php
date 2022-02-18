
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Forum Taşı </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label>Taşınacak kategori</label>
                        <select name="category_id" class="form-control" required>
                          <option value="">{{lang('forum','Please_select_category')}}</option>
                          @foreach (question_category() as $key)
                            <optgroup label="{{$key->adi}}">
                              @foreach (question_category($key->id) as $key1)                        
                                <option value="{{$key1->id}}" {{selected($key1->id,$catid)}}>{{$key1->adi}}</option>
                              @endforeach
                            </optgroup>
                          @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>{{lang('forum','title')}}</label><br>
                        {{forum_content_row($id)->title}}
                    </div>



                      <div class="form-group">
                        <label>Konu</label><br>
                            {{decode(forum_content_row($id)->content)}}
                       
                  
            </div>
                    </div>

                    <input type="hidden" name="id" value="{{$id}}">
                    <button type="submit" class="btn btn-primary btn-block"> {{lang('forum','save')}}</button>
                </form>
