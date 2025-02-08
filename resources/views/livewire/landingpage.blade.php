{{-- @extends('Frontend.Landingpage') --}}
<div class="content-landingpage" id="content-landingpage" wire:poll>
    <div class="section1">
        <div class="item-section1">

            <button>
                <svg viewBox="0 0 24 24" width="30px" height="30px" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </button>
            <div>
                <div>

                    <input type="text" placeholder="Search Item" wire:model="searching">
                </div>
                @if ($searching)
                    <ul class="daftar-search-item">

                        <li>
                            Search : {{ $searching }} ...
                            @if ($status)
                                @foreach ($resultSearch as $item)
                                    <a href="/vapestore/Mod/{{ $item->id }}"
                                        style="color:black; text-decoration:none;">
                                        <p>{{ $item->name_product }}</p>
                                    </a>
                                @endforeach
                            @else
                                <a style="color:black; text-decoration:none;">
                                    <p>product tidak ditemukan</p>
                                </a>

                            @endif
                            {{-- <p>asdas</p>
                        <p>asdas</p> --}}
                        </li>


                    </ul>
                @endif
            </div>
        </div>


    </div>
    <div class="section2">

        <div class="item1-section2">
            <img src="/image/landingpage/logoPT.png" alt="">
        </div>
        <div class="item2-section2">
            <div class="object-hiasan-item2-section2">

                @if ($product)

                    @foreach ($product as $item)
                        @if ($item->best_product == '1' && $item->product_picture)
                            <img id="slide1" width="100%" src="/upload_foto/product/{{ $item->product_picture }}"
                                alt="" srcset="">
                        @else
                            <img id="slide1" width="100%" src="/image/landingpage/vape-content1 .png"
                                alt="" srcset="">
                        @endif
                    @endforeach
                @else
                @endif


            </div>
            <div class="hiasan1-item2-section2" id="object-hiasan">
            </div>
            <div class="hiasan2-item2-section2" id="object2-hiasan">
            </div>
            <div class="hiasan3-item2-section2" id="object3-hiasan">
            </div>
        </div>
    </div>

</div>
