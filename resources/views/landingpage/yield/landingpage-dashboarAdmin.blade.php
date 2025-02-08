@extends('landingpage.dashboardAdmin')
@section('landingpage-dashboardAdmin')
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
                    @livewire('realtimedate')
                </div>

                {{-- Keterangan nya --}}
                @if (auth()->user()->isadmin == '1')
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
                                    Service : Penjualan
                                </li>
                                <li>
                                    Profit :{{ $profit }}
                                </li>
                            </ul>
                        </div>
                        <div class="item3-content5-item-kontainer-kontent-dashboardCustomer">

                            <ul>
                                <li>
                                    company : Kmekaze VapeStore
                                </li>
                                <li>
                                    Citayam, Depok,Jawa Barat
                                </li>
                            </ul>
                        </div>

                    </div>
                @endif

                <div class="content6-item-kontainer-kontent-dashboardCustomer">
                    <table>
                        <tr>
                            <th>Nomor Telepon</th>
                            <th>Item</th>
                            <th>Harga</th>
                            <th>Total Yang Harus Dibayar</th>
                            <th>Status</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th colspan="2">Action</th>
                        </tr>
                        @foreach ($penjualan as $item)
                            <tr>
                                <td>{{ $item->nomor_telepon }}</td>
                                <td>{{ $item->product->name_product }}</td>
                                <td>{{ $item->product->product_price }}</td>
                                <td>RP. {{ $item->total }}</td>
                                @if ($item->sudah_bayar)
                                    <td style="color: rgb(71, 190, 71);">Sudah Bayar</td>
                                @else
                                    <td style="color: tomato;">Belom Bayar</td>
                                @endif
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->updated_at }}</td>

                                <td> <a href="/dashboardadmin/{{ $item->id }}/edit"
                                        style="color:rgb(184, 184, 60); text-decoration:none;">Edit </a>
                                </td>

                                <td>
                                    <form action="/dashboardadmin/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" style="color:rgb(215, 4, 4);">Hapus</button>
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
