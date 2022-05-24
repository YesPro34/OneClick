@extends('admin.layouts.app')

@section('content')

  <!-- Input addon -->
<div class="content-wrapper">  
  <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Modifier un contact</h3>
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
        <form action="/admin/essai_gratuit/{{ $essai->id }}" method="POST">
          @csrf
          @method('PUT')
            <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" name="name" value="{{ $essai->name }}">
          </div>
          
          <div class="input-group mb-5" style="width:60%;">
            <div class="input-group-prepend">
            <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="phone" value="{{ $essai->phone }}">
        </div>

          <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" class="form-control" name="entreprise" value="{{ $essai->entreprise }}">
          </div>


          <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
              <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" name="tel_entreprise" value="{{ $essai->tel_entreprise }}">
          </div>

          <div class="input-group mb-5" style="width:60%;">
            <div class="input-group-prepend">
            <span class="input-group-text">@</span>
            </div>
            <input type="text" name="adresse" placeholder="Adresse" value="{{ $essai->adresse }}">
        </div>
         
      <div class="input-group mb-5" style="width:60%;">
        <div class="input-group-prepend">
        <span class="input-group-text">@</span>
        </div>
        <input type="text" name="position" placeholder="Position" value="{{ $essai->position }}">
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