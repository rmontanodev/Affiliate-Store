@extends('layouts.app')
@section('products')
    <div class="row" id="items">
        @forelse($offers as $offer)
            <div class="col-md-3 card" sn="product{{$offer->product->serialNumber}}">
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
        <div class="row">
            @if($paginastotales>9)
                @for($i = 1; $i < 10;$i++)
                    <div class="col-md">
                        <button type="button" class="btn btn-info loadmore">{{$i}}</button>
                    </div>
                @endfor
                <div class="col-md">
                    <button type="button" class="btn btn-info loadmore">{{$paginastotales}}</button>
                </div>
            @else
            @endif
        </div>
    </div>


@endsection
@section('filter')

    <h1 class="display-4">Filter</h1>
    <div class="list-group">
        <div class="col-md-12 filter-brand-title">
            <h5 class="mb-2 h5">Marcas</h5>
        </div>
        <div class="col-md-12 filter-brand-tags">
            <ul class="list-group">
                @forelse($brands as $brand)
                    <li class="list-group-item">
                        <p title="{{$brand->id}}">{{$brand->name}}</p>
                    </li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>
    <div class="list-group">
        <div class="col-md-12">
            <p>
            <h5 for="amount">Precio</h5>
            <label>Min:</label>
            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"><br>
            <label>Max:</label>
            <input type="text" id="amount2" readonly style="border:0; color:#f6931f; font-weight:bold;">
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
                    $( "#amount" ).val( ui.values[ 0 ]);
                    $('#amount2').val(ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ))
            $('#amount2').val( $( "#slider-range" ).slider( "values", 1 ) );
        } );
        let productos = {!! json_encode($offers) !!}
        $('#slider-range').on('click',(()=>{
            console.log('filtrando por precios')
            $.get({
                url: "/products/filterprice/"+$('#amount').val()+"/"+$('#amount2').val(),
            },(data)=>{
                $('#items').html(data);
            })
        }))
    </script>

@endsection
