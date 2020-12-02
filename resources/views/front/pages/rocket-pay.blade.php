@extends('front.layout.master')
@section('main-body')
<section class="rocket">
    <div class="container">
        <div class="text-center mt-4 mb-4">
            <h3 class="text-info font-weight-bold text-uppercase">ROCKET PAYMENT (DBBL MOBILE BANKING)</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="text-center mt-4 mb-4">
                    <h4 class="text-success">How can you send Rocket payment using your personal Rocket account</h4>
                </div>



                <div>
                    <ul class="list-unstyled">
                        <li class="font-weight-bold">(Please add extra 2% Rocket charge with your amount with bill)</li>
                        <li class="font-italic mb-2">If you have a Rocket account then Dial *322# from your mobile handset and follow the steps below:-</li>
                        <li>01 - Choose “Send Money”</li>
                        <li>02 - Enter our Rocket Account Number 0172*******</li>
                        <li>03 - Enter the amount you want to send</li>
                        <li>04 - Now enter your Ricket Mobile Menu PIN to confirm the transaction</li>

                        <li class="font-weight-bold">Done! You will receive confirmation message from Rocket.</li>

                    </ul>

                    <p class="text-center">For more about this information or view demo <a href="https://www.dutchbanglabank.com/rocket/bill-payment.html">go here.</a></p>
                </div>
            </div>
            <div class="col-md-6">


                <!-- Form -->

                <div class="rocket-form">
                    <div class="text-center mt-4 mb-4">
                        <h4 class="text-success">After send payment please fill up the form.</h4>
                        <hr>
                    </div>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control mt-2 mb-2 form-control-lg" id="FullName" aria-describedby="FullName" placeholder="Enter Your Full Name">

                            <input type="email" class="form-control mt-2 mb-2 form-control-lg" id="rocket-email" aria-describedby="rocket-email" placeholder="Enter Your Email">
                            <input type="text" class="form-control mt-2 mb-2 form-control-lg" id="phonenumber" aria-describedby="phonenumber" placeholder="Enter Your Phone Number">
                            <input type="text" class="form-control mt-2 mb-2 form-control-lg" id="bkash-TrxID" aria-describedby="bkash-TrxID" placeholder="Enter the Rocket Transaction ID">

                        </div>

                        <div class="text-center">
                            <button class="btn btn-lg btn-info ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>




    </div>
</section>
@endsection