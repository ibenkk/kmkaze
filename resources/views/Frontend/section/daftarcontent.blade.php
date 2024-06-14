@extends('Frontend.MultiContent')
@section('DaftarContent')
    @if ($products->count() > 0)
        <div class="kontainer-DaftarContent">
            @foreach ($products as $product)
                <a href="/vapestore/{{ $product->kategory }}/{{ $product->id }}">

                    <ul class="DaftarContent">
                        <li class="item-gambar-DaftarContent">
                            <img class="gambaritem" src="/image/landingpage/vape-content1 .png" alt="" srcset="">
                        </li>
                        <li class="subketerangan">
                            <ul class="keterangan-DaftarContent">
                                <li>
                                    {{ $product->name_product }}
                                </li>
                                <li>
                                    {{ $product->harga }}
                                </li>
                                <li class="description-DaftarContent">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquid consequatur, aut
                                    iusto,
                                    neque
                                    earum eum iste voluptatum possimus pariatur est. Adipisci magni itaque ratione quasi
                                    temporibus
                                    quos
                                    vero velit.
                                </li>
                                <li class="tanggal-description-DaftarContent">
                                    {{ \Carbon\Carbon::now() }}
                                </li>
                            </ul>
                        </li>

                    </ul>
                </a>
            @endforeach


        </div>
    @else
        <div class="kontainer-DaftarContent">
            <div class="noavaliable-product-DaftarContent">
                <h1>sorry the product is not available</h1>
            </div>
        </div>
    @endif

@endsection
