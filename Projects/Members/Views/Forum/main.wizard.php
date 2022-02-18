
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            {[ echo lang('form', 'my_messages') ]} ( {[ echo count($messages); ]} )
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="20">ID</th>            
                            <th>{[ echo lang('forum', 'title') ]}</th>
                            <th>Category</th>
                            <td>{[ echo lang('form', 'solved') ]}</td>
                            <th width="200">{[ echo lang('form', 'transactions') ]}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $key )
                            <tr>
                                <td>{[ echo $key->id; ]}</td>
                                <td>{[ echo $key->title; ]}</td>
                                <td></td>
                                <td>{[ echo $key->dissolved; ]}</td>

                                <td>
                                    <a href="/members/forum/edit/{[ echo $key->id; ]}">
                                        <button class="btn btn-success">{[ echo lang('form', 'edit') ]}</button>
                                    </a>     
                                    <a href="#" class="dissolved" data-id='{[ echo $key->id; ]}' >
                                        <button class="btn btn-primary">{[ echo lang('form', 'solved') ]}</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            {[ echo lang('form', 'The_topics_I_answered') ]} ( {[ echo count($mymessages); ]} )
        </div>
        <div class="panel-body">
             <table class="table">
                    <thead>
                        <tr>
                            <th width="20">ID</th>            
                            <th>{[ echo lang('form', 'title') ]}</th>
                            <th width="150">{[ echo lang('form', 'transactions') ]}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mymessages as $key )
                            <tr>
                                <td>{[ echo $key->id; ]}</td>
                                <td>{[ echo $key->title; ]}</td>
                                <td>


                                     <a href="/members/forum/message_edit/{[ echo $key->id; ]}">
                                        <button class="btn btn-success">{[ echo lang('form', 'edit') ]}</button>
                                    </a>     
                                    <a href="#" class="dissolved" data-id='{[ echo $key->id; ]}' >
                                        <button class="btn btn-primary">{[ echo lang('form', 'delete') ]}</button>
                                    </a>
                                    
                                    </td>
                            </tr>
                        @endforeach
                                       </tbody>
                </table>
        </div>
    </div>
</div>
