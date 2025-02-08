<div wire:poll>
    <div class="content4-item-kontainer-kontent-dashboardCustomer">
        <h2>
            <select name="" id="" wire:model='category'>
                <option value="" disabled readonly selected="">Select Category</option>
                <option value="All">All</option>
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
        </h2>
        <h2>
            <a href="/dashboardadmin/product/create">
                <button
                    style="cursor: pointer; font-size: 19px; color: rgb(81, 117, 105); border-bottom: 1px solid black; padding:5px 10px;">Add
                    Product</button>
            </a>
        </h2>
    </div>
    <div class="contentUpdateInfo-item-kontainer-kontent-dashbordCustomer">
        @if ($products->count() > 0)

            @foreach ($products as $product)
                <div class="card-contentUpdateInfo">
                    <ul>
                        <li class="judul-contentUpdateInfo">
                            <h3>{{ $product->name_product }}</h3>
                        </li>
                        <li class="deskripsidetailupdate">
                            {{ Str::limit($product->product_description, 76, '...') }}
                        </li>
                        <li class="detailupdate">
                            <h5>{{ $product->product_category }}</h5>
                            <a href="/dashboardadmin/product/{{ $product->id }}"> <button class="button-detailsupdate">
                                    See
                                    Detail</button></a>
                        </li>
                    </ul>
                </div>
            @endforeach
        @else
            <div style="display:flex; height:30vh; align-items:center; opacity:45%;">
                Product <p style="color:rgb(97, 194, 162); margin:0px 5px;"> {{ $category }}</p> is not <p
                    style="color:red; margin:0px 5px;"> Found</p>
            </div>
        @endif






    </div>
</div>
