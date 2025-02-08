@extends('landingpage.dashboardAdmin')
@section('EditProduct-dashboarAdmin')
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
                    <h2>Vape Store</h2>

                </div>
                <div class="content3-item-kontainer-kontent-dashboardCustomer">
                    <h2>Dashboard Admin</h2>
                </div>
                <div class="content3-item-kontainer-kontent-dashboardCustomer">
                    <h2><a href="/dashboardadmin/product/{{ $product->id }}"><button>Back</button></a></h2>
                </div>


                <div class="kontainerform-checkout-item-whatsappblaster">
                    <div class="form-checkout-item-whatsappblaster">
                        <h1>Edit Product :</h1>

                        <form class="input-data-from-checkout" enctype="multipart/form-data" method="POST"
                            action="/dashboardadmin/{{ $product->id }}">
                            @csrf
                            @method('PUT')
                            <div class="input-data-from-checkout-konten">
                                <div class="input-data">
                                    <input type="text" name="product_description" id="product_description"
                                        placeholder="Description" hidden value="{{ $product->product_description }}">
                                    <input type="text" name="name_product" placeholder="Name Product" required
                                        value={{ $product->name_product }}>
                                    <select value={{ $product->product_category }} type="text" name="product_category"
                                        required>

                                        <option value="" readonly disabled>Select Category</option>
                                        <option value={{ $product->product_category }} readonly selected hidden>
                                            {{ $product->product_category }}</option>

                                        <option value="Mod">Mod</option>
                                        <option value="Pod">Pod</option>
                                        <option value="Rda">Rda</option>
                                        <option value="Freebase">Freebase</option>
                                        <option value="Saltnic">Saltnic</option>
                                        <option value="Kapas">Kapas</option>
                                        <option value="Coil">Coil</option>
                                        <option value="Toolkit">Toolkit</option>
                                        <option value="Charge">Charge</option>
                                    </select>
                                    <select type="text" name="best_product" required>
                                        <option value="" readonly selected disabled>Best Product?
                                        </option>
                                        @if ($product->best_product == '1')
                                            <option value={{ $product->best_product }} readonly selected hidden>
                                                Best Product</option>
                                        @else
                                            <option value={{ $product->best_product }} readonly selected hidden>
                                                No Best Product</option>
                                        @endif

                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="input-data">
                                    <input type="number" value={{ $product->product_price }} name="product_price"
                                        placeholder="Price" required>
                                    <input type="number" value={{ $product->product_stock }} name="product_stock"
                                        placeholder="Stock" required>
                                    <label for="product_picture">
                                        Gambar Product : {{ $product->product_picture }}</label>
                                    <input type="file" name="product_picture" placeholder="Gambar">


                                </div>
                            </div>
                            <div>

                                <div class="deskripsi-product">
                                    <textarea name="product_description" id="text_product_description" class="text_product_description" cols="30"
                                        rows="10" name="product_description" required>{{ $product->product_description }}</textarea>
                                </div>
                                <div class="submit-form-whatsappblaster">
                                    <h2>
                                    </h2>
                                    <button onclick="changevalue()" type="submit"> Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>

        </div>
    </div>
    <script>
        textarea = document.getElementById('text_product_description')
        inputchange = document.getElementById('product_description')


        function changevalue() {
            inputchange.value = textarea.value

        }
    </script>
@endsection
