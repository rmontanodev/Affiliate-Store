<h1 class="display-4">Productos</h1>
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