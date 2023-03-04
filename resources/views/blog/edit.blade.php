@extends('layout.admin')
@section('contitle')
<title>AdamEve&Apple | Dashboard - Edit Blog Tags</title>
@endsection
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/dashboard">Home</a></li>
                    <li><a href="/BlogSection">Blog</a></li>                    
                    <li class="active"><a href="">Edit Blog</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="animated fadeIn">
  <div class="col-lg-12">
    <h3 style="color:gray" class="animated fadeIn"> EDIT BLOG</h3>
    <hr>
    @include('inc.messages')
    <div class="animated fadeIn">
        <a href="/BlogSection" class="btn btn-info"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;&nbsp;Back</a>
        <p></p>
    </div>
    <div class="card">
      <div class="card-header">
        <strong>Blog</strong>
      </div>
      <div class="card-body card-block">
        {!! Form::open(['action' => ['BlogController@update',$blogs->id], 'method' => 'POST','class'=>'form-horizontal','enctype' => 'multipart/form-data']) !!}
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
            <div class="col-12 col-md-9"><input type="text" value="{{$blogs->title}}" required id="text-input" Placeholder="Blog Title" name="title" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Blog Tags</label></div>
              <div class="col-12 col-md-9">
                <select id="tag" name="tag" class="form-control-sm form-control">
                  <option value="0">Select Tag</option>
                    @if(count($tags)>0)
                        @foreach($tags as $tag)
                          <option value="{{$tag->id}}" <?php if ($tag->id == $blogs->tag_id) {echo 'selected="selected"';} ?>>{{$tag->name}}</option>
                        @endforeach
                    @endif
                </select>
              </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Author</label></div>
            <div class="col-12 col-md-9"><input required type="text" value="{{$blogs->author}}" id="text-input" Placeholder="Author" name="author" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Body Description</label></div>
            <div class="col-12 col-md-9"><textarea required name="description" id="textarea-input" rows="5" placeholder="Description..." class="form-control">{{$blogs->description}}</textarea></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Body</label></div>
            <div class="col-12 col-md-9">{{ Form::textarea('body',$blogs->body,['id'=>'article-ckeditor','required'])}}</div>
          </div>
          <hr>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Meta Description</label></div>
            <div class="col-12 col-md-9"><textarea required name="meta_description" id="textarea-input" rows="5" placeholder="Meta Description..." class="form-control">{{$blogs->meta_description}}</textarea></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Meta Keywords</label></div>
            <div class="col-12 col-md-9"><textarea required name="meta_keywords" id="textarea-input" rows="3" placeholder="Meta Keywords..." class="form-control">{{$blogs->keywords}}</textarea></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Cover Image</label></div>
            <div class="col col-md-3">
                <img id="myImg" style="width:100px;height:60px;" src="/storage/blog_cover_images/{{$blogs->cover_image}}" class="img-responsive" alt="{{$blogs->cover_image}}">
                <input style="margin-top:10px;" type="file" id="file-input" name="cover_image" class="form-control-file"></div>
          </div>
      </div>
      <div class="card-footer">
        <button type="reset" class="btn btn-danger btn-sm">
          <i class="fa fa-ban"></i> Reset
        </button>
        {{Form::hidden('_method', 'PUT')}}
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Save & Changes
          </button>
        {!! Form::close() !!} 
      </div>
    </div>
  </div>
</div>
<div class="animated fadeIn">
    <div class="col-lg-12">
      <hr>
    </div>
  </div>   
@endsection
