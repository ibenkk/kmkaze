@extends('Frontend.SingleContent')
@section('singlecontent')
    <div class="kontainter-SingleContent">
        <div class="judul-SingleContent">
            <h3 class="item-judul-SingleContent">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
        </div>
        <div class="product-SingleContent">
            <ul class="item-product-SingleContent">
                <li><img src="/image/landingpage/vape-content1 .png" alt="" srcset=""></li>
                <li>
                    <h4 class="infostock-item-product-SignleContent">Ready Stock</h4>
                </li>
            </ul>
            <ul class="item2-product-SingleContent">
                <li>
                    <ul class="subjudul-item2-product-SingleContent">
                        <li>
                            keterangan
                        </li>
                        <li>
                            harga
                        </li>
                    </ul>
                </li>
                <li>Vape<br>Vape 1</li>
                <li>(299) Stock</li>
                <li>2.392 Rb penjualan</li>
                <li>
                    <input type="number" id="quantity" name="quantity" min="1">
                </li>

            </ul>
        </div>
        <div class="promotioncode-SingleContent">
            <div class="item-promotioncode-SingleContent">

                <label for="kodepromo">Masukan Kode Promo </label>
                <div class="kodepromo-item-promotioncode-SingleContent">
                    <input id="inputkodepromo" name="kodepromo" type="text"><button id="button-kodepromo">Submit</button>
                </div>
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
                                    <h5> Costumer Number</h5>
                                    <h5>:</h5>
                                </li>
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> Sub Item </h5>
                                    <h5>:</h5>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <ul class="subitem-ul-infopembayaran-item-promotioncode-SingleContent">
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> 1000 rb</h5>


                                </li>
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> None</h5>

                                </li>
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> 085774059572</h5>

                                </li>
                                <li class="li-subitem-ul-infopembayaran-idem-promotioncode-SingleContent">
                                    <h5> 321313 rb</h5>

                                </li>
                            </ul>

                        </li>

                    </ul>
                </div>
            </div>

        </div>
        <div class="checkout-SingleContent">
            <div class="item-checkout-SingleContent">
                <a href="/vapestore/{{ $kategory }}">
                    <button id="back-item-checkout-SingleContent">Back</button>
                </a>
                <button id="checkout-item-checkout-SingleContent" onclick="opencheckout()">Checkout</button>
            </div>
        </div>
        <div id="checkout-notificatoin" class="checkout-notificatoin">
            <ul>
                <li class="judul-checkout-notification">

                    <h3>checkout</h3>


                </li>
                <li class="deskripsi-checkout-notification">Congrats your checkout suscessfull!</li>
                <li class="back-checkout-notification">
                    <a href="/">
                        <button>Home</button>
                    </a>
                    <button onclick="closecheckout()">Back</button>
                </li>
            </ul>
        </div>
    </div>
    <script src="/js/landingpage/checkoutnotification.js"></script>
@endsection
