@extends('admin.layouts.app')


@section('content')
<style>
  .export-options{
    /* float: right; */
    
    display: none;

  }
</style>
<script>
 
  var toggleclick = () => {
    document.getElementById('open-options').style.display = "block";
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
          @if (session()->has('succes'))
          <div class="alert alert-succes">
              {{ session()->get('succes') }}
          </div>
               
           @endif
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
              <a onclick="toggleclick()" class="btn btn-success btn-sm" href="#">
                <i class="fas fa-upload"></i>
                Exporter
            </a>
       
              <a class="btn btn-warning btn-sm" href="{{ asset('admin/essai_gratuit/create')  }}">
                  <i class="fas fa-plus"></i>
                  Ajouter
               </a>
               
           
            </div>
            <div class="export-options" id="open-options">
            <a href="{{ route('exportPdfEssai') }}" class="btn btn-primary">pdf</a>
            <a href="{{ route('exportExcelEssai') }}" class="btn btn-primary">Excel</a>
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
                    
                      <th style="width: 10%">
                          id_essai
                      </th>
                      <th style="width: 20%">
                        Nom Complet
                      </th>
                      <th style="width: 10%" class="text-center">
                        Téléphone
                      </th>
                      <th style="width: 10%" class="text-center">
                        Entreprise
                      </th>
                  
                      <th style="width: 10%" class="text-center">
                        Téléphone_Entreprise
                      </th>
                    
                      <th style="width: 10%" class="text-center">
                        Position
                      </th>
                      <th style="width: 10%" class="text-center">
                        Adresse
                      </th>
                  
                      <th style="width: 40%" class="text-center">
                        date 
                         </th>

                      <th style="width: 40%" class="text-center">
                        Action
                      </th>
                     
                     
                      
                  </tr>
              </thead>
              <tbody>
                  @foreach($essais as $essai)
                         <tr>                       
                                <td class="project_progress">
                                    {{  $essai->id  }}
                                </td>
                                <td class="project_progress">
                                    {{ $essai->name }}
                                </td>
                                <td class="project_progress">
                                    {{ $essai->phone }}
                                </td>
                                <td class="project_progress">
                                    {{ $essai->entreprise }}
                                </td>
                                <td class="project_progress">
                                  {{ $essai->tel_entreprise }}
                              </td>
                              <td class="project_progress">
                                {{ $essai->position }}
                            </td>
                            <td class="project_progress">
                              {{ $essai->adresse }}
                          </td>
                                <td class="project_progress">
                                  {{ $essai->created_at }}
                              </td>
                              
                                
                                <td class="project-actions text-right">
                                 
                                    <a class="btn btn-info btn-sm" href="/admin/essai_gratuit/{{ $essai->id }}/edit">
                                      <i class="fas fa-pencil-alt"></i>
                                      Modifier
                                  </a>                                
                                      <form action="/admin/essai_gratuit/{{ $essai->id }}" method="POST">  
                                        @csrf
                                        @method('delete')                              
                                          <button class="btn btn-danger btn-sm">
                                              <i class="fas fa-trash"></i>
                                              Supprimer
                                          </button>
                                      </form>                                  
                                 </td>                    
                        </tr>
                     @endforeach
                 
              
                  
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