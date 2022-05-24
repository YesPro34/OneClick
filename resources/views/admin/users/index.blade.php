@extends('admin.layouts.app')


@section('content')

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
                <a class="btn btn-warning btn-sm" href="{{ asset('admin/users/create')  }}">
                  <i class="fas fa-plus"></i>
                  Ajouter
               </a>
              <a class="btn btn-success btn-sm" href="{{ route('utilisateur-excel') }}">
                  <i class="fas fa-upload"></i>
                  Expoter
              </a>
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
                          id_user
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
                        Rôle
                      </th>
                      <th style="width: 10%" class="text-center">
                        Statut
                      </th>


                      <th style="width: 40%" class="text-center">
                        Action
                      </th>

                     
                      
                  </tr>
              </thead>
              <tbody>
                  @foreach($users as $user)
                         <tr>                       
                                <td class="project_progress">
                                    {{  $user->id  }}
                                </td>
                                <td class="project_progress">
                                    {{ $user->name }}
                                </td>
                                <td class="project_progress">
                                    {{ $user->email }}
                                </td>
                                <td class="project_progress">
                                    {{ $user->telephone }}
                                </td>
                                <td class="project_progress">
                                    {{ $user->role }}
                                </td>
                                <td class="project-actions text-right">
                                    {{ $user->status }}
                                </td>
                                
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i>
                                        Voir
                                    </a>
                                    <a class="btn btn-info btn-sm" href="/admin/users/{{ $user->id}}/edit">
                                        <i class="fas fa-pencil-alt"></i>
                                        Modifier
                                    </a>                                  
                                      <form action="/admin/users/{{ $user->id }}" method="POST">  
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