<div class="kontainer-DaftarContent" wire:poll>

    {{-- {{ $products }} --}}
    <a href='/vapestore/{{ $products->product_category }}/{{ $products->id }}'>

        <ul class="DaftarContent">
            <li class="item-gambar-DaftarContent">
                @if ($products->product_picture)
                    <img width="150px" class="gambaritem" src="/upload_foto/product/{{ $products->product_picture }}"
                        alt="" srcset="">
                @else
                    <img width="150px" class="gambaritem" src="/image/landingpage/vape-content1 .png" alt=""
                        srcset="">
                @endif
            </li>
            <li class="subketerangan">
                <ul class="keterangan-DaftarContent">
                    <li>
                        {{ $products->name_product }}
                    </li>
                    <li>
                        ({{ $total_penjualan }})
                        Penjualan
                    </li>
                    <li>
                        {{ $products->product_category }}
                    </li>
                    <li>
                        {{ $products->product_price }} (IDR)
                    </li>
                </ul>
            </li>

        </ul>
    </a>



</div>
