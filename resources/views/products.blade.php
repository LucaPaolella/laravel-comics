@extends('layouts.app')

@section('page.title')
I prodotti La Molisana
@endsection

@section('page.main')
<section class="products py-5">
    <div class="container">
        <h2>I nostri prodotti</h2>
        <div class="row gy-4">

            @foreach ($pasta as $pippo)

            <div class="col-12 col-sm-4 col-md-4">
                @include('partials.productcard')
            </div>
            @endforeach


        </div>
    </div>
</section>
@endsection