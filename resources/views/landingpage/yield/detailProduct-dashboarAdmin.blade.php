@extends('landingpage.dashboardAdmin')
@section('detailProduct-dashboardAdmin')
    <div class="kontainer-kontent-dashboardCustomer">
        <div class="item-kontainer-kontent-dashboardCustomer">
            <div class="content-item-kontainer-kontent-dashboardCustomer">
                <div class="content2-item-kontainer-kontent-dashboardCustomer">
                    <img src="/upload_foto/product/{{ $product->product_picture }}" alt="" width="200px"
                        height="100%">
                </div>
            </div>
            <div class="kontainer-content2-item-kontainer-kontent-dashboardCustomer">
                <div class="content3-item-kontainer-kontent-dashboardCustomer">
                    <h2>{{ $product->name_product }}</h2>

                </div>
                <div class="content4-item-kontainer-kontent-dashboardCustomer">
                    <h2>{{ $product->product_category }}</h2>
                    @if ($product->best_product)
                        <h2>Best Product</h2>
                    @else
                        <h2>No Best Product</h2>
                    @endif
                    </h2>
                    <h2>{{ $product->product_stock }} Stock</h2>
                </div>
                <div class="back-dashboardcustomer">
                    <a href="/dashboardadmin/product"> <button>Back</button></a>
                    <a href="/dashboardadmin/product/{{ $product->id }}/edit"> <button>Edit</button></a>
                    <form action="/dashboardadmin/product/{{ $product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button></a>
                    </form>
                </div>
                <div class="deskripsi-updatedetail">
                    <div class="isi-deskripsi-updatedetail">

                        <div class="kopsurat-isi-deskripsi-updatedetail">
                            <h2>Rp {{ $product->product_price }}</h2><br>
                            <p>Created At : {{ $product->created_at }}</p>
                        </div>

                        <div class="isi-update">
                            {{ $product->product_description }}
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
@endsection
