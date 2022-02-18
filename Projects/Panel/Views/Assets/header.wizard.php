<style>
	h3,a{
		
		color: #fff  !important;
	}
</style>
@if(USERID)
<div id="header">
	<h3>
		<a href=""> {{settings('title')}}</a>
	</h3>
</div>
@view('Assets/navbar')
@view('Assets/sidebarmenu')

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> </div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">

@endif