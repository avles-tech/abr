@extends('layout.admin')
@section('contitle')
<title>AdamEve&Apple | Dashboard - Edit Client</title>
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
                    <li><a href="/PortfolioSection">Client</a></li>                    
                    <li class="active"><a href="">Edit Client</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="animated fadeIn">
  <div class="col-lg-12">
    <h3 style="color:gray" class="animated fadeIn"> EDIT CLIENT</h3>
    <hr>
    @include('inc.messages')
    <div class="animated fadeIn">
        <a href="/PortfolioSection" class="btn btn-info"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;&nbsp;Back</a>
        <p></p>
    </div>
    <div class="card">
      <div class="card-header">
        <strong>Clients</strong>
      </div>
      <div class="card-body card-block">
        {!! Form::open(['action' => ['PortfolioController@update',$clients->id], 'method' => 'POST','class'=>'form-horizontal','enctype' => 'multipart/form-data']) !!}
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
            <div class="col-12 col-md-9"><input type="text" value="{{$clients->name}}" required id="text-input" Placeholder="Client Name" name="name" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Body Description</label></div>
            <div class="col-12 col-md-9"><textarea required name="body_description" id="textarea-input" rows="5" placeholder="Body Description..." class="form-control">{{$clients->body_description}}</textarea></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Client</label></div>
            <div class="col-12 col-md-9"><input required type="text" value="{{$clients->client}}" id="text-input" Placeholder="Client" name="client" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">In</label></div>
            <div class="col-12 col-md-9"><input required type="text" id="text-input" value="{{$clients->inc}}" Placeholder="In" name="in" placeholder="in" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">URL</label></div>
            <div class="col-12 col-md-9"><input required type="text" id="text-input" value="{{$clients->url}}" Placeholder="URL" name="url" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Project Description</label></div>
            <div class="col-12 col-md-9"><textarea required name="proj_description" id="textarea-input" rows="5" placeholder="Project Description..." class="form-control">{{$clients->proj_description}}</textarea></div>
          </div>
          <hr>
          <div class="row form-group">
            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Cover Image</label></div>
            <div class="col-12 col-md-9">
                <img id="myImg" style="width:100px;height:60px;" src="/storage/client_cover_images/{{$clients->cover_image}}" class="img-responsive" alt="{{$clients->cover_image}}">
                <input type="file" id="file-input" name="cover_image" class="form-control-file">
            </div>
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
