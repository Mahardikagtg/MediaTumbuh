<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Checkout</title>
</head>

<div class="container">
    <div class="py-5 text-center">
        <h1 class="logo" href="/">MediaTumbuh</h1>
        <h2>Checkout form</h2>
        <p class="lead">Fill the form to complete the transaction.</p>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><?php echo $barang -> NamaBarang ?></h6>
                        <small class="text-muted"><?php echo $barang -> DeskripsiBarang ?></small>
                    </div>
                    <span class="text-muted">Rp <?php echo $barang -> HargaBarang ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Biaya Administrasi</h6>
                        <small class="text-muted"></small>
                    </div>
                    <span class="text-muted">Rp 2000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Biaya Pengiriman</h6>
                        <small class="text-muted"></small>
                    </div>
                    <span class="text-muted">Rp 12000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Price (Rp)</span>
                    <strong><?php echo ($barang -> HargaBarang)+2000+12000; ?></strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate="" action="/buy/<?php echo $barang -> id ?>" method="POST">
            @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Full Name</label>
                        <input type="text" class="form-control" id="firstName" name="namalengkap" placeholder="" value="<?php echo $user -> nama ?>" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                </div>
                    <input type="hidden" class="form-control" name="username" id="username" placeholder="Username" required="" value="<?php echo $user -> username ?>">
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="" value="<?php echo $user -> email ?>">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="alamat" placeholder="1234 Main St" required="" value="<?php echo $user -> alamat ?>">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" name="alamat2" placeholder="Apartment or suite">
                </div>
                <div class="mb-3">
                    <label for="zip">Postal Code Main Address</label>
                    <input type="text" class="form-control" name="kodepos" placeholder="" required="" value="<?php echo $user -> kodepos ?>">
                    <div class="invalid-feedback"> Zip code required. </div>
                </div>
                <div class="mb-3">
                    <label for="deliv">Delivery Shop</label>
                    <select id="deliv" name="toko">
                        @foreach($toko as $tko)
                        <option value="<?php echo $tko->idtoko ?>"><?php echo $tko->AlamatToko ?></option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback"> Delivery Shop Required. </div>
                </div>
                <div class="mb-3">
                    <label for="ship">Shipping Options</label>
                    <select id="deliv" name="ship">
                        <option value="JNE">JNE</option>
                        <option value="JNE">JNT</option>
                    </select>
                    <div class="invalid-feedback"> Delivery Shop Required. </div>
                </div>
                <hr class="mb-4">
                <h4 class="mb-3">Payment</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="" value="Credit Card">
                        <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="" value="Debit Card">
                        <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="" value="PayPal">
                        <label class="custom-control-label" for="paypal">PayPal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" name="ccname" placeholder="" required="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback"> Name on card is required </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" name="ccnumber" placeholder="" required="">
                        <div class="invalid-feedback"> Credit card number is required </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" name="ccexpiration" placeholder="" required="">
                        <div class="invalid-feedback"> Expiration date required </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" name="cccvv" placeholder="" required="">
                        <div class="invalid-feedback"> Security code required </div>
                    </div>
                    <input type="hidden" value="<?php echo $barang -> id ?>" name="barangid" />
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Checkout Now!</button>
            </form>
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021 MediaTumbuh</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

<style>
.container {
  max-width: 960px;
}

.lh-condensed { line-height: 1.25; }
</style>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}())
</script>