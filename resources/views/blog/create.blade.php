@extends('layout.admin')
@section('contitle')
<title>AdamEve&Apple | Dashboard - Create Blog</title>
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
                    <li class="active"><a href="/BlogSection/create">Create Blog</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="animated fadeIn">
  <div class="col-lg-12">
    <h3 style="color:gray" class="animated fadeIn"> CREATE BLOG</h3>
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
        {!! Form::open(['action' => 'BlogController@store', 'method' => 'POST','class'=>'form-horizontal','enctype' => 'multipart/form-data']) !!}
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
            <div class="col-12 col-md-9"><input type="text" required id="text-input" Placeholder="Blog Title" name="title" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Blog Tags</label></div>
              <div class="col-12 col-md-9">
                <select id="tag" name="tag" class="form-control-sm form-control">
                  <option value="0">Select Tag</option>
                    @if(count($tags)>0)
                        @foreach($tags as $tag)
                          <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    @endif
                </select>
              </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Author</label></div>
            <div class="col-12 col-md-9"><input required type="text" value="{{Auth::User()->name}}" id="text-input" Placeholder="Author" name="author" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Body Description</label></div>
            <div class="col-12 col-md-9"><textarea required name="description" id="textarea-input" rows="5" placeholder="Description..." class="form-control"></textarea></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Body</label></div>
            <div class="col-12 col-md-9">{{ Form::textarea('body','',['id'=>'article-ckeditor','required'])}}</div>
          </div>
          <hr>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Meta Description</label></div>
            <div class="col-12 col-md-9"><textarea required name="meta_description" id="textarea-input" rows="5" placeholder="Meta Description..." class="form-control"></textarea></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Meta Keywords</label></div>
            <div class="col-12 col-md-9"><textarea required name="meta_keywords" id="textarea-input" rows="3" placeholder="Meta Keywords..." class="form-control"></textarea></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Cover Image</label></div>
            <div class="col-12 col-md-9"><input type="file" id="file-input" name="cover_image" class="form-control-file"></div>
          </div>
      </div>
      <div class="card-footer">
        <button type="reset" class="btn btn-danger btn-sm">
          <i class="fa fa-ban"></i> Reset
        </button>
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
