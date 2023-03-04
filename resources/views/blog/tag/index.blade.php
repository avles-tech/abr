@extends('layout.admin')
@section('contitle')
<title>AdamEve&Apple | Dashboard - Blog Tags</title>
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
                    <li class="active"><a href="/BlogtagSection">Blog Tags</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <h3 style="color:gray" class="animated fadeIn"> BLOG TAGS</h3>
    <hr>
    @include('inc.messages')
    <div class="animated fadeIn">
        <a href="/BlogtagSection/create" class="btn btn-warning"><i class="fa fa-tag"></i>&nbsp;&nbsp;&nbsp;Create Tag</a>
        <p></p>
    </div>
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <strong class="card-title">Blog Tag List</strong>
                  </div>
                  <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Tag Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($tags)>0)
                            @foreach($tags as $tag)
                              <tr class="gradeX">
                                <td>{{$tag->name}}</td>
                                <td>
                                  {!!Form::open(['action' => ['BlogtagController@destroy', $tag->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return confirmDelete()'])!!}
                                  {!! Form::hidden('_method', 'DELETE')!!}
                                  <a class="btn btn-info" href="/BlogtagSection/{{$tag->id}}/edit">
                                      <i class="fa fa-pencil-square-o"></i>                                            
                                  </a>
                                  <button type="submit" class="btn btn-danger">                                            
                                      <i class="fa fa-trash-o"></i>
                                  </button>
                                  {!!Form::close()!!}
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
