@extends('layout.admin')
@section('contitle')
<title>AdamEve&Apple | Dashboard - Blogs</title>
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
                    <li class="active"><a href="/BlogSection">Blogs</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <h3 style="color:gray" class="animated fadeIn"> BLOGS</h3>
    <hr>
    @include('inc.messages')
    <div class="animated fadeIn">
        <a href="/BlogSection/create" class="btn btn-warning"><i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;Create Blog</a>
        <p></p>
    </div>
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <strong class="card-title">Blogs</strong>
                  </div>
                  <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Tag Name</th>
                          <th>Author</th>
                          <th>Description</th>
                          <th>Body</th>
                          <th>Cover Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($blogs)>0)
                            @foreach($blogs as $blog)
                              <tr class="gradeX">
                                <td><div class="truncate-ellipsis-title">{{$blog->title}}</div></td>
                                <td>
                                    <?php
                                        $gettagName=DB::table('blogtags')->where('id',$blog->tag_id)->first();
                                        echo $gettagName->name;
                                    ?>
                                </td>
                                <td>{{$blog->author}}</td>
                                <td><div class="truncate-ellipsis">{{$blog->description}}</div></td>
                                <td><div class="truncate-ellipsis">{{$blog->body}}</div></td>
                                <td>
                                    <a href="/storage/blog_cover_images/{{$blog->cover_image}}" class="strip"  data-strip-group="shared-options" data-strip-caption="{{$blog->cover_image}}" data-strip-options="side: 'top' " data-strip-group-options="loop: false"><img style="width:100px;height:60px;" id="myImg" onclick="myFunction(this);" src="/storage/blog_cover_images/{{$blog->cover_image}}" class="img-responsive" alt="{{$blog->cover_image}}"></a>
                                </td>
                                
                                <td><div class="truncate-ellipsis">
                                  {!!Form::open(['action' => ['BlogController@destroy', $blog->id], 'method' => 'POST','onsubmit' => 'return confirmDelete()'])!!}
                                  {!! Form::hidden('_method', 'DELETE')!!}
                                  <a class="btn btn-success" target="_blank" href="/Blog/{{$blog->title}}">
                                    <i class="fa fa-eye"></i>                                            
                                  </a>
                                  <a class="btn btn-info" href="/BlogSection/{{$blog->id}}/edit">
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
