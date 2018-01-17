
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="canonical" href="">

        <title>{{$tag->tag_name}} Tag</title>
        @include('front.header.link')
               
 </head>

    <body style="background-image: url({{url('images/bg_body.png')}});">
        @include('front.header.header')
            <div class="container">     
                <div class="row">
                    <article class="col-sm-9" style="background:#fff;">
                        
<h1 class="page-title">Tag: {{$tag->tag_name}}</h1>
<p class="lead"></p>

<div class="row">
@foreach($gettag as $post)
    <div class="col-sm-4">
        <a class="wrapper" href="{{url('/'.$post->slug)}}">
            <div class="panel panel-default panel-home panel-css-properties">
                <div class="panel-header" style="height:125px;">
                    @if($post->image!="")
                    <img src="{{url('blogimage/'.$post->image)}}" height="125" width="100%" />
                    @endif
                </div>
                <div class="panel-body">
                    <h2 style="text-transform:capitalize;" >{!!$post->title!!}</h2>
                   <!--  <p>{!!substr($post->body,0,110)!!}</p> -->
                </div>
            </div>
        </a>
    </div>
@endforeach    
</div> 
{{$gettag->links()}}

</article>
                
                
    <div class="col-sm-3 sidebar">
        @include('front.header.sidebar')
    </div>
</div>
</div> 
        @include('front.header.footer')
    </body>
</html>
    