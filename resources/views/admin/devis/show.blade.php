@extends('admin.layouts.app')


@section('content')
<style>
  .export-options{
      display: none;
      text-align:center;
    }
    thead th {
    text-align:center;
  }
  tbody td {
    text-align:center;
  }
  .profile{
      text-align: center;
  }

  .profile-img img{
      padding-top: 60px;
      border-radius:50%;

  }
  .profile-info{
      padding-top:40px;
      padding-left:20px;
      text-align: left;
  }

  </style>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/index') }}">Home</a></li>
              <li class="breadcrumb-item active">Devis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dashboard / Devis</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
     
            <div class="offset-lg-4 profile row" >
                <div class="profile-img">
                    <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="">
                </div>
                <div class="profile-info"> 
                    <h2>{{ $devis->nom }}</h2>
                    <h6> <i class="fas fa-envelope mr-3"></i>     {{ $devis->email }}</h6>
                    <h6> <i class="fas fa-phone mr-3"></i>        {{ $devis->telephone }}</h6>
                    <h6> <i class="far fa-file-alt mr-4"></i>     {{ $devis->type_demande }}</h6>
                    <h6> <i class="icon fas fa-info mr-4"></i>     {{ $devis->status }}</h6>
                    <h6> <i class="far fa-envelope mr-4"></i>     {{ $devis->message }}</h6>
                    <h6> <i class="nav-icon far fa-calendar-alt mr-3"></i>  {{ $devis->created_at }}</h6>
                </div>
            </div>
 
    </div>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection