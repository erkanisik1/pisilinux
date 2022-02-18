@view('assets/header')

@if(USERID)
	@view 
@else
	@view('Home/login')
@endif

@view('assets/footer')
