@extends('front.layout.master')
@section('main-body')

<section class="signUp">
    <div class="container">
        <div class="pt-2">
            <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-agent-tab" data-toggle="pill" href="#pills-agent" role="tab" aria-controls="pills-agent" aria-selected="true">Agent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-business-tab" data-toggle="pill" href="#pills-business" role="tab" aria-controls="pills-business" aria-selected="false">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-freelancer-tab" data-toggle="pill" href="#pills-freelancer" role="tab" aria-controls="pills-freelancer" aria-selected="false">Freelancer</a>
                </li>
            </ul>
            <hr>
        </div>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-agent" role="tabpanel" aria-labelledby="pills-agent-tab">

                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control form-control-lg" id="firstName" aria-describedby="firstName" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control form-control-lg" id="lastName" aria-describedby="lastName" placeholder="Last Name">
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" class="form-control form-control-lg" id="phoneNumber" aria-describedby="phoneNumber" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email" aria-describedby="email" placeholder="justdial@gmail.com">
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="companyName">Company Name</label>
                            <input type="text" class="form-control form-control-lg" id="companyName" aria-describedby="companyName" placeholder="Company Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" aria-describedby="password" placeholder="Password">
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nidFront">Upload NID front side</label>
                            <input type="file" class="form-control-file" id="nidFront">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nidBack">Upload NID back side</label>
                            <input type="file" class="form-control-file" id="nidBack">
                        </div>

                    </div>


                    <div class="form-group form-check text-center">
                        <input type="checkbox" class="form-check-input" id="checkMark">
                        <label class="form-check-label" for="checkMark">I Agree to JustDial's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-lg pt-2 pl-4 pr-4 pb-2">Submit</button>
                    </div>

                </form>

            </div>



            <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">


                <form>
                    <div>
                        <label for="businessType">Select Business Type</label>
                        <select name="businessType" id="businessType" onchange="show()">
                            <option value="..." class="selected">...</option>
                            <option value="Free">Free</option>
                            <option value="Premium">Premium</option>

                        </select>
                    </div>

                    <div id="freeExpand" style="display:none;">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName1">First Name</label>
                                <input type="text" class="form-control form-control-lg" id="firstName1" aria-describedby="firstName1" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName1">Last Name</label>
                                <input type="text" class="form-control form-control-lg" id="lastName1" aria-describedby="lastName1" placeholder="Last Name">
                            </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phoneNumber1">Phone Number</label>
                                <input type="text" class="form-control form-control-lg" id="phoneNumber1" aria-describedby="phoneNumber1" placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email1">Email</label>
                                <input type="email1" class="form-control form-control-lg" id="email1" aria-describedby="email1" placeholder="justdial@gmail.com">
                            </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="companyName1">Company Name</label>
                                <input type="text" class="form-control form-control-lg" id="companyName1" aria-describedby="companyName1" placeholder="Company Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password1" class="form-control form-control-lg" id="password1" aria-describedby="password1" placeholder="Password">
                            </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nidFront1">Upload NID front side</label>
                                <input type="file" class="form-control-file" id="nidFront1">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nidBack1">Upload NID back side</label>
                                <input type="file" class="form-control-file" id="nidBack1">
                            </div>

                        </div>


                        <div class="form-group form-check text-center">
                            <input type="checkbox" class="form-check-input" id="checkMark1">
                            <label class="form-check-label" for="checkMark1">I Agree to JustDial's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-lg pt-2 pl-4 pr-4 pb-2">Submit</button>
                        </div>
                    </div>
                    <div id="premiumExpand" style="display:none;">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName2">First Name</label>
                                <input type="text" class="form-control form-control-lg" id="firstName2" aria-describedby="firstName2" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName2">Last Name</label>
                                <input type="text" class="form-control form-control-lg" id="lastName2" aria-describedby="lastName2" placeholder="Last Name">
                            </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phoneNumber2">Phone Number</label>
                                <input type="text" class="form-control form-control-lg" id="phoneNumber2" aria-describedby="phoneNumber2" placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email2" class="form-control form-control-lg" id="email2" aria-describedby="email2" placeholder="justdial@gmail.com">
                            </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="companyName">Company Name</label>
                                <input type="text" class="form-control form-control-lg" id="companyName2" aria-describedby="companyName2" placeholder="Company Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password2" aria-describedby="password2" placeholder="Password">
                            </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nidFront2">Upload NID front side</label>
                                <input type="file" class="form-control-file" id="nidFront2">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nidBack2">Upload NID back side</label>
                                <input type="file" class="form-control-file" id="nidBack2">
                            </div>

                        </div>


                        <div class="form-group form-check text-center">
                            <input type="checkbox" class="form-check-input" id="checkMark2">
                            <label class="form-check-label" for="checkMark2">I Agree to JustDial's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-lg pt-2 pl-4 pr-4 pb-2">Submit</button>
                        </div>
                    </div>


                </form>


            </div>


            <div class="tab-pane fade" id="pills-freelancer" role="tabpanel" aria-labelledby="pills-freelancer-tab">


                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstNameFree">First Name</label>
                            <input type="text" class="form-control form-control-lg" id="firstNameFree" aria-describedby="firstNameFree" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastNameFree">Last Name</label>
                            <input type="text" class="form-control form-control-lg" id="lastNameFree" aria-describedby="lastNameFree" placeholder="Last Name">
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phoneNumberFree">Phone Number</label>
                            <input type="text" class="form-control form-control-lg" id="phoneNumberFree" aria-describedby="phoneNumberFree" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="emailFree" class="form-control form-control-lg" id="emailFree" aria-describedby="emailFree" placeholder="justdial@gmail.com">
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="companyNameFree">Freelancer Profile Link</label>
                            <input type="text" class="form-control form-control-lg" id="ProfileLink" aria-describedby="ProfileLink" placeholder="Freelancer Profile Link">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="passwordFree">Password</label>
                            <input type="password" class="form-control form-control-lg" id="passwordFree" aria-describedby="passwordFree" placeholder="Password">
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nidFrontFree">Upload NID front side</label>
                            <input type="file" class="form-control-file" id="nidFrontFree">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nidBackFree">Upload NID back side</label>
                            <input type="file" class="form-control-file" id="nidBackFree">
                        </div>

                    </div>


                    <div class="form-group form-check text-center">
                        <input type="checkbox" class="form-check-input" id="checkMarkFree">
                        <label class="form-check-label" for="checkMark">I Agree to JustDial's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-lg pt-2 pl-4 pr-4 pb-2">Submit</button>
                    </div>

                </form>



            </div>
        </div>
    </div>

</section>

@endsection
