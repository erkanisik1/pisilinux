 <div id="wrapper">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::base()}}members"><strong>pisilinux</strong></a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li class="divider"></li>
                            <li><a href="{{URL::base()}}members/user/logout"><i class="fa fa-sign-out fa-fw"></i> {[ echo lang('general','logout') ]}</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </nav>
            

            @view('assets/sidebarmenu')

            <div id="page-wrapper">
              <div class="header"> 
                <h4 class="page-header">{[  echo lang('general','hello').Session::select('username') ]}
             </h4>



         </div>
         <div id="page-inner">