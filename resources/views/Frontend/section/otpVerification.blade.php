@extends('Frontend.SingleContent')
@section('otpverification')
    <div id="checkout-notificatoin" class="checkout-notificatoin">
        <ul>
            <li class="judul-checkout-notification">

                <h3>Verification User</h3>


            </li>
            <form action="/customer/verif/{{ $customer[0]->id }}/{{ $product->id }}" method="post">
                @csrf

                <input readonly hidden type="text" name='nomor_telepon' value="{{ $data->nomor_telepon }}"
                    placeholder="Nomor Telepon" required>
                <input readonly hidden required type="text" name="alamat" value="{{ $data->alamat }}"
                    placeholder="Alamat">

                <input readonly hidden required type="text" value="{{ $data->gmail }}" name="gmail"
                    placeholder="Gmail">
                <input readonly hidden required type="number" value="{{ $data->jumlah_item }}" name="jumlah_item"
                    placeholder="Jumlah">
                <textarea readonly hidden required name="comment" value="{{ $data->comment }}" id="" cols="5"
                    rows="5" placeholder="Beri Kami Info">{{ $data->comment }}</textarea>



                <li class="deskripsi-checkout-notification">
                    <h4>OTP has been sent via email, please check your email!</h4>
                    <input type="text" name="otp" placeholder="please input your otp">
                </li>
                <li class="back-checkout-notification">
                    <a href="/">
                        <button type="button">Batal</button>
                    </a>
                    {{-- <input type="text" name="" value="{{ $customer[0]->id }}" id="" hidden> --}}
                    <button onclick="closecheckout()" type="submit">Confirm</button>
                </li>
            </form>
        </ul>
    </div>
@endsection
