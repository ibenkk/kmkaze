@extends('landingpage.dashboardAdmin')
@section('CreateProduct-dashboarAdmin')
    <div class="kontainer-kontent-dashboardCustomer">
        <div class="item-kontainer-kontent-dashboardCustomer">
            <div class="content-item-kontainer-kontent-dashboardCustomer">
                <div class="content2-item-kontainer-kontent-dashboardCustomer">
                    <img src="/img/landingpage/logoPT.png" alt="" width="200px" height="100%">
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
                    <h2>
                        <a href="/dashboardadmin/product"> <button>Back</button></a>
                    </h2>
                </div>


                <div class="kontainerform-checkout-item-whatsappblaster">
                    <div class="form-checkout-item-whatsappblaster">
                        <h1>Add Product :</h1>
                        <form class="input-data-from-checkout" enctype="multipart/form-data" method="POST"
                            action="/dashboardadmin/product">
                            @csrf
                            <div class="input-data-from-checkout-konten">
                                <div class="input-data">
                                    <input type="text" name="product_description" id="product_description"
                                        placeholder="Description" hidden>
                                    <input type="text" name="name_product" placeholder="Name Product" required>
                                    <select type="text" name="product_category" required>
                                        <option value="" readonly selected disabled>Select Category</option>
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
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="input-data">
                                    <input type="number" name="product_price" placeholder="Price" required>
                                    <input type="number" name="product_stock" placeholder="Stock" required>
                                    <label for="gambar">
                                        Gambar Product : </label>
                                    <input type="file" name="product_picture" placeholder="Gambar" required>


                                </div>
                            </div>
                            <div>

                                <div class="deskripsi-product">
                                    <textarea name="product_description" id="text_product_description" class="text_product_description" cols="30"
                                        rows="10" name="product_description" required></textarea>
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
