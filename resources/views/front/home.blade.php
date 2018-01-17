
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="Description" content="Free web tutorials, codes, templates, and php project">
        <link rel="canonical" href="">

        <title>Blogmifta</title>
        @include('front.header.link')
        <style type="text/css">
            .get
            {

            }
        </style>
               
 </head>

    <body style="background-image: url({{url('images/bg_body.png')}});">
        @include('front.header.header')
            <div class="container">     
                <div class="row">
                    <article class="col-sm-9" style="background:#fff;">
                        
<h1 class="page-title">Blog Project & Tutorials</h1>
<p class="lead">Free web tutorials, codes, templates</p>
<h2><a href="{{url('php-project')}}">PHP Project <i class="fa fa-long-arrow-right"></i></a></h2>
<div class="row">
    @foreach($getproject as $project)
        <div class="col-sm-4">
                <div class="panel panel-default panel-home panel-css-properties">
                    <div class="panel-header" style="height:125px;">
                        <img src="{{url('projectimage/'.$project->imagefile)}}" height="125" width="100%" />
                    </div>
                    <div class="panel-body">
                        <h2 style="text-transform:capitalize;">{{$project->title}}</h2>
                        <br>
                        <p style="text-align:center;bottom: 0;">
                            <div style="text-align:center;">
                                <a href="{{url('project/'.$project->slug)}}"  class="btn btn-primary"  style="background:#e53935;color:#000;border:none;">Download</a>
                                <a target="_black" class="btn btn-primary" target="_blank" href="{{url('projectdemo/'.$project->preview_link)}}" style="background:#e53935;color:#000;border:none;">Preview</a>
                            </div>
                        </p>
                    </div>
                </div>
        </div>
    @endforeach
</div> 


<h2><a href="{{url('laravel')}}">Laravel <i class="fa fa-long-arrow-right"></i></a></h2>

<div class="row">
@foreach($getlaravel as $post)
    <div class="col-sm-4">
        <a class="wrapper" href="{{url(''.$post->slug)}}">
            <div class="panel panel-default panel-home panel-css-properties">
                <div class="panel-header" style="height:125px;">
                    @if($post->image!="")
                        <img src="{{url('blogimage/'.$post->image)}}" height="125" width="100%" />
                    @endif
                </div>
                <div class="panel-body">
                    <h2 style="text-transform:capitalize;" >{!!substr($post->title,0,30)!!}</h2>
                    <p>{!!substr($post->body,0,110)!!}</p>
                </div>
            </div>
        </a>
    </div>
@endforeach    
</div> 



<h2><a href="{{url('codeigniter')}}">Codeigniter <i class="fa fa-long-arrow-right"></i></a></h2>

<div class="row">
@foreach($getcodeigniter as $post)
    <div class="col-sm-4">
        <a class="wrapper" href="{{url(''.$post->slug)}}">
            <div class="panel panel-default panel-home panel-css-properties">
                <div class="panel-header" style="height:125px;">
                    @if($post->image!="")
                    <img src="{{url('blogimage/'.$post->image)}}" height="125" width="100%" />
                    @else
                    <img src="{{url('postimage/php_tutorial.gif')}}" height="125" width="100%" />
                    @endif
                </div>
                <div class="panel-body">
                    <!-- <h2 style="text-transform:capitalize;" >{!!substr($post->title,0,30)!!}</h2> -->
                    <!-- <p>{!!substr($post->body,0,110)!!}</p> -->
                    <p>{!!$post->title!!}</p>
                </div>
            </div>
        </a>
    </div>
@endforeach    
</div>

<h2><a href="{{url('mysql')}}">Mysql<i class="fa fa-long-arrow-right"></i></a></h2>
<div class="row">
@foreach($getmysql as $post)
    <div class="col-sm-4">
        <a class="wrapper" href="{{url(''.$post->slug)}}">
            <div class="panel panel-default panel-home panel-css-properties">
                <div class="panel-header" style="height:125px;">
                    @if($post->image!="")
                    <img src="{{url('blogimage/'.$post->image)}}" height="125" width="100%" />
                    @endif
                </div>
                <div class="panel-body">
                    <h2 style="text-transform:capitalize;" >{!!substr($post->title,0,30)!!}</h2>
                    <p>{!!substr($post->body,0,110)!!}</p>
                </div>
            </div>
        </a>
    </div>
@endforeach    
</div>

<h2><a href="{{url('javascript')}}">Javascript<i class="fa fa-long-arrow-right"></i></a></h2>
<div class="row">
@foreach($getjavascript as $post)
    <div class="col-sm-4">
        <a class="wrapper" href="{{url(''.$post->slug)}}">
            <div class="panel panel-default panel-home panel-css-properties">
                <div class="panel-header" style="height:125px;">
                    @if($post->image!="")
                    <img src="{{url('blogimage/'.$post->image)}}" height="125" width="100%" />
                    @endif
                </div>
                <div class="panel-body">
                    <h2 style="text-transform:capitalize;" >{!!substr($post->title,0,30)!!}</h2>
                    <p>{!!substr($post->body,0,110)!!}</p>
                </div>
            </div>
        </a>
    </div>
@endforeach    
</div>


</article>
                
                
    <div class="col-sm-3 sidebar">
        @include('front.header.sidebar')
    </div>
</div>
</div> 
        @include('front.header.footer')
    </body>
</html>
