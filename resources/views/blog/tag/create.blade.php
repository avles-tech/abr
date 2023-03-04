@extends('layout.admin')
@section('contitle')
<title>AdamEve&Apple | Dashboard - Create Blog Tags</title>
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
                    <li><a href="/BlogtagSection">Blog Tags</a></li>                    
                    <li class="active"><a href="/BlogtagSection/create">Create Tag</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="animated fadeIn">
  <div class="col-lg-12">
    <h3 style="color:gray" class="animated fadeIn"> CREATE TAG</h3>
    <hr>
    @include('inc.messages')
    <div class="animated fadeIn">
        <a href="/BlogtagSection" class="btn btn-info"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;&nbsp;Back</a>
        <p></p>
    </div>
    <div class="card">
      <div class="card-header">
        <strong>Blog Tag</strong>
      </div>
      <div class="card-body card-block">
        {!! Form::open(['action' => 'BlogtagController@store', 'method' => 'POST','class'=>'form-horizontal']) !!}
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tag Name</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" Placeholder="Name" name="name" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Meta Description</label></div>
            <div class="col-12 col-md-9"><textarea required name="meta_description" id="textarea-input" rows="5" placeholder="Meta Description..." class="form-control"></textarea></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Meta Keywords</label></div>
            <div class="col-12 col-md-9"><textarea required name="meta_keywords" id="textarea-input" rows="3" placeholder="Meta Keywords..." class="form-control"></textarea></div>
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
