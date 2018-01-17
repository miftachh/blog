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
    <script src="{{url('front/tinymce/js/tinymce/tinymce.min.js')}}"></script>
 <!-- <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script> -->
  <script>
  tinymce.init({ 
        selector:'textarea',
        plugins:'link code image textcolor codesample',
         codesample_languages: [
        {text: 'HTML/XML', value: 'markup'},
        {text: 'JavaScript', value: 'javascript'},
        {text: 'CSS', value: 'css'},
        {text: 'PHP', value: 'php'},
        {text: 'Ruby', value: 'ruby'},
        {text: 'Python', value: 'python'},
        {text: 'Java', value: 'java'},
        {text: 'C', value: 'c'},
        {text: 'C#', value: 'csharp'},
        {text: 'C++', value: 'cpp'}
    ],
          toolbar: [
        "undo redo | styleselect | bold italic | link image","codesample",
        "alignleft aligncenter alignright Justify | forecolor backcolor",
        "fullscreen"
    ]

          
  

   });
   </script>
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
                <h3>Add Post</h3>
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
                    <h2>Add Post</h2>
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
                    <form enctype="multipart/form-data" method="post" action="{{url('account/post/add-post/UpdatePost/'.$getpost->id)}}" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" name="title" value="{{$getpost->title}}" required="required" class="form-control col-md-7 col-xs-12">
                          <div style="color:#FF0000;">{{$errors->first('title')}}</div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Slug<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input readonly="" type="text" name="slug" required="required" class="form-control col-md-7 col-xs-12" value="{{$getpost->slug}}">
                          <div style="color:#FF0000;"> {{$errors->first('slug')}}</div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Meta Description<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" name="meta_description" required="required" class="form-control col-md-7 col-xs-12" value="{{$getpost->meta_description}}">
                          <div style="color:#FF0000;"> {{$errors->first('meta_description')}}</div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="Category">Category<span class="required">*</span>
                        </label>

                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <select required="" style="text-transform:capitalize;" name="category_id" class="form-control col-md-7 col-xs-12">
                            <option value="">--Choose--</option>
                            @foreach($getCategory as $category)
                                    <?php 
                                      $selected = '';
                                    ?>
                                    @if($category->id == $getpost->category_id)
                                      <?php $selected = "selected"; ?>
                                    @endif
                              <option {{$selected}} value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                            </select>
                            <div style="color:#FF0000;"> {{$errors->first('category_id')}}</div>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="Tag">Tag<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <select id="" multiple  style="text-transform:capitalize;" name="tags[]" class="form-control col-md-7 col-xs-12 multipleSelect">
                                <option value="">--Choose--</option>
                                @foreach($getTag as $tag)
                                    <option  value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                @endforeach
                            </select>
                            <div style="color:#FF0000;"> {{$errors->first('tag_id')}}</div>
                        </div>
                      </div>

                      <div class="form-group">
                          <?php
                              $explode = explode(",",$getpost->related_post);
                          ?>
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="post">Related Post<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <select id="RelatedPost" multiple  style="text-transform:capitalize;" name="related_post[]" class="form-control col-md-7 col-xs-12">
                                <option value="">--Choose--</option>
                                @foreach($getdata as $post)
                                    <?php
                                        $selected = '';
                                    ?>
                                    @foreach($explode as $ex)
                                        @if($post->id == $ex)
                                            <?php
                                              $selected = 'selected';
                                            ?>
                                        @endif
                                    @endforeach    
                                    <option {{$selected}} value="{{$post->id}}">{{$post->title}}</option>
                                @endforeach
                            </select>
                            <div style="color:#FF0000;"> {{$errors->first('related_post')}}</div>
                        </div>
                      </div>


                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="post">Url Select<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <select  required=""  style="text-transform:capitalize;" name="url_select" class="form-control col-md-7 col-xs-12">
                                <option value="">--Choose--</option>
                                @foreach($getCategory as $category)
                                    <?php 
                                      $selected = '';
                                    ?>
                                    @if($category->category_name == $getpost->url_select)
                                      <?php $selected = "selected"; ?>
                                    @endif
                              <option {{$selected}} value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                            </select>

                                
                            
                            <div style="color:#FF0000;"> {{$errors->first('url_select')}}</div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="Image">Image<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="file" name="imagefile">
                            <div style="color:#FF0000;"> {{$errors->first('imagefile')}}</div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="last-name">Body<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <textarea  rows="15" class="form-control col-md-7 col-xs-12" name="body">{{$getpost->body}}</textarea>
                          <div style="color:#FF0000;"> {{$errors->first('body')}}</div>
                        </div>
                      </div>

                      <d v class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
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

<script type="text/javascript">
  
    $(".multipleSelect").select2().val({!! $getpost->tags()->getRelatedIds() !!}).trigger('change');

    $("#RelatedPost").select2();
</script>
