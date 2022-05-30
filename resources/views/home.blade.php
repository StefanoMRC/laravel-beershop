@extends('layout.layout')
@section('cont')
<div class="row">
    <H1 class="text-center p-5 text-danger">Beer Shop GSIT S.P.A.</H1>
    @foreach ($beer as $item)

    <div class="card mx-3 my-3 bg-warning p-0" style="width: 18rem;">
        <img src="{{$item->immagine}}" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
        <h5 class="card-title text-uppercase">{{$item->nome}}</h5>
        <p class="card-text">Birra {{$item->tipologia}} di colore {{$item->colorazione}} prodotta in {{$item->zona_produzione}} fin dal {{$item->prodotta_dal}} con gradazione {{$item->gradazione}}°</p>
       
        <p class="card-text">Prezzo: {{$item->prezzo}} €</p>
        <p class="card-text">Dimensioni: {{$item->litraggio}} CL</p>
      
        

        <a href="#" class="btn btn-primary">Maggiori info</a>
        </div>
    </div>
@endforeach
</div>
    

@endsection