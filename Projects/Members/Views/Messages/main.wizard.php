
<style>
    .thead-dark{
        background:#000;
        color:#fff;
    }
</style>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">{{ lang('message','messages') }}</div>
        <div class="panel-body">
            <div class="">
                <table class="table table-responsive table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th width="20">ID</th>  
                            <th width="150">{{ lang('message','createDate') }}</th>          
                            <th>{{ lang('message','title') }}</th>
                            <th width="100">{{ lang('message','status') }}</th>
                            <th width="50">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                      @foreach (messageList(USERID) as $key )
                      <tr>
                        <td>{{ $key->id }}</td>
                        <td>{{ tcevir($key->createDate,1) }}</td>
                        <td> <a href="/members/messages/content/{{ $key->id }}"> {{ $key->title }}</a></td>
                        <td>{{ messageStatus($key->status) }}</td>
                        <th><a href="/members/messages/delete/{{$key->id}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-remove"></i></button></a></th>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
</div>

