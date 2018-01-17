 <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('account/dashboard')}}" class="site_title">Admin Blog</a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
             
                <ul class="nav side-menu">
                  <li><a href="{{url('account/dashboard')}}"><i class="fa fa-home"></i>Home</a>
 

                  <li><a><i class="fa fa-edit"></i>Post<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('account/post/add-post')}}">Add Post</a></li>
                      <li><a href="{{url('account/post/view-post')}}">View Post</a></li>
                      </ul>
                  </li>

                  
                  <li><a><i class="fa fa-edit"></i>Category & Tag<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('account/category/view-add-category')}}">Create and View Category</a></li>
                      <li><a href="{{url('account/tag/view-add-tag')}}">Create and View Tag</a></li>
                    </ul>
                  </li> 
                </ul>
              </div>
            </div>


            
            <!-- /menu footer buttons -->
          </div>
        </div>
 <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{url('images/img.jpg')}}" alt="">{{Auth::user()->email}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{url('account/logout')}}"><i class="fa fa-sign-out pull-right"></i>LogOut</a></li>
                  </ul>
                </li> 
              </ul>
            </nav>
          </div>
        </div>