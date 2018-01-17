<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" title="bladephp" style="color:#fff;font-size:35px;"  href="{{url('/')}}"><b><i>Blog</i></b></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">Home</a></li>
                {{-- <li><a href="{{url('php-project')}}">PHP Project</a></li> --}}
                <li><a href="{{url('laravel')}}">Laravel</a></li>
                <li><a href="{{url('codeigniter')}}">Codeigniter</a></li>
                <li><a href="{{url('mysql')}}">Mysql</a></li>
                <li><a href="{{url('javascript')}}">Javascript</a></li>
            </ul>
        </div>
    </div>
</nav>
        