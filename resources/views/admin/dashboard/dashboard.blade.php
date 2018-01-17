<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>
    <style type="text/css">
      .required
      {
        color:red;
      }
    </style>

   @include('admin.header.link')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('admin.header.header')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">

            @if(!empty(session('success')))
            <div class="alert alert-warning alert-dismissible fade in" role="alert">
                <button class="close" aria-label="Close" data-dismiss="alert" type="button">
                  <span aria-hidden="true">×</span>
                </button>
                  <strong>Well done!</strong>
                 {{ session('success') }}
            </div>
            @endif

               <div class="col-md-12 col-sm-12 col-xs-12">
               
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
          @include('admin.header.footer')
        <!-- /footer content -->
      </div>
    </div>

<script src="{{url('vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('vendors/fastclick/lib/fastclick.js')}}"></script>
<script src="{{url('vendors/nprogress/nprogress.js')}}"></script>
<script src="{{url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{url('vendors/iCheck/icheck.min.js')}}"></script>
<script src="{{url('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{url('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{url('vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{url('vendors/google-code-prettify/src/prettify.js')}}"></script>
<script src="{{url('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
<script src="{{url('vendors/switchery/dist/switchery.min.js')}}"></script>
<script src="{{url('vendors/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{url('vendors/parsleyjs/dist/parsley.min.js')}}"></script>
<script src="{{url('vendors/autosize/dist/autosize.min.js')}}"></script>
<script src="{{url('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
<script src="{{url('vendors/starrr/dist/starrr.js')}}"></script>
<script src="{{url('build/js/custom.min.js')}}"></script>

  </body>
</html>
