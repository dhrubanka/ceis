@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-content">
        <div class="col-12 offset-md-2 col-md-8">
            <div class="card" id="donorCard">
                <div class="card-header">
                    <h3 class="card-title">DONOR FORM</h3>
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form id="form1" method="POST" action="/mydonation/store" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="donor_name">NAME</label>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" name="name" id="donor_name" placeholder="DONOR NAME"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="address">ADDRESS</label>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" name="address" id="address" placeholder="ADDRESS"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="phone">PHONE</label>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE"><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="city">CITY/TOWN</label>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" name="city" id="city" placeholder="CITY"><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="pin">PINCODE</label>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" name="pin" id="pin" placeholder="PINCODE"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="gender">GENDER</label>
                            <div class="form-check form-check-inline col-12 col-md-3">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">MALE</label>
                            </div>
                            <div class="form-check form-check-inline col-12 col-md-3">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">FEMALE</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="blood">BLOOD GROUP</label>
                            <div class="form-check form-check-inline col-12 col-md-2">
                                <input class="form-check-input" type="radio" name="blood_group" id="A+" value="A+">
                                <label class="form-check-label" for="A+">A+</label>
                            </div>
                            <div class="form-check form-check-inline col-12 col-md-2">
                                <input class="form-check-input" type="radio" name="blood_group" id="AB+" value="AB+">
                                <label class="form-check-label" for="AB+">AB+</label>
                            </div>
                            <div class="form-check form-check-inline col-12 col-md-2">
                                <input class="form-check-input" type="radio" name="blood_group" id="B+" value="B+">
                                <label class="form-check-label" for="B+">B+</label>
                            </div>
                            <div class="form-check form-check-inline col-12 col-md-1">
                                <input class="form-check-input" type="radio" name="blood_group" id="O+" value="O+">
                                <label class="form-check-label" for="O+">O+</label>
                            </div>
                            <div class="form-check form-check-inline col-12 offset-md-4 col-md-2">
                                <input class="form-check-input" type="radio" name="blood_group" id="A-" value="A-">
                                <label class="form-check-label" for="A-">A-</label>
                            </div>
                            <div class="form-check form-check-inline col-12 col-md-2">
                                <input class="form-check-input" type="radio" name="blood_group" id="AB-" value="AB-">
                                <label class="form-check-label" for="AB-">AB-</label>
                            </div>
                            <div class="form-check form-check-inline col-12 col-md-2">
                                <input class="form-check-input" type="radio" name="blood_group" id="B-" value="B-">
                                <label class="form-check-label" for="B-">B-</label>
                            </div>
                            <div class="form-check form-check-inline col-12 col-md-1">
                                <input class="form-check-input" type="radio" name="blood_group" id="O-" value="O-">
                                <label class="form-check-label" for="O-">O-</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="posivite_image">COVID POSITIVE REPORT</label>
                            <div class="col-12 col-md-8">
                                <input type="file" class="form-control-file" name="covid_positive_image" id="posivite_image"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="recovery">DATE OF RECOVERY</label>
                            <div class="col-12 col-md-8">
                                <input type="date" class="form-control" name="recovered_date" id="recovery"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="disease">DISEASE, IF ANY</label>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" name="existing_disease" id="disease" placeholder="DISEASE"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="donated">DATE OF PREVIOUS PLASMA DONATION, IF ANY</label>
                            <div class="col-12 col-md-8">
                                <input type="date" class="form-control" name="previous_donation" id="donated"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="hospital">HOSPITAL IN WHICH YOU WERE ADMITTED</label>
                            <div class="col-12 col-md-8">
                                <input type="text" class="form-control" name="hospital_name" id="hospital" placeholder="HOSPITAL NAME"><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="identity">IDENTITY PROOF</label>
                            <div class="form-check form-check-inline col-12 col-md-3">
                                <input class="form-check-input" type="radio" name="identity" id="pan" value="pan">
                                <label class="form-check-label" for="pan">PAN CARD</label>
                            </div>
                            <div class="form-check form-check-inline col-12 col-md-3">
                                <input class="form-check-input" type="radio" name="identity" id="adhaar" value="adhaar">
                                <label class="form-check-label" for="adhaar">ADHAAR CARD</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-md-4 col-form-label" for="identity_doc">IDENTITY PROOF DOCUMENT</label>
                            <div class="col-12 col-md-8">
                                <input type="file" class="form-control-file" name="identity_photo" id="identity_doc"><br>
                            </div>
                        </div>






                        <button class="btn btn-primary" onclick="verify()">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
