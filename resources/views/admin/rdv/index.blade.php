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
</style>
<script>
  
  var a = 1;
  function toggleclick(){
    if(a == 1){
      document.getElementById('open-options').style.display = "block";
      return a=0;
    }
    else{
      document.getElementById('open-options').style.display = "none";
      return a=1;
    }
  }
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
            <div class="botton-group offset-lg-10">
              <a onclick="toggleclick()" class="btn btn-success btn-sm" >
                <i class="fas fa-upload"></i>
                Expoter
              </a>      
              <a class="btn btn-warning btn-sm" href="{{ asset('admin/devis/create')  }}">
                <i class="fas fa-plus"></i>
                Ajouter
             </a>
            </div>
            <div class="export-options" id="open-options">
              <a class="btn btn-danger btn-sm" href="{{ route('devis-pdf') }}">PDF</a>
              <a class="btn btn-success btn-sm" href="{{ route('devis-excel') }}">EXCEL</a>
            </div>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    
                      <th style="width: 20%">
                       id_rdv
                      </th>

                      <th style="width: 20%">
                        Nom de client
                      </th>

                        <th style="width: 20%" class="text-center">
                        Date
                        </th>

                        <th style="width: 20%">
                            Status
                        </th>

                      <th style="width: 20%" class="text-center">
                        Action
                      </th>

                     
                      
                  </tr>
              </thead>
              <tbody>
                 <tr>
                     <td>@@@@@</td>
                     <td>@@@@@</td>
                     <td>@@@@@</td>
                     <td>@@@@@</td>
                     <td>@@@@@</td>
                 </tr>
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection