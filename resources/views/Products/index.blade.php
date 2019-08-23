@extends('layouts.app')
@section('products')
    <h1 class="display-4">Productos</h1>
    <div class="row">
    @forelse($offers as $offer)
    <div class="col-md-2 card" sn="product{{$offer->product->serialNumber}}">
            <div class="imagen-{{$offer->product->serialNumber}}">
        <img class="card-img-top" src="{{$offer->product->img}}">
            </div>
{{--        <div class="rating">--}}
{{--            @if($offer->rating > 0.80)--}}
{{--            <i class="fas fa-star"></i>--}}
{{--            <i class="fas fa-star"></i>--}}
{{--            <i class="fas fa-star"></i>--}}
{{--            <i class="fas fa-star"></i>--}}
{{--            <i class="fas fa-star"></i>--}}
{{--                @else--}}
{{--            @endif--}}
{{--        </div>--}}
            <div class="title-{{$offer->product->serialNumber}}">
        <p class="card-title" sn="{{$offer->product->serialNumber}}">{{$offer->product->model}}</p>
            </div>
        <div class="card-url text-md-center">
            <a href="{{$offer->url}}"><button type="button" info="url" class="btn btn-primary">Más detalles</button></a>
        </div>
            <div class="row">
            <div class="lowerprice-{{$offer->product->serialNumber}} col-md-6">
            <p class="masbajo">Más bajo</p>
        <p class="card-text" ln="precios-lower">{{$offer->totalPrice}}€</p>
            </div>
                <div class="higherprice-{{$offer->product->serialNumber}} col-md-6">
                    <p class="masalto">Más alto</p>
                    <p class="card-text" ln="precios-higher">{{$offer->totalPrice}}€</p>
                </div>
            </div>
    </div>
    @empty
    <p>No hay productos</p>
@endforelse
    </div>

@endsection
@section('filter')

    <h1 class="display-4">Filter</h1>
    <div class="list-group">
        <div class="col-md-12 filter-brand-title">
            <h5 class="mb-2 h5">Categorias</h5>
        </div>
        <div class="col-md-12 filter-brand-tags">
            <ul class="list-group">
                @forelse($categories as $category)
                    <li class="list-group-item">
                        <a title="{{$category->name}}" href="{{route('productcategory',[$category->name])}}">{{$category->name}}</a>
                    </li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>
    <div class="list-group">
        <div class="col-md-12 filter-brand-title">
            <h5 class="mb-2 h5">Marcas</h5>
        </div>
        <div class="col-md-12 filter-brand-tags">
            <ul class="list-group">
        @forelse($brands as $brand)
            <li class="list-group-item">
                <a title="{{$brand->name}}" href="{{route('productbrand',[$brand->name])}}">{{$brand->name}}</a>
            </li>
            @empty
        @endforelse
            </ul>
        </div>
    </div>
    <div class="list-group">
        <div class="col-md-12">
            <p>
                <label for="amount">Precio</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
            </p>

            <div id="slider-range"></div>
        </div>
    </div>
    <script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: {!! json_encode($rangeprice['lower']) !!},
                max: {!! json_encode($rangeprice['higher']) !!},
                values: [ {!! json_encode($rangeprice['lower']) !!}, {!! json_encode($rangeprice['higher']) !!} ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val( "€" + $( "#slider-range" ).slider( "values", 0 ) +
                " - €" + $( "#slider-range" ).slider( "values", 1 ) );
        } );
    </script>

@endsection
