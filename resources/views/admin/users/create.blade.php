@extends('admin.layouts.app')

@section('content')

  <!-- Input addon -->
<div class="content-wrapper">  
  <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Ajouter un utilisateur</h3>
                </div>
    <div class="card-body offset-lg-3">
        <form action="/admin/users" method="POST">
          @csrf
            <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" name="name" placeholder="Nom Complet">
          </div>

          <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" class="form-control" name="email" placeholder="Email">
          </div>


          <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
              <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" name="telephone" placeholder="Phone">
          </div>

          

          <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
              <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" name="role" placeholder="Role">
          </div>
          
            <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
               <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" name="password" placeholder="password">
             </div>


    

             <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
              <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" name="status" placeholder="status">
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