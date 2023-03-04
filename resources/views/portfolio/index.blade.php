@extends('layout.admin')
@section('contitle')
<title>AdamEve&Apple | Dashboard - Client</title>
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
                    <li class="active"><a href="/PortfolioSection">Client</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <h3 style="color:gray" class="animated fadeIn"> CLIENTS</h3>
    <hr>
    @include('inc.messages')
    <div class="animated fadeIn">
        <a href="/PortfolioSection/create" class="btn btn-warning"><i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;Create Client</a>
        <p></p>
    </div>
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <strong class="card-title">Portfolio</strong>
                  </div>
                  <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Client</th>
                          <th>In</th>
                          <th>URL</th>
                          <th>Project Description</th>
                          <th>Cover Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($porfolioes)>0)
                            @foreach($porfolioes as $porfolio)
                              <tr class="gradeX">
                                <td><div class="truncate-ellipsis-title">{{$porfolio->name}}</div></td>
                                <td><div class="truncate-ellipsis">{{$porfolio->body_description}}</div></td>
                                <td><div class="truncate-ellipsis-title">{{$porfolio->client}}</div></td>
                                <td><div class="truncate-ellipsis">{{$porfolio->inc}}</div></td>
                                <td><div class="truncate-ellipsis">{{$porfolio->url}}</div></td>
                                <td><div class="truncate-ellipsis">{{$porfolio->proj_description}}</div></td>
                                <td>
                                        <a href="/storage/client_cover_images/{{$porfolio->cover_image}}" class="strip"  data-strip-group="shared-options" data-strip-caption="{{$porfolio->cover_image}}" data-strip-options="side: 'top' " data-strip-group-options="loop: false"><img style="width:100px;height:60px;" id="myImg" onclick="myFunction(this);" src="/storage/client_cover_images/{{$porfolio->cover_image}}" class="img-responsive" alt="{{$porfolio->cover_image}}"></a>
                                </td>
                                
                                <td><div class="truncate-ellipsis">
                                  {!!Form::open(['action' => ['PortfolioController@destroy', $porfolio->id], 'method' => 'POST','onsubmit' => 'return confirmDelete()'])!!}
                                  {!! Form::hidden('_method', 'DELETE')!!}
                                  <a class="btn btn-success" target="_blank" href="/Portfolio/{{$porfolio->name}}">
                                    <i class="fa fa-eye"></i>                                            
                                  </a>
                                  <a class="btn btn-info" href="/PortfolioSection/{{$porfolio->id}}/edit">
                                      <i class="fa fa-pencil-square-o"></i>                                            
                                  </a>
                                  <button type="submit" class="btn btn-danger">                                            
                                      <i class="fa fa-trash-o"></i>
                                  </button>
                                  {!!Form::close()!!}
                                </div>
                                </td>
                              </tr>
                            @endforeach                      
                          @endif 
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<script type="text/javascript">
  function confirmDelete() {
    var result = confirm('Are you sure you want to remove?');
    if (result) { return true; }
    else { return false; }
  }
</script>
@include('inc.adminscript')
<div class="animated fadeIn">
        <div class="col-lg-12">
          <hr>
        </div>
      </div> 
@endsection
