<!DOCTYPE html>
<html lang="en" class="html-home-page">

@extends('layouts.website')

@section('title', 'Contact')
@section('content')

<main>
    <!-- ////////////BANNER//////////////// -->
    <div class="main-banner">
        <img class="img-fluid" src="images/thumbs/1920x450.png" />
    </div>
    <!--////////////// /. BANNER////////// -->
    <div class="contact-page">
        <div class="sub-breadcrumb">
            <div class="container">
                <img src="assets/img/icon/hospital_ico.svg" /> <span>Contact Information</span>
            </div>
        </div>
        <!-- FORM -->
        <div class="contact-form">
            <div class="container">
                <form method="post" id="send-email-form" action="https://yourwebsite.com/Booking/SendEmail">
                <div class="contact_form">
                    <div class="row mt-2">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Branch *</label>
                                <select class="custom-select" style="font-size: 14px;color: black;" id="gender2">
                                    <optgroup selected>Branches</optgroup>
                                        <option value="7">Lorem Ipsum is simply dummy text of the printing and typesetting industry</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Salutation</label>
                                <select style="font-size: 14px;color: black;"  class="custom-select" name="Gender" required>
                                    <option selected value='false'>Mr.</option>
                                    <option value="true">Mrs.</option>
                                    <option value="true">Miss.</option>
                                    <option value="true">Ms.</option>
                                    <option value="true">Dr.</option>
                                    <option value="true">Sir.</option>
                                    <option value="true">Madam.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" name="FullName" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Phone number *</label>
                                <input type="number" name="PhoneNumber" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Leave a message</label>
                                <textarea name="Message" required class="form-control" placeholder="nội dung lời nhắn">
                                    </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-dark-blue">SEND</button>
                        </div>
                    </div>
                </div>
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8CozCXdagAJGnX9UbvprnYcL2Z3edtPLYB0077Xnslg3X4wD02mB6eyr0wIBbD8U_F6_RYVb5UZBoHDYrGYiMf1FKES4oikvOlbso1O5jLtFkcijOOtCbpm23UDWeK7EVXDi85edYIfJ8-5MG1gsHhU" /></form>
            </div>
        </div>
        <!-- /. FORM -->
        <div class="map">
            <h4 class="row text-center mt-2">SITE MAP</h4>
            <iframe
                src="https://maps.google.com/maps?q=45%20Th%C3%A0nh%20Th%C3%A1i,%20Ph%C6%B0%E1%BB%9Dng%2014,%20Qu%E1%BA%ADn%2010,%20Th%C3%A0nh%20ph%E1%BB%91%20H%E1%BB%93%20Ch%C3%AD%20Minh&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</main>

@endsection

</html>
