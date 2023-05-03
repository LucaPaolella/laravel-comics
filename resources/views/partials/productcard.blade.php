<div class="card products__card">
    <img src="{{ $pippo['src'] }}" class="card-img-top img-fluid" alt="{{ $pippo['titolo'] }}">
    <div class="card-body">
        <h5 class="card-title">{{ $pippo['titolo'] }}</h5>
        <a href="{{ route('product', ['index' => $loop->index]) }}" class="btn btn-primary">Dettaglio prodotto</a>
    </div>
</div>