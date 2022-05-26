@extends('admin.layouts.app')

@section('content')

  <!-- Input addon -->
<div class="content-wrapper">  
  <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Modifier un utilisateur</h3>
                </div>
                <div class="error-section">
                  @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </div>
    <div class="card-body offset-lg-3">
        <form action="/admin/users/{{ $user->id }}" method="POST">
          @csrf
          @method('PUT')
            <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="name" value="{{ $user->name }}">
          </div>

          <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" class="form-control" name="email" value="{{ $user->email }}">
          </div>


          <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" name="telephone" value="{{ $user->telephone }}">
          </div>

          

          <div class="input-group mb-5" >
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-comments"></i></span>
            </div>
            <select style="width:56%;" name="role" class="form-select" aria-label="Default select example">
              <option selected>Choix de Role</option>
              <option  value="Directeur"  {{ $user->role == 'Directeur' ? 'selected': '' }} >Directeur</option>
              <option  value="Chef de projet"  {{ $user->role == 'Chef de projet' ? 'selected': '' }}>Chef de projet</option>
              <option  value="Commercial"  {{ $user->role == 'Commercial' ? 'selected': '' }}>Commercial</option>
              <option  value="Developpeur"  {{ $user->role == 'Developpeur' ? 'selected': '' }}>Developpeur</option>
            </select>
        </div>
          

       

          <div class="input-group mb-5" style="width:60%;">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="text" class="form-control" name="password" value="{{ $user->password }}">
         </div>
          
           
 
         <div class="input-group mb-5" >
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="icon fas fa-info"></i></span>
          </div>
          <select style="width:56%;" name="status" class="form-select" aria-label="Default select example">
            <option selected>Choix de Status</option>
            <option  value="Active" {{ $user->status == 'Active' ? 'selected': '' }}>Active</option>
            <option  value="Non Active" {{ $user->status == 'Non Active' ? 'selected': '' }}>Non Active</option>
          </select>
      </div>

      





              <div class="btn-group ">
                
                  <button type="submit" class="btn btn-success col fileinput-button">
                    <i class="fas fa-plus"></i>
                    <span>Appliquer</span>
                  </button>
                
                  {{-- <button type="reset" class="btn btn-warning col cancel">
                    <i class="fas fa-times-circle"></i>
                    <span>Cancel upload</span>
                  </button>

                  <button type="submit" class="btn btn-primary col start">
                      <i class="fas fa-upload"></i>
                      <span>Start upload</span>
                    </button>  --}}
              </div> 

        </form>
                
    </div>
 </div>

</div>
@endsection