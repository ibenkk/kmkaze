@extends('Frontend.MultiContent')
@section('DaftarContent')
    @if ($products->count() > 0)
        @foreach ($products as $product)
            @livewire('daftarcontent', ['id' => $product->id])
        @endforeach
    @else
        <div class="kontainer-DaftarContent">
            <div class="noavaliable-product-DaftarContent">
                <h1>sorry the product is not available</h1>
            </div>
        </div>
    @endif
@endsection
