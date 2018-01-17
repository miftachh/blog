<html>
<head>
	<title>
		Login
	</title>
	@include('admin.header.link')
    <style type="text/css">
    	.login
    	{
    		background-color: #2A3F54;
    	}
    </style>
</head>
<body>

<body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           <form method="post" action="{{route('login')}}">
            {{ csrf_field() }}
              <h1 style="color:#fff;">Login</h1>
              @if(!empty(session('message')))
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button class="close" aria-label="Close" data-dismiss="alert" type="button">
                  <span aria-hidden="true">×</span>
                </button>
                 {{ session('message') }}
            </div>
            @endif
              <div>
          		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="email" class="form-control" name="email" placeholder="Email" required="">
              </div>
              <div>
    			  <input type="password" class="form-control" name="password" placeholder="Password" required="">
        	  </div>
              <div style="text-align:left;">
         		 <button class="btn btn-primary" type="submit">Login</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <p style="color:#fff;">©2017 bladephp.co</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      
      </div>
    </div>
  
<script src="{{url('vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>


</body>
</html>