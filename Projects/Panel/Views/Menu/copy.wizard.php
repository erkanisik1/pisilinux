
<div class="widget-box">
	<div class="widget-title"> <span class="icon"> <i class="fa fa-align-justify"></i> </span>
		<h5>Menü Update</h5>
	</div>

		<div class="widget-content nopadding">
		<form action="" method="post" class="form-horizontal">
			
			<!-- Title -->
			<div class="control-group">
				<label class="control-label">Title :</label>
				<div class="controls">
					<input type="text" name="title" id="title"  value="{{menuRow($id)->title}}" class="span11" />
				</div>
			</div>

			<!-- Menu Category -->
			<div class="control-group">
				<label class="control-label">Menu Category :</label>
				<div class="controls">
					<select name="menuCatId" id="menuname" class="span11"  >
						<option>Seçiniz...</option>
						@foreach (menuCatList() as $key )
						<option value="{{$key->id}}" {{selected(menuRow($id)->menuCatId, $key->id)}}> {{$key->name}}</option>
						@endforeach
					</select>		
				</div>
			</div>

			<!-- Language -->
			<div class="control-group">
				<label class="control-label">Language :</label>
				<div class="controls">
					<select name="lang" id="menuname" class="span11"  >
						<option>Select...</option>
						@foreach (languageList() as $key )
						<option value="{{$key->slug}}" {{selected(menuRow($id)->lang, $key->slug)}}> {{$key->language}}</option>
						@endforeach
					</select>		
				</div>
			</div>

			<!-- Icon -->
			<div class="control-group">
				<label class="control-label">icon :</label>
				<div class="controls">
					<input type="text" name="icon" class="span11" value="{{menuRow($id)->icon}}" placeholder="fa fas-icon" />
				</div>
			</div>

			<!-- Link -->
			<div class="control-group">
				<label class="control-label">Link :</label>
				<div class="controls">
					<div class="accordion span11" id="collapse-group">
						<!-- Wiki Content List -->
						<div class="accordion-group widget-box">
							<div class="accordion-heading">
								<div class="widget-title"> 
									<a data-parent="#collapse-group" href="#wikicontent" data-toggle="collapse"> 
										<span class="icon"><i class="fa fa-check"></i></span>
										<h5>Select Wiki Content</h5>
									</a> 
								</div>
							</div>
				
							<div class="collapse accordion-body" id="wikicontent">
								<div class="widget-content"> 
									@foreach (wikicontentAdmin() as $key )
										{[ $link = '/wiki/content/'.$key->id.'-'.$key->baslik_seo.'.html';]}
										 <label>
											<input type="radio" name="link" class="link" data-link="{{$key->baslik}}" value="{{$link}}" {{checked(menuRow($id)->link, $link )}}> {{$key->baslik}} <br> 
										</label>		
									@endforeach
								</div>
							</div>
						</div>

						<!-- Content List -->
						<div class="accordion-group widget-box">
							<div class="accordion-heading">
								<div class="widget-title"> 
									<a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> 
										<span class="icon"><i class="fa fa-check"></i></span>
										<h5>Select Content</h5>
									</a> 
								</div>
							</div>
							<div class="collapse accordion-body" id="collapseGOne">
								<div class="widget-content"> 
									@foreach (content_list() as $key )
										{[ $link = '/blog/content/'.$key->id.'-'.$key->title_seo.'.html';]}
										<label>
											<input type="radio" name="link" class="link" data-link="{{$key->title}}" value="{{$link}}" {{checked(menuRow($id)->link, $link )}}>  {{$key->title}} <br> 
										</label>		
									@endforeach
								</div>
							</div>
						</div>

						<!-- Page List -->
						<div class="accordion-group widget-box">
							<div class="accordion-heading">
								<div class="widget-title"> 
									<a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> 
										<span class="icon"><i class="fa fa-check"></i></span>
										<h5>Select Page</h5>
									</a> 
								</div>
							</div>
							<div class="collapse accordion-body" id="collapseGTwo">
								<div class="widget-content"> 
									@foreach (pageList() as $key )
									{[ $link = '/page/'.$key->id.'-'.$key->title_seo.'.html';]}
										<label>
											<input type="radio" name="link" class="link" data-link="{{$key->title}}" value="/page/{{$key->id}}-{{$key->title_seo}}.html" {{checked(menuRow($id)->link, $link )}} > {{$key->title}} <br> 
										</label>		
									@endforeach
								</div>
							</div>
						</div>
								
						<!-- Category List -->
						<div class="accordion-group widget-box">
							<div class="accordion-heading">
								<div class="widget-title"> 
									<a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse"> 
										<span class="icon"><i class="fa fa-check"></i></span>
										<h5>Categories</h5>
									</a> 
								</div>
							</div>
							<div class="collapse accordion-body" id="collapseGThree">
								<div class="widget-content"> 
									@foreach (contentCategory() as $key )
									{[ $link = '/blog/cat/'.$key->id.'-'.$key->name_seo.'.html';]}
										<label>
											<input type="radio" name="link" class="link" data-link="{{$key->name}}" value="{{$link}} {{checked(menuRow($id)->link, $link )}}"  > {{$key->name}}
										</label>
									@endforeach
								</div>
							</div>
						</div>

						<!-- Another Link-->
						<div class="accordion-group widget-box">
							<div class="accordion-heading">
								<div class="widget-title"> 
									<a data-parent="#collapse-group" href="#collapseGFour" data-toggle="collapse"> 
										<span class="icon"><i class="fa fa-check"></i></span>
										<h5>Another Link</h5>
									</a> 
								</div>
							</div>
							<div class="collapse in accordion-body" id="collapseGFour">
								<div class="widget-content"> 
									<input type="text" name="link1" class="span11"  value="{{menuRow($id)->link}}">
								</div>
							</div>
						</div>

					

					</div>
				</div>
			</div>
			
			<div class="control-group">			
				<div class="controls">
					<input type="hidden" name="id" value="{{$id}}">
					<input type="submit" name="" value="Güncelle" class="span11">
				</div>
			</div>
		</form>
	</div>
</div>