<div class="footer-content">
        <h4>Blog Tags</h4>
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
</div>