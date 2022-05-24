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
                Expoter
            </a>
       
              <a class="btn btn-warning btn-sm" href="{{ asset('admin/contact/create')  }}">
                  <i class="fas fa-plus"></i>
                  Ajouter
               </a>
               
           
            </div>
            <div class="export-options" id="open-options">
            <a href="{{ route('exportPdf') }}" class="btn btn-primary">pdf</a>
            <a href="{{ route('exportExcel') }}" class="btn btn-primary">Excel</a>
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
                          id_contact
                      </th>
                      <th style="width: 20%">
                        Nom Complet
                      </th>
                      <th>
                          Email
                      </th>
                      <th style="width: 10%" class="text-center">
                        Téléphone
                      </th>
                      <th style="width: 10%" class="text-center">
                        Status
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
                  @foreach($contacts as $contact)
                         <tr>                       
                                <td class="project_progress">
                                    {{  $contact->id  }}
                                </td>
                                <td class="project_progress">
                                    {{ $contact->name }}
                                </td>
                                <td class="project_progress">
                                    {{ $contact->email }}
                                </td>
                                <td class="project_progress">
                                    {{ $contact->phone }}
                                </td>
                                <td class="project_progress">
                                  {{ $contact->status }}
                              </td>
                                <td class="project_progress">
                                  {{ $contact->created_at }}
                              </td>
                              
                                
                                <td class="project-actions text-right">
                                 
                                    <a class="btn btn-info btn-sm" href="/admin/contact/{{ $contact->id }}/edit">
                                      <i class="fas fa-pencil-alt"></i>
                                      Modifier
                                  </a>                                
                                      <form action="/admin/contact/{{ $contact->id }}" method="POST">  
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