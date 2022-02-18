

<div class="col-lg-12">
    <div class="panel panel-primary">
    	<div class="panel-heading">
    		{[ echo messageRow($id)->title ]}
    	</div>
        
        <div class="panel-body">           
          {[ echo messageRow($id)->message; ]}
        </div>
        
        <div class="panel-footer"><a href="/members/messages">
        	<button>{[ echo lang('message','back') ]}</button></a>
        </div>
    </div>
</div>

