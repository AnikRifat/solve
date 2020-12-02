@extends('front.layout.master')
@section('main-body')
<section class="free-listing-section">
    <div class="container">
        <div class="free-listing">
            <form action="">
                <h5>Get the <span class="font-weight-bold bg-info p-2">TOP POSITION</span> , place your AD with Justdial</h5>
                <h4 class="text-info text-center ">Enter your details below</h4>
                <hr>
                <div class="form-row">

                    <div class="form-group col-md-8">

                        <input type="text" class="form-control form-control-lg" id="companyName" aria-describedby="companyName" placeholder="Company Name *">

                    </div>
                    <div class="form-group col-md-4">

                        <input type="text" class="form-control form-control-lg" id="city" aria-describedby="city" placeholder="City *">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">


                        <select id="title" class="form-control form-control-lg">
                            <option selected>Title</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Dr.">Dr.</option>

                        </select>
                    </div>
                    <div class="form-group col-md-6">

                        <input type="text" class="form-control form-control-lg" id="firstName" aria-describedby="firstName" placeholder="First Name *">

                    </div>
                    <div class="form-group col-md-4">

                        <input type="text" class="form-control form-control-lg" id="lastName" aria-describedby="lastName" placeholder="Last Name *">

                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">


                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+91</div>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="mobileNo" placeholder="Mobile No">
                        </div>
                    </div>
                    <div class="form-group col-md-6">

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <select id="inputState" class="form-control form-control-lg">
                                    <option selected value="381">381</option>
                                    <option value="3823">3823</option>
                                    <option value="3825">3825</option>


                                </select>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="landlineNo" placeholder="Landline No">
                        </div>
                    </div>


                </div>



                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-info">Submit</button>
                </div>

            </form>
        </div>

    </div>
</section>

@endsection