<div class="widget-box">
	<div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
		<h5>UPDATE CATEGORY</h5>
	</div>

	<div class="widget-content nopadding">
		<form action="" method="post" class="form-horizontal">
			
			<div class="control-group">
				<label class="control-label">CATEGORY :</label>
				<div class="controls">
					<select name="ustkategori" id="" class="span11">
						<option value="0">MAIN CATEGORY</option>
						@foreach (content_category() as $key )
						<option value="{{$key->id}}">{{$key->name.' - '.$key->lang}}</option>
						@endforeach

					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">NAME:</label>
				<div class="controls">
					<input type="text" class="span11" name="kategori" value="{[ echo contentCategoryRow($id)->name ]}">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">DESCRIPTION:</label>
				<div class="controls">
					<input type="text" class="span11" name="aciklama" value="{[ echo contentCategoryRow($id)->description; ]}">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">LANGUAGE :</label>
				<div class="controls">
					<select name="lang" id="" class="span11" required>
						<option value="">Select Language</option>
						@foreach (languageList() as $key):
						<option value="{{$key->slug}}" {[ selected($key->slug, contentCategoryRow($id)->lang)]}>{{$key->language}}</option>
						@endforeach
					</select>

				</div>
			</div>

			<div class="form-actions">
				<input type="hidden" name="id" value="{{$id}} ">

				<button type="submit" class="btn btn-success btn-block">SAVE</button>
			</div>
		</form>
	</div>
</div>