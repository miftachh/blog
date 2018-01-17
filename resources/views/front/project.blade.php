
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


<h2><a href="{{url('codeigniter')}}">PHP Project</a></h2>

<div class="row">
@foreach($getproject as $post)
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
         <p style="font-weight: bold;"> Tags : </p>
        <?php
    
        $sidebar = DB::table('post_model_tag')
            ->select('tbl_tag.tag_name as name')
            ->where('post_model_tag.post_model_id', $post->id)
            ->join('tbl_tag','tbl_tag.id','=', 'post_model_tag.tag_id')
            ->get();

        ?>
            @foreach($sidebar as $tag)  
                    <a href="{{url('tag/'.$tag->name)}}"><button class="btn btn-success">{{$tag->name}}</button> </a>
            @endforeach
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
