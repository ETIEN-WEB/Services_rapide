@extends('layouts.appadmin')

@section('title')
    Produits     
@endsection
<input type="hidden" value="{{$increment=1}}">
{{--Form::hidden('', $increment=1)--}}
@section('contenu')

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Produit</h4>
          @if (Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
          @endif
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Image</th>
                        <th> Nom du Produits</th>
                        <th>Catégorie du produit</th>
                        <th>Prix</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($anonce as $anonces)
                    <tr>
                        <td>{{$increment}}</td>
                        <td><img src="{{asset('upload/'.$anonces->fileUpload[0])}}" alt=""></td>
                        <td>{{$anonces->Titre}}</td>
                        <td>{{$anonces->categoriet->nom_categorie}}</td>
                        <td>{{$anonces->product_price}}</td>
                        
                         <td>
                           @if ($anonces->status == 1)
                           <label class="badge badge-success">Activé</label> 
                           @else
                           <label class="badge badge-danger">Désactivé</label>  
                           @endif
                        </td> 
                        <td>
                            <button class="btn btn-outline-primary" onclick="window.location = '{{url('/view_produit/'.$anonces->id)}}'" >Voir</button>
                            <a href="{{url('/supprimerannonce/'.$anonces->id)}}" id="delete" class="btn btn-outline-danger" >Delete</a>

                            @if ($anonces->status == 1)
                            <button class="btn btn-outline-warning" onclick="window.location = '{{url('/desactiver_produit/'.$anonces->id)}}'">Désactiver</button>  
                            @else
                            <button class="btn btn-outline-success" onclick="window.location = '{{url('/activer_produit/'.$anonces->id)}}'">Activer</button>
                            @endif
                            
                        </td>
                    </tr>
                    <input type="hidden" value="{{$increment = $increment + 1}}">
                    {{--Form::hidden('', $increment = $increment + 1)--}}
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
@endsection

@section('scripts')
    <script src="backend/js/data-table.js"></script> 
@endsection


