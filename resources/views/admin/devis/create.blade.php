@extends('admin.layouts.app')

@section('content')

  <!-- Input addon -->
<div class="content-wrapper">  
  <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Ajouter un devis</h3>
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
        <form action="/admin/devis" method="POST">
          @csrf
          <div class="input-group mb-5" style="width:60%;">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="nom" placeholder="Nom Complete">
        </div>
          <div class="input-group mb-5" style="width:60%;">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="telephone" placeholder="téléphone">
        </div>
          <div class="input-group mb-5" style="width:60%;">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>  

          <div class="input-group mb-5" >
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <select style="width:56%;" name="type_demande" class="form-select" aria-label="Default select example">
              <option selected>Choix de Type de demande</option>
              <option  value="Service">Service</option>
              <option  value="Produit">Produit</option>
            </select>
        </div>


           <div class="input-group mb-5" >
              <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <select style="width:56%;" name="status" class="form-select" aria-label="Default select example">
                <option selected>Choix de Status</option>
                <option  value="Demande Recu">Devis Recu</option>
                <option  value="Devis Envoye">Devis Envoye</option>
                <option  value="Devis Accepte">Devis Accepte</option>
                <option  value="Devis Refuse">Devis Refuse</option>
                <option  value="Devis Archive">Devis Archive</option>
              </select>
          </div>
        


          <label for="message">Message</label>
          <div class="input-group mb-5" style="width:60%;">
              <div class="input-group-prepend">
              <span class="input-group-text">@</span>
              </div>
              <textarea class="form-control" name="message" rows="3"></textarea>
          </div>

              <div class="btn-group ">
                
                  <button type="submit" class="btn btn-success col fileinput-button">
                    <i class="fas fa-plus"></i>
                    <span>Ajouter</span>
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