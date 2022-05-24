@extends('admin.layouts.app')

@section('content')

  <!-- Input addon -->
<div class="content-wrapper">  
  <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ajouter un contact</h3>
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
        <form action="/admin/contact" method="POST">
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
              <input type="text" class="form-control" name="phone" placeholder="Telephone">
          </div>
          <div class="input-group mb-5" >
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <select name="status" style="width:55%;" class="form-select" aria-label="Default select example">
              <option selected>choisir le status</option>
              <option  value="contact reçu">contact reçu</option>
              <option value="contact envoyé">contact envoyé</option>
              <option value="contact accepté">contact accepté</option>
              <option value="contact refusé">contact refusé</option>
              <option value="contact archivé">contact archivé</option>
            </select>
        </div>
          <div class="col-lg-12 mb-5">
            <div class="form-box message-icon mb-30">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
               
                <textarea name="message" id="message" cols="56" rows="10" placeholder=" MESSAGE"></textarea>
            </div>
          </div>
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