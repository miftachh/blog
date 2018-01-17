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
                <h3>View and Add Category</h3>
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
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Category</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="" method="post" action="{{url('account/category/add-category')}}" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Category Name<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" name="category_name" value="{{ old('category_name')}}" required="required" class="form-control col-md-7 col-xs-12">
                          <div style="color:#FF0000;">{{$errors->first('category_name')}}</div>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <table class="table"> 
                   <thead>
                     <tr>
                      <th>Category Name</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                     @forelse($getCategory as $category)
                     <tr>
                          <td>{{ $category->category_name }}</td>
                          <td>{{ $category->created_at }}</td>
                          <td>{{ $category->updated_at }}</td>
                          <td><a class="btn btn-primary" href="{{url('account/category/edit-category/'.$category->id)}}">Edit</td>
                     </tr>
                     @empty
                     <tr>
                      <td colspan="100%">No Record Found!</td>
                     </tr>
                    @endforelse 
                   </tbody>
                   </table>
                   {{$getCategory->links()}}
                  </div>
                </div>
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
