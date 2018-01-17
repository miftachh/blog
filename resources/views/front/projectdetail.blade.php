
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="canonical" href="">

        <title style="text-transform: capitalize;">{{$getproject->title}}</title>
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
        <div class="container" >     
            <div class="row">
                <article class="col-sm-9" style="background:#fff;">
                 <h1 class="page-title">{{$getproject->title}}</h1>
            <p>
                <img  src="{{url('projectimage/'.$getproject->imagefile)}}" height="400" width="100%" class="screenshot" />
            </p>
            <p>
                @if(!empty($getproject->download_link))
                <a class="btn btn-primary" style="color:#fff;" href="{{url('projectdemo/'.$getproject->download_link)}}">
                    <span class="fa fa-download"></span>
                    Download Here
                </a>
                @endif
                @if(!empty($getproject->preview_link))
                <a class="btn btn-primary" style="color:#fff;"  target="_black" href="{{url('projectdemo/'.$getproject->preview_link)}}">
                    <span class="fa fa-download"></span>
                    Live Preview
                </a>
                @endif  
            </p>


         <h3 class="heading--1 gutter-bottom lead">PHP ECommerce Website features</h3>
            <div class="col-md-12">
            @if(!empty($getproject->frame_work))
                <div class="col-md-4">
                    <b>Framework</b>
                    <p>{{$getproject->frame_work}}</p>
                </div>
            @endif
            @if(!empty($getproject->platform))
                <div class="col-md-4">
                    <b>Platform</b>
                    <p>{{$getproject->platform}}</p>
                </div>
            @endif
            @if(!empty($getproject->programming_language))
                <div class="col-md-4">
                    <b>Programming Languages</b>
                    <p>{{$getproject->programming_language}}</p>
                </div>
            @endif
            @if(!empty($getproject->ide_tool))
                <div class="col-md-4">
                    <b>IDE Tool</b>
                    <p>{{$getproject->ide_tool}}</p>
                </div>
            @endif
            @if(!empty($getproject->database))
                <div class="col-md-4">
                    <b>Database</b>
                    <p>{{$getproject->database}}</p>
                </div>
            @endif
            @if(!empty($getproject->checkout_process))
                 <div class="col-md-4">
                    <b>Checkout Process</b>
                    <p>{{$getproject->checkout_process}}</p>
                </div>
            @endif
            @if(!empty($getproject->add_to_cart_system))
                <div class="col-md-4">
                    <b>Add To Cart System</b>
                    <p>{{$getproject->add_to_cart_system}}</p>
                </div>
            @endif
            @if(!empty($getproject->project_type))
                <div class="col-md-4">
                    <b>Project Type</b>
                    <p>{{$getproject->project_type}}</p>
                </div>
            
            @endif
            </div>
            
        @if(!empty($getproject->admin_panel))
        <h3 class="heading--1 gutter-bottom lead">Admin Panel</h3>
        {!!$getproject->admin_panel!!}
        @endif

        @if(!empty($getproject->customer_panel))   
        <h3 class="heading--1 gutter-bottom lead">Customer Panel</h3>
        {!!$getproject->customer_panel!!}
        @endif
          

    <?php
        $sidebar = DB::table('tbl_project_comment')
        ->select('*')
        ->where('project_id','=',$getproject->id)->where('is_approved','=','0')
        ->get();

        $count = DB::table('tbl_project_comment')
        ->where('project_id','=',$getproject->id)->where('is_approved','=','0')
        ->count();        
    ?>
    
            <hr>
             
        </article>
                

                
<div class="col-sm-3 sidebar">
   @include('front.header.sidebar')
</div>
    </div>
</div> 
        @include('front.header.footer')
    </body>
</html>
