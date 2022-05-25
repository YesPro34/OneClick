@extends('admin.layouts.app')

@section('content')

  <!-- Input addon -->
<div class="content-wrapper">  
  <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ajouter un essai gratuit</h3>
                </div>
    <div class="card-body offset-lg-3">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
        <form action="/admin/essai_gratuit" method="POST">
          @csrf
         
            <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"> </i></span>
              </div>
              <input type="text" class="form-control" name="name" placeholder="Nom Complet">
          </div>
          <div class="input-group mb-5" style="width:60%;">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" name="phone" placeholder="Téléphone">
        </div>
        
          <div class="input-group mb-5" >
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-lg fa-building"></i></span>
              </div>
              <input   style="width:55%;" type="text" name="entreprise" placeholder=" Entreprise">
          </div>
          <div class="input-group mb-5" >
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input   style="width:55%;" type="text" name="tel_entreprise" placeholder="Téléphone Entreprise">
        </div>

         
          <div class="input-group mb-5" >
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-map-marker-alt mr-1"></i></span>
            </div>
            <input  style="width:55%;" type="text" name="adresse" placeholder="Adresse">
        </div>
      
      <div class="input-group mb-5" >
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"> </i></span>
        </div>
        <input  style="width:55%;" type="text" name="position" placeholder="Position">
    </div>
         
         
           
 

              <div class="btn-group ">
                
                  <button type="submit" class="btn btn-success col fileinput-button">
                    <i class="fas fa-plus"></i>
                    <span>valider</span>
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