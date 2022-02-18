	<h1>MENÜ YÖNETİM SAYFASI</h1>
	<a href="#newmenu" data-toggle="modal" ><button class="btn btn-primary">Yeni menü Adı Ekle</button></a> 
	<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"><button class="btn btn-success">icon list</button></a><br>
	<hr>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span6">
				<form method="post">

					<div class="control-group">
						<label class="control-label">Title :</label>
						<div class="controls">
							<input type="text" name="title" id="title" class="span11" required />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Menu Category :</label>
						<div class="controls">
							<select name="menuCatId" id="menuname" class="span11" required >
								
								<option>Seçiniz...</option>
								@foreach (menuCatList() as $key )
								<option value="{{$key->id}}" {{selected($key->id, $menulist )}}> {{$key->name}}</option>
								@endforeach
						
							</select>		
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Sub Menu :</label>
						<div class="controls">
							<select name="menuCatId" id="menuname" class="span11" required >
								
								<option>Seçiniz...</option>
								@foreach (menuListAdmin() as $key )
								<option value="{{$key->id}}"> {{$key->title}}</option>
								@endforeach
						
							</select>		
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Language :</label>
						<div class="controls">
							<select name="lang" id="menuname" class="span11" required >
								<option>Select...</option>
								@foreach (languageList() as $key )
								<option value="{{$key->slug}}"> {{$key->language}}</option>
								@endforeach
							</select>		
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">icon :</label>
						<div class="controls">
							<input type="text" name="icon" class="span11" placeholder="fa fas-icon" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Link :</label>
						<div class="controls">
							<div class="accordion span11" id="collapse-group">

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
											<label>
												<input type="radio" name="link" class="link" data-link="{{$key->baslik}}" value="/wiki/content/{{$key->id}}-{{$key->baslik_seo}}.html"> {{$key->baslik}} <br> 
											</label>		
											@endforeach
										</div>
									</div>
								</div>

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
											<label>
												<input type="radio" name="link" class="link" data-link="{{$key->title}}" value="/blog/content/{{$key->id}}-{{$key->title_seo}}.html"> {{$key->title}} <br> 
											</label>		
											@endforeach
										</div>
									</div>
								</div>

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
											<label>
												<input type="radio" name="link" class="link" data-link="{{$key->title}}" value="/page/{{$key->id}}-{{$key->title_seo}}.html" >{{$key->title}} <br> 
											</label>		
											@endforeach
										</div>
									</div>
								</div>
								
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
									
										<div class="span6">
										<div class="categoriesTitle">Blog Categories</div>
											@foreach (contentCategory() as $key )
												<label>
													<input type="radio" name="link" class="link" data-link="{{$key->name}}" value="/blog/cat/{{$key->id}}-{{$key->name_seo}}.html"  > {{$key->name}}
												</label>
											@endforeach
										</div>

										<div class="span6">									
										<div class="categoriesTitle">Wiki Categories</div>
											@foreach (wikiCategory() as $key )
												<label>
													<input type="radio" name="link" class="link" data-link="{{$key->adi}}" value="/wiki/category/{{$key->id}}-{{$key->adi_seo}}.html"  > {{$key->adi}}
												</label>
												@foreach (wikiCategory($key->id) as $key1 )
													<label>
														<input type="radio" name="link" class="link" data-link="{{$key->adi}}" value="/wiki/category/{{$key1->id}}-{{$key1->adi_seo}}.html"  > ---> {{$key1->adi}}
													</label>
												@endforeach
											@endforeach
										</div>

										</div>
										
									</div>
								</div>

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
											<input type="text" name="link1" class="span11" >
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="control-group">			
						<div class="controls">
							<input type="hidden" name="islem" value="2">
							<button style="submit" class="btn btn-success btn-block">KAYDET</button>
							
						</div>
					</div>

				</form>
			</div>

			<div class="span6">
				<form action="" method="post">
					
				<select name="menuCatId" id="menuname" class="span11" onchange="submit();">
					<option>Menüyü Seçiniz...</option>
					@foreach (menuCatList() as $key )
					<option value="{{$key->id}}" {{selected($key->id, $menulist )}}> {{$key->name}}</option>
					@endforeach
  				</select>	
				</form>
				<div class="widget-box">

					<div class="widget-title"> <span class="icon"> <i class="fa fa-th"></i> </span>
						<h5>Menüler - Seçilen Menü: {{menuCatName($menulist)}}</h5>
					</div>
					<div class="widget-content nopadding">
												
						
					
						<table class="table table-bordered table-striped data-table">
							<thead>
								<tr>
									<th>Menu Category Name</th>
									<th>icon</th>
									<th>Title</th>
									<th>Link</th>
									<th>Language</th>
									<th>İşlemler</th>
								</tr>
							</thead>
							<tbody>
								@foreach (menuList($menulist) as $key)
								<tr>
									<td>{{menuCatName($key->menuCatId)}}</td>
									<td class="center"><i class="{{$key->icon}}"></i> {{$key->icon}}</td>
									<td><a href="/panel/menu/edit/{{$key->id}}">{{$key->title}}</a></td>
									<td>{{$key->link}}</td>
									<td>{{$key->lang}}</td>
									<td class="center">
										<a href="/panel/menu/copy/{{$key->id}}"><button class="btn btn-success">Copy</button></a>
										<a href="/panel/menu/delete/{{$key->id}}" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
											<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
	</div>

	

	<hr>
	


	<!-- popup menuname -->
	<div id="newmenu" class="modal hide" aria-hidden="true" style="display: none;">
		<div class="modal-header">
			<button data-dismiss="modal" class="close" type="button">×</button>
			<h3>Menü Adı Ekle</h3>
		</div>

		<div class="modal-body">
			<form method="post">
				<div class="control-group">
					<label class="control-label">Menu Adı:</label>
					<div class="controls">
						<input type="text" class="span5" name="menuname" placeholder="Yeni menü adını yazın...">
						<input type="hidden" name="islem" value="1">
						<button type="submit" class="btn btn-success btn-block">Menü adını Kaydet</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- /popup menuname -->

