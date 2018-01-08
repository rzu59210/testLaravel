@extends('base')

@section('content')

	<h1>Liste des bons de commandes : </h1>

		<table class="table table-bordered">
			<thead>
				<th>Numéro</th>
				<th>Désignation</th>
				<th>Crée le</th>
				<th>Etat</th>
				<th>Action</th>
			</thead>
			<tbody>
				
			</tbody>
		</table>

	<h1>Listes des commandes : </h1>


		<table class="table table-bordered">
			<thead>
				<th>Désignation</th>
				<th>Quantité</th>
				<th>Prix</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($commandes as $commande)
					<tr>
						<td>{{ $commande->designation }}</td>
						<td>{{ $commande->quantite }}</td>
						<td>{{ $commande->pu}} euros</td>
						<td>
							<a href="{{ route('index.show' , $commande) }}"><button class="btn btn-success">Consulter</button></a>
						</td>
					</tr>
				@endforeach

			</tbody>

		</table>
		
@stop