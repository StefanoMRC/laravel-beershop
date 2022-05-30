@extends('layout.layout')
@section('cont')
<div class="row">
    @foreach ($beer as $item)
    <div class="card" style="width: 18rem;">
        <img src="{{$item->immagine}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$item->nome}}</h5>
        <p class="card-text">Birra {{$item->tipologia}} di colore {{$item->colorazione}} prodotta in {{$item->zona_produzione}} fin dal {{$item->prodotta_dal}}</p>
        <p class="card-text">{{$item->prezzo}}</p>

        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endforeach
</div>
    

@endsection