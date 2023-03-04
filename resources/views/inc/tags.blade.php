<div class="block clearfix">
        <h3 class="title">Tags</h3>
        <div class="separator"></div>
            <div class="tags-cloud">
                <?php
                $getTags=DB::table('blogtags')->select('*')->get();
                ?>
                @foreach($getTags as $tag)
                <div class="tag">
                    <a href="/Blog/tags/{{$tag->name}}">{{$tag->name}}</a>
                </div>
                @endforeach
            </div>
        <div class="separator"></div>
    </div>