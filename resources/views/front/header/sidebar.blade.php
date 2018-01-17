<style type="text/css">
    .padding-bottom li
    {
        padding-bottom: 3px;
    }
</style>
 
<nav>
    <ul class="padding-bottom">
    <li>
        <h3 style="color:#c82127;text-transform:uppercase;padding-bottom:10px;"><i class="fa fa-thumbs-up"></i> Category  </h3>
        <ul>
        <?php
    
        $sidebar = DB::table('tbl_category')
            ->select('*')
            ->get();

        ?>
            @foreach($sidebar as $category) 
                <?php
                    $countcategory = DB::table('tbl_add_post')
                    ->where('category_id','=',$category->id)
                    ->count();
                ?>
                <li style="text-transform:capitalize;"><a href="{{url('category/'.$category->category_name)}}"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    {{$category->category_name}} ({{$countcategory}}) </a></li>
            @endforeach
        </ul>
    </li>
    <li>
        <h3 style="color:#c82127;text-transform:uppercase;padding-bottom:10px;"><i class="fa fa-thumbs-up"></i> Tag  </h3>
        <ul>
        <?php
    
        $sidebar = DB::table('tbl_tag')
            ->select('*')
            ->get();

        ?>
            @foreach($sidebar as $tag) 
                <?php
                    $countcategory = DB::table('post_model_tag')
                    ->where('tag_id','=',$tag->id)
                    ->count();
                ?>
                <li style="text-transform:capitalize;"><a href="{{url('tag/'.$tag->tag_name)}}"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    {{$tag->tag_name}} ({{$countcategory}}) </a></li>
            @endforeach
        </ul>
    </li>
    <li>
        <h3 style="color:#c82127;text-transform:uppercase;padding-bottom:10px;"><i class="fa fa-thumbs-up"></i> Recently Updated</h3>
        <ul class="padding-bottom">
        <?php
            $trending = DB::table('tbl_add_post')
                ->select('*')->orderBy('id','desc')->limit(5)
                ->get();
            ?>
            @foreach($trending as $lastpost)
            <li><a href="{{url('/'.$lastpost->slug)}}"><i class="fa fa-chevron-right" aria-hidden="true"></i>
{{$lastpost->title}}</a></li>
            @endforeach
        </ul>
    </li>
</ul> 
</nav>
<script src="{{url('front/js/jquery-1.11.1.min.js')}}"></script>
<link href="{{url('front/js/jquery-ui.css')}}" rel="Stylesheet"></link>
<script src="{{url('front/js/jquery-ui.js')}}"></script>

 