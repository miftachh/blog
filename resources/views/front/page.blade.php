
<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="">

        <title style="text-transform: capitalize;">{{$getblog->title}}</title>
        @include('front.header.link')
        <style> 
                .btn-h1-spacing
                {
                    margin-top: 18px; 
                }
                .form-spacing-top
                {
                    margin-top: 30px;

                }

                .author-image{
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    float: left;
                }
                .author-name
                {
                    float: left;
                    margin-left: 15px;  
                }
                .author-name >h6
                {
                    margin: 5px 0px;
                     
                }
                
                .comment
                {
                    margin-bottom: 30px;
                }
                .comment-content
                {
                   clear: both;
                   margin-left: 65px;
                   font-size: 16px;
                   line-height: 1.3em;
                }
                .author-time
                {
                    font-size: 11px;
                    font-style: italic;
                    color: #aaa;
                }
                .comment-title
                {
                    margin-bottom: 45px;
                }
       
                .form-submit {
                    background: #ca2129 none repeat scroll 0 0;
                    border: medium none;
                    box-shadow: none;
                    color: #fff;
                    border-radius: 4px;
                    cursor: pointer;
                    padding: 0.9rem 1.5rem;
                    text-transform: uppercase;
                    width: auto;
                }
                .form-submit:hover {
                    background: #111 none repeat scroll 0 0;
                }
        </style>
 </head>

    <body style="background-image: url({{url('images/bg_body.png')}});">
        @include('front.header.header')
            <div class="container">     
                <div class="row">
                    <article class="col-sm-9" style="background:#fff;">
                            <h1 style="text-transform:capitalize;" class="page-title">{{$getblog->title}}</h1>
                            <div class="lead"></div>

                            {!!$getblog->body!!}

         <p style="font-weight: bold;"> Tags : </p>
        <?php
    
        $sidebar = DB::table('post_model_tag')
            ->select('tbl_tag.tag_name as name')
            ->where('post_model_tag.post_model_id', $getblog->id)
            ->join('tbl_tag','tbl_tag.id','=', 'post_model_tag.tag_id')
            ->get();

        ?>
            @foreach($sidebar as $tag)  
                    <a href="{{url('tag/'.$tag->name)}}"><button class="btn btn-success">{{$tag->name}}</button> </a>
            @endforeach



            
         <h3 class="lead">Related Post</h3>
<div class="row">
<?php
$explode = explode(",", $getblog->related_post)
?>
    @foreach($explode as $ex)
    <?php
        $quiz = DB::table('tbl_add_post')
            ->select('*')
            ->where('id',$ex)
            ->get();
    ?>
    @foreach($quiz as $post) 
        <div class="col-sm-4">
            <a class="wrapper" href="{{url('/'.$post->slug)}}">
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
    @endforeach    
</div> 

            <div class="row"> 
            </div> 
            <div class="row"> 
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
