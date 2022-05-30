@extends('layout.layout')
@section('cont')
<div class="row">
    @foreach ($beer as $item)
    <div class="card" style="width: 18rem;">
        <img src="{{$item->immagine}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$item->nome}}</h5>
        <p class="card-text">Birra {{$item->tipologia}} di colore {{$item->colorazione}} prodotta in {{$item->zona_produzione}} fin dal {{$item->prodotta_dal}} con gradazione {{$item->gradazione}}°</p>
       
        <p class="card-text">Prezzo: {{$item->prezzo}} €</p>
        <p class="card-text">Dimensioni: {{$item->litraggio}} CC</p>
      
        

        <a href="#" class="btn btn-primary">Maggiori info</a>
        </div>
    </div>
@endforeach
</div>
    

@endsection