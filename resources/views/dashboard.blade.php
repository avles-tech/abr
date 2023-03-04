@extends('layout.admin')
@section('contitle')
<title>AdamEve&Apple | Dashboard</title>
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
                        <li class="active">Home</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
       <div class="col-xl-3 col-lg-6">
            <section class="card">
                <div class="twt-feed blue-bg">
                    <div class="corner-ribon black-ribon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="fa fa-user wtt-mark"></div>

                    <div class="media">
                        <a href="#">
                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="/images/admin.jpg">
                        </a>
                        <div class="media-body">
                            <h2 class="text-white display-6">{{Auth::User()->name}}</h2>
                            <p class="text-light">Admin User</p>
                        </div>
                    </div>
                </div>
                
            </section>
        </div>

        <div class="col-xl-6">
             <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-info text-warning border-warning"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-digit">Welcome {{Auth::user()->name}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-receipt text-success border-success"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Total Post</div>
                            <div class="stat-digit">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-dark"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Admin User</div>
                            <div class="stat-digit">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-face-smile text-primary border-info"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Clients</div>
                            <div class="stat-digit">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-bookmark text-primary border-secondary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Blog Tags</div>
                            <div class="stat-digit">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->
@endsection
