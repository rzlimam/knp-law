@extends('layouts.main')

@section('container')
<!-- Contact Us -->
<div class="contact-us container-fluid no-padding">
    <div class="container">
        <div class="section-padding"></div>
        <div class="col-md-4 col-sm-4">
            <div class="contact-content">
                <img src="images/icon/contact-ic-1.png" alt="contact-ic-1">
                <h3>Our Location</h3>
                <p>Jl. Inspeksi Kalimalang No. 36B, Setiadarma, Tambun Selatan, Kabupaten Bekasi, Jawa Barat – 17510</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="contact-content">
                <img src="images/icon/contact-ic-2.png" alt="contact-ic-2">
                <h3>Contact Us Anytime</h3>
                <p>Mobile: 0821-5850-0065</p>
                <p><br></p>
                <p><br></p>
                <p><br></p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="contact-content">
                <img src="images/icon/contact-ic-3.png" alt="contact-ic-3">
                <h3>Email</h3>
                <p>kisworoandpartners@gmail.com</p>
                <p><br></p>
                <p><br></p>
            </div>
        </div>
    </div><!-- Container /- -->
    <div class="section-padding"></div>
</div>
<!-- Contact Us /- -->

<!-- Contact Form /- -->
<div class="contact-form container-fluid no-padding">
    <div class="container">
        <div class="section-header">
            <h5>Contact Form</h5>
            <h3>Feel free to tell us what you need</h3>
        </div>

        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        
        <form name="send-mail" id="send-mail" method="post" action="{{url('contact-form')}}">
            @csrf
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="input_name" name="contact_name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="input_email" name="contact_email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="input_phone" name="contact_phone" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="input_subject" name="contact_subject" placeholder="Subject" required>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <textarea class="form-control" rows="6" id="input_message" name="contact_message" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-primary">Send Now</button>
            </div>
        </form>

    </div><!-- Container /- -->
</div><!-- Contact Form /- -->
    
@endsection