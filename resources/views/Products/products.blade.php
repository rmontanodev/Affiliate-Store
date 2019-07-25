@forelse($offers as $offer)
    <div class="col-md-2 card" sn="product{{$offer->product->SerialNumber}}">
        <a href="{{$offer->Url}}">
        <img class="card-img-top" src="{{$offer->product->Img}}">
        <p class="card-title" sn="{{$offer->product->SerialNumber}}">{{$offer->product->Model}}</p>
            <p class="masbajo">Más bajo</p>
        <p class="card-text" ln="precios">{{$offer->TotalPrice}}€</p>
        </a>
    </div>
    @empty
    <p>No hay productos</p>
@endforelse
