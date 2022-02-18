<div class="widget-box">
	<div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
		<h5>Edit</h5>
	</div>

	<div class="widget-content nopadding">
		{{DB::error()}}
		<form action="" method="post" class="form-horizontal">
			
			<div class="control-group">
				<label class="control-label">Task Type :</label>
				<div class="controls">
					<select name="tasktype" id="" class="span11">
						
						@foreach (taskType() as $key )
						<option value="{{$key->id}}" {{selected($key->id, bugsRow($id)->tasktype)}}>{{$key->tasktype}}</option>
						@endforeach

					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Title:</label>
				<div class="controls">
					<input type="text" class="span11" name="title" value="{{bugsRow($id)->title}}">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">System:</label>
				<div class="controls">
					<textarea name="system" class="span11" id="editor1" cols="30" rows="10">{{bugsRow($id)->system}}</textarea>
					 <script>
            CKEDITOR.replace('editor1', {
               customConfig: 'admin_config.js',
              height: 300,
             
            });
          </script>
					
				</div>

			<div class="control-group">
				<label class="control-label">Details:</label>
				<div class="controls">
					<textarea name="details" class="span11" id="editor" cols="30" rows="10">{{bugsRow($id)->details}}</textarea>
					 <script>
            CKEDITOR.replace('editor', {
               customConfig: 'admin_config.js',
              height: 300,
             
            });
          </script>
					
				</div>
			</div>
		}
	<div class="control-group">
				<label class="control-label">Status :</label>
				<div class="controls">
					<select name="status" id="" class="span11">
						<option value="1" {{selected(1, bugsRow($id)->status)}}>Active</option>
						<option value="0" {{selected(0, bugsRow($id)->status)}}>Pasive</option>
						
					</select>
				</div>
			</div>
			

			<div class="form-actions">
				<input type="hidden" name="id" value="{{$id}} ">

				<button type="submit" class="btn btn-success btn-block">Update</button>
			</div>
		</form>
	</div>
</div>