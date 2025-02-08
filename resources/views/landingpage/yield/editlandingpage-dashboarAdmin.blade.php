@extends('landingpage.dashboardAdmin')
@section('Editlandingpage-dashboardAdmin')
    <div class="kontainer-kontent-dashboardCustomer">
        <div class="item-kontainer-kontent-dashboardCustomer">
            <div class="content-item-kontainer-kontent-dashboardCustomer">
                <div class="content2-item-kontainer-kontent-dashboardCustomer">
                    <img src="/image/landingpage/logoPT.png" alt="" width="200px" height="100%">
                </div>
            </div>
            <div class="kontainer-content2-item-kontainer-kontent-dashboardCustomer">
                <div class="content3-item-kontainer-kontent-dashboardCustomer">
                    <h2>Report Penjualan</h2>


                </div>
                <div class="content4-item-kontainer-kontent-dashboardCustomer">
                    <h2>{{ \Carbon\carbon::now() }}</h2>
                </div>
                <div class="content5-item-kontainer-kontent-dashboardCustomer">
                    <div class="item-content5-item-kontainer-kontent-dashboardCustomer">

                        <ul>
                            <li>
                                Name : {{ auth()->user()->name }}
                            </li>
                            <li>
                                Status : Admin
                            </li>
                        </ul>
                    </div>
                    <div class="item2-content5-item-kontainer-kontent-dashboardCustomer">

                        <ul>
                            <li>
                                Service : Pembayaran
                            </li>
                            <li>
                                Created : {{ $penjualan[0]->created_at }}
                            </li>
                        </ul>
                    </div>
                    <div class="item3-content5-item-kontainer-kontent-dashboardCustomer">

                        <ul>
                            <li>
                                company : KmeKaze VapeStore
                            </li>
                            <li>
                                Depok,margonda no 19,Jawa Barat
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="content6-item-kontainer-kontent-dashboardCustomer">
                    <table>
                        <tr>
                            <th>Nomor Telepon</th>
                            <th>Item</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Alamat</th>
                            <th colspan="3">Action</th>

                        </tr>
                        @foreach ($penjualan as $item)
                            <form action="/dashboardadmin/payment/{{ $item->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <tr>
                                    <td> <input type="text" name="nomor_telepon" value="{{ $item->nomor_telepon }}"></td>
                                    <td> <input type="text" value="{{ $item->product->name_product }}" readonly></td>
                                    <td> <input type="text" value="{{ $item->product->product_price }}" readonly> </td>
                                    <td>
                                        <select name="sudah_bayar">
                                            <option value="" readonly disabled>Sudah Bayar?</option>
                                            @if ($item->sudah_bayar == '1')
                                                <option value='1' selected>Sudah Bayar</option>
                                                <option value='0'>Belum Bayar</option>
                                            @else
                                                <option value='1'>Sudah Bayar</option>
                                                <option value='0' selected>Belum Bayar</option>
                                            @endif
                                        </select>
                                    </td>
                                    <td> <input type="text" name='alamat' value="{{ $item->alamat }}"> </td>

                                    <td><a href="/dashboardadmin" style="color: rgb(189, 191, 60);">
                                            Back
                                        </a>
                                    </td>
                                    <td><button type="submit" style="color: rgb(85, 178, 147); cursor: pointer;">
                                            Update
                                        </button>
                                    </td>

                                    <td>
                            </form>
                            <form action="/dashboardadmin/{{ $item->id }}" method="POST">
                                @csrf
                                @method('Delete')
                                <button type="submit" style="color:red;cursor: pointer;">Hapus</button>
                            </form>
                            </td>
                            </tr>
                        @endforeach


                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
