@extends('landingpage.dashboardAdmin')
@section('updateInfo-dashboardAdmin')
    <div class="kontainer-kontent-dashboardCustomer">
        <div class="item-kontainer-kontent-dashboardCustomer">
            <div class="content-item-kontainer-kontent-dashboardCustomer">
                <div class="content2-item-kontainer-kontent-dashboardCustomer">
                    <img src="/image/landingpage/logoPT.png" alt="" width="200px" height="100%">
                </div>
            </div>
            <div class="kontainer-content2-item-kontainer-kontent-dashboardCustomer">
                <div class="content3-item-kontainer-kontent-dashboardCustomer">
                    <h2>Payment Info</h2>
                    <h2>Total : {{ $paymentinfo->count() }}</h2>

                </div>
                <div class="content4-item-kontainer-kontent-dashboardCustomer">
                    <h2>
                        {{-- <select name="" id="">
                            <option value="" disabled readonly selected="">Select Category</option>
                            <option value="">All</option>
                            <option value="">Satu</option>
                            <option value="">Satu</option>
                            <option value="">Satu</option>
                        </select> --}}
                    </h2>
                </div>
                <div class="contentUpdateInfo-item-kontainer-kontent-dashbordCustomer">
                    @if ($paymentinfo->count() > 0)
                        @foreach ($paymentinfo as $item)
                            <div class="card-contentUpdateInfo">
                                <ul>
                                    <li class="judul-contentUpdateInfo">
                                        <h3>{{ $item->nomor_telepon }}</h3>
                                    </li>
                                    <li class="deskripsidetailupdate">
                                        {{ Str::limit($item->alamat, 76, '...') }}
                                    </li>
                                    <li class="detailupdate">
                                        <h5>{{ $item->product->name_product }}</h5>
                                        <a href="/dashboardadmin/updateinfo/{{ $item->id }}"> <button
                                                class="button-detailsupdate" style="cursor: pointer;"> See
                                                Detail</button></a>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    @else
                        <div style="display:flex; height:30vh; align-items:center; opacity:45%;">
                            Your<p style="color:rgb(97, 194, 162); margin:0px 5px;">Payment Info</p> is not <p
                                style="color:red; margin:0px 5px;"> Found</p>
                        </div>
                    @endif






                </div>

            </div>

        </div>
    </div>
@endsection
