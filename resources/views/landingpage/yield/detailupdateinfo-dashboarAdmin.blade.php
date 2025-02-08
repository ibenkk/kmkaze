@extends('landingpage.dashboardAdmin')
@section('detailupdateInfo-dashboardAdmin')
    <style>
        .kontainer-kontent-dashboardCustomer {
            font-size: 20px
        }

        .kontainer-kontent-dashboardCustomer button {
            font-size: 18px;

        }
    </style>
    <div class="kontainer-kontent-dashboardCustomer">
        <div class="item-kontainer-kontent-dashboardCustomer">
            <div class="content-item-kontainer-kontent-dashboardCustomer">
                <div class="content2-item-kontainer-kontent-dashboardCustomer">
                    <img src="/image/landingpage/logoPT.png" alt="" width="200px" height="100%">
                </div>
            </div>
            <div class="kontainer-content2-item-kontainer-kontent-dashboardCustomer">
                <div class="content3-item-kontainer-kontent-dashboardCustomer">
                    <h2> {{ $paymentinfo->product->name_product }}</h2>
                    <h2> {{ $paymentinfo->product->product_category }}</h2>

                </div>
                @if ($paymentinfo->sudah_bayar == '0')
                    <div class="content4-item-kontainer-kontent-dashboardCustomer">
                        <h2>Status : </h2>
                        <h2 style="color: red;">Belum Selesai</h2>
                    </div>
                @else
                    <div class="content4-item-kontainer-kontent-dashboardCustomer">
                        <h2>Status : </h2>
                        <h2 style="color:rgb(95, 192, 159);">Sudah Selesai</h2>
                    </div>
                @endif
                <div class="back-dashboardcustomer">
                    <a href="/dashboardadmin/updateinfo">
                        <form action="/dashboardadmin/updateinfo/{{ $paymentinfo->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" name="sudah_bayar" value="1" hidden readonly>
                            <button type="submit" style="color:rgb(76, 156, 130); cursor: pointer;">Mark As Done</button>
                        </form>

                        <a href="/dashboardadmin/updateinfo"> <button style="cursor: pointer;">Back</button></a>
                        <form action="/dashboardadmin/{{ $paymentinfo->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" style="color:rgb(214, 5, 5); cursor: pointer;">Remove</button>
                        </form>
                </div>
                <div class="deskripsi-updatedetail">
                    <div class="isi-deskripsi-updatedetail">

                        <div class="kopsurat-isi-deskripsi-updatedetail">
                            <h2>RP.{{ $paymentinfo->product->product_price }}</h2><br>
                            <p>No Telepon : {{ $paymentinfo->nomor_telepon }}</p>
                            <p>Alamat Customer: {{ $paymentinfo->alamat }}</p>
                        </div>

                        <div class="isi-update">
                            {{ $paymentinfo->comment }}
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
@endsection
