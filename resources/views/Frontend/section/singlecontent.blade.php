@extends('Frontend.SingleContent')
@section('singlecontent')
    <div class="kontainter-SingleContent">
        <div class="judul-SingleContent">
            <h3 class="item-judul-SingleContent" align="center"> {{ $product->name_product }}</h3>
        </div>
        <div class="product-SingleContent">
            <ul class="item-product-SingleContent">
                @if ($product->product_picture)
                    <li><img src="/upload_foto/product/{{ $product->product_picture }}" alt="{{ $product->product_picture }}"
                            srcset=""></li>
                @else
                    <li><img src="/image/landingpage/vape-content1 .png" alt="" srcset=""></li>
                @endif
                <li>
                    @if ($product->product_stock > 0)
                        <h4 class="infostock-item-product-SignleContent" style="color: rgb(55, 114, 94);">Ready Stock</h4>
                    @else
                        <h4 class="infostock-item-product-SignleContent" style="color: tomato;">Stock Habis</h4>
                    @endif
                </li>
            </ul>
            <ul class="item2-product-SingleContent">
                <li>
                    <ul class="subjudul-item2-product-SingleContent">
                        <li>
                            keterangan
                        </li>
                        <li>
                            {{ 'RP. ' . $product->product_price }}
                        </li>
                    </ul>
                </li>
                <li>
                    - {{ $product->product_category }}<br>
                    - {{ $product->name_product }}</li>
                <li>- ({{ $product->product_stock }}) Stock</li>



            </ul>
        </div>
        <div class="promotioncode-SingleContent">
            <div class="item-promotioncode-SingleContent" id="display-order">

                {{-- <label for="kodepromo">Masukan Kode Promo </label>
                <div class="kodepromo-item-promotioncode-SingleContent">
                    <input id="inputkodepromo" name="kodepromo" type="text"><button id="button-kodepromo">Submit</button>
                </div> --}}
                <div class="infopembayaran-item-promotioncode-SingleContent">
                    <ul class="ul-infopembayaran-item-promotioncode-SingleContent">
                        <li>
                            <ul class="subitem-ul-infopembayaran-item-promotioncode-SingleContent">
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> Sub Item </h5>
                                    <h5>:</h5>

                                </li>
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> Kode Promo</h5>
                                    <h5>:</h5>
                                </li>
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> Admin Number</h5>
                                    <h5>:</h5>
                                </li>

                            </ul>

                        </li>
                        <li>
                            <ul class="subitem-ul-infopembayaran-item-promotioncode-SingleContent">
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5>
                                        {{ $product->product_price }}</h5>


                                </li>
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> None</h5>

                                </li>
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> 085774059572</h5>

                                </li>

                            </ul>

                        </li>

                    </ul>
                </div>
            </div>

            <div class="precheckout-product" id="display-order2">
                <h3>Isi Form Ini</h3>
                <form action="/checkout/product/{{ $product->id }}" method="POST" class="form-precheckout-product">
                    @csrf
                    <div class="wrapper-form-precheckout-product">
                        <div class="input-form-precheckout-product">

                            <input type="text" name='nomor_telepon' placeholder="Nomor Telepon" required id="input1">
                            <input required type="text" name="alamat" placeholder="Alamat" id="input2">
                        </div>
                        <div class="input-form-precheckout-product">

                            <input required type="text" name="gmail" placeholder="Gmail" id="input3">
                            <input required type="number" name="jumlah_item" placeholder="Jumlah" id="input4">
                        </div>
                    </div>
                    <div class="wrapper-form-precheckout-product">
                        <div class="textarea-form-precheckout-product">
                            <textarea required name="comment" id="input5" cols="5" rows="5" placeholder="Beri Kami Info"></textarea>
                        </div>
                    </div>


                    <div class="checkout-SingleContent" id="checkout2-SingleContent">
                        <div class="item-checkout-SingleContent content2-item-checkout">

                            <button id="back-item-checkout-SingleContent"> <a href="/vapestore/{{ $kategory }}"
                                    style="color: white; text-decoration: none;">Back
                                </a></button>

                            <a href="/checkout/product/{{ $product->id }}">
                                <button id="checkout-item-checkout-SingleContent" type="submit"
                                    onclick="displayloading()">Checkout</button>
                            </a>

                        </div>
                </form>

            </div>
            {{-- <a href="/vapestore/{{ $kategory }}">
                <button id="back-item-checkout-SingleContent" onclick="closeFromOrder()">Back</button>
            </a> --}}

        </div>

    </div>
    <div class="checkout-SingleContent" id="checkout-SingleContent">
        <div class="item-checkout-SingleContent">
            <a href="/vapestore/{{ $kategory }}">
                <button id="back-item-checkout-SingleContent">Back</button>
            </a>

            {{-- <a href="/checkout/product/{{ $product->id }}"> --}}
            <button id="checkout-item-checkout-SingleContent" onclick="openFormOrder()">Order</button>
            {{-- </a> --}}
        </div>
    </div>


    </div>

    {{-- LOADING WITHOUT LIVEWIRE --}}
    <div id="Loading_notification" class="checkout-notificatoin">
        <ul>
            <li class="judul-checkout-notification">

                <h3>Sending Otp Via Email</h3>

                {{-- {{ $data->comment }} --}}
            </li>





            <li class="deskripsi-checkout-notification">
                <h4 class="loading_otp">Loading...</h4>
            </li>

        </ul>
    </div>



    <script src="/js/landingpage/checkoutnotification.js"></script>
@endsection
