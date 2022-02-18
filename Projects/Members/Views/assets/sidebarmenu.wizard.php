 <!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li><a href="/members"><i class="fa fa-dashboard"></i>{{lang('Sidebarmenu','memberHomepage')}}</a></li>
                <li><a href="{{URL::base()}}" target="_blank"><i class="fa fa-dashboard"></i>{{lang('Sidebarmenu','siteHomepage')}}</a></li>
                <li><a href="/members/forum"><i class="fa fa-dashboard"></i>{{lang('Sidebarmenu','forum')}}</a></li>
                <li><a href=""><i class="fa fa-user"></i> {{lang('Sidebarmenu','myProfile')}}<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/members/user"><i class="fa fa-user"></i>{{lang('Sidebarmenu','update')}}</a></li>
                        <li><a href="/members/user/passrename"><i class="fa fa-key"></i>{{lang('Sidebarmenu','changemypassword')}}</a></li>
                        <li><a href="/members/user/deleted"><i class="fa fa-trash-o" aria-hidden="true"></i> {{lang('Sidebarmenu','Delete_account')}}</a></li>                                               
                    </ul>
                </li>  
                <li><a href="/members/messages"><i class="fa fa-envelope"></i>{{lang('Sidebarmenu','youMessage')}}</a></li>
                <li><a href="/members/wiki"><i class="fa fa-bars"></i>{{lang('Sidebarmenu','wikiManaged')}}</a></li>
                <li><a href="/members/galery"><i class="fa fa-bars"></i>{{lang('Sidebarmenu','galery')}}</a></li>

                @if (Session::select('yetki') == '3' OR Session::select('yetki') == '1')
                <li><a href="/members/content"><i class="fa fa-bars"></i>{{lang('Sidebarmenu','contentManaged')}}</a></li>                    
                @endif

                    
                    <li><a href="/members/user/logout"><i class="fa fa-sign-out"></i>{{lang('Sidebarmenu','logout')}}</a></li>
                   
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->