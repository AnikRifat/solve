@extends('front.layout.master')
@section('main-body')

<section class="bkash">
    <div class="container">
        <div class="text-center mt-4 mb-4">
            <h3 class="text-info font-weight-bold text-uppercase">Bkash Payment System</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">

                <div class="text-center mt-4 mb-4">
                    <h4 class="text-success">How can you send Bkash payment using your personal Bkash account</h4>
                </div>

                <div>
                    <p>We have our personal Bkash account. We accept from all of your Bkash account personal or merchant bikash number. You can send us payment via your personal Bkash or go to any nearest Bkash agent and send us your packages amount money to our Bkash number.</p>
                </div>

                <div>
                    <ul class="list-unstyled">
                        <li class="font-weight-bold">(Please add extra 2% Bkash charge with your amount with bill)</li>
                        <li class="font-italic mb-2">To send us payment using your personal account, use the following steps-</li>
                        <li>01 - Go to bKash Mobile Menu by dialing *247#</li>
                        <li>02 - Choose “Send Money”</li>
                        <li>03 - Enter our bKash Account Number 017*******</li>
                        <li>04 - Enter the amount you want to send</li>
                        <li>05 - Enter a reference about the transaction. (Do not use more than one word, avoid space or special characters)</li>
                        <li>06 - Now enter your bKash Mobile Menu PIN to confirm the transaction</li>
                        <li class="font-weight-bold">Done! You will receive confirmation message from bKash.</li>

                    </ul>

                    <p class="text-center">For more about this information or view demo <a href="http://www.bkash.com/products-services/send-money">go here.</a></p>
                </div>
            </div>

            <div class="col-md-6 mb-4">

                <div class="text-center mt-4 mb-4">
                    <h2 class="text-success">How can you send Bkash payment using your merchant bKash Account</h4>
                </div>

                <div>
                    <p>We have our personal Bkash account. We accept from all of your Bkash account personal or merchant bikash number. You can send us payment via your personal Bkash or go to any nearest Bkash agent and send us your packages amount money to our Bkash number.</p>
                </div>

                <div>
                    <ul class="list-unstyled">
                        <li class="font-weight-bold">(Please add extra 2% Bkash charge with your amount with bill)</li>
                        <li class="font-italic mb-2">To send us payment using your personal account, use the following steps-</li>
                        <li>01 - Go to bKash Mobile Menu by dialing *247#</li>
                        <li>02 - Choose “Payment”</li>
                        <li>03 - Enter Our Merchant bKash Account Number: 0184*******</li>
                        <li>04 - Enter the amount you want to pay</li>
                        <li>05 - Enter a reference against your payment (your reference must be your invoice number)</li>
                        <li>06 - Enter the Counter Number: 0</li>
                        <li>07 - Now enter your bKash Mobile Menu PIN to confirm</li>

                        <li class="font-weight-bold">Done! You will receive confirmation message from bKash.</li>

                    </ul>

                    <p class="text-center">For more about this information or view demo <a href="http://www.bkash.com/products-services/send-money">go here.</a></p>
                </div>
            </div>







        </div>

        <div class="">


            <!-- Form -->

            <div class="bkash-form">
                <div class="text-center mt-4 mb-4">
                    <h4 class="text-success">After send payment please fill up the form.</h4>
                    <hr>
                </div>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control mt-2 mb-2 form-control-lg" id="FullName" aria-describedby="FullName" placeholder="Enter Your Full Name">

                        <input type="email" class="form-control mt-2 mb-2 form-control-lg" id="bkash-email" aria-describedby="bkash-email" placeholder="Enter Your Email">
                        <input type="text" class="form-control mt-2 mb-2 form-control-lg" id="phonenumber" aria-describedby="phonenumber" placeholder="Enter Your Phone Number">
                        <input type="text" class="form-control mt-2 mb-2 form-control-lg" id="bkash-TrxID" aria-describedby="bkash-TrxID" placeholder="Enter the Bkash TrxID">

                    </div>

                    <div class="text-center">
                        <button class="btn btn-lg btn-info ">Submit</button>
                    </div>
                </form>
            </div>
        </div>




    </div>
</section>
@endsection