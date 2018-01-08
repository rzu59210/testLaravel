@extends('base')

@section('content')

<form>
  <div class="form-group">
    <label for="desination">Désignation :</label>
    <input type="text" class="form-control" id="designation"  value="{{ $commande->designation }}">
  </div>
  <div class="form-group">
    <label for="quantite">Quantité :</label>
    <input type="text" class="form-control" id="quantite" value="{{ $commande->quantite }}">
  </div>
  <div class="form-group">
    <label for="prix">Prix :</label>
    <input type="text" class="form-control" id="prix" value="{{ $commande->pu }}">
  </div>  
</form>

@endsection