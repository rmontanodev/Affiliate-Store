@forelse($offers as $offer)
    <div class="col-md-2 card" sn="product{{$offer->product->SerialNumber}}">
            <div class="imagen-{{$offer->product->SerialNumber}}">
        <img class="card-img-top" src="{{$offer->product->Img}}">
            </div>
            <div class="title-{{$offer->product->SerialNumber}}">
        <p class="card-title" sn="{{$offer->product->SerialNumber}}">{{$offer->product->Model}}</p>
            </div>
        <div class="card-url text-md-center">
            <a href="{{$offer->Url}}"><button type="button" info="url" class="btn btn-primary">Más detalles</button></a>
        </div>
            <div class="row">
            <div class="lowerprice-{{$offer->product->SerialNumber}} col-md-6">
            <p class="masbajo">Más bajo</p>
        <p class="card-text" ln="precios-lower">{{$offer->TotalPrice}}€</p>
            </div>
                <div class="higherprice-{{$offer->product->SerialNumber}} col-md-6">
                    <p class="masalto">Más alto</p>
                    <p class="card-text" ln="precios-higher">{{$offer->TotalPrice}}€</p>
                </div>
            </div>
    </div>
    @empty
    <p>No hay productos</p>
@endforelse
