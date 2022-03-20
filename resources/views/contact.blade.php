@extends('layouts.master')
@section('title', 'Contact Us | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    <div class="row pt-5 mt-5 mb-4">
        <div class="col text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
            <h2 class="font-weight-bold mb-1">Contact Us</h2>
            <p>We would love to hear from you.</p>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">

            <div class="offset-anchor" id="contact-sent"></div>

            
            <h2 class="font-weight-bold text-7 mt-2 mb-0">Contact Us</h2>
            <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

            <form id="contactFormAdvanced" action="{{ url('contact/send') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session('success'))
                    <div class="contact-form-success alert alert-success mt-4">
                        <strong>Thank You!</strong> {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-2">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label mb-1 text-2">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" id="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label mb-1 text-2">Subject</label>
                        <select data-msg-required="Please enter the subject." class="form-control text-3 h-auto py-2" name="subject" id="subject" required>
                            <option value="">...</option>
                            <option value="Sales">Sales</option>
                            <option value="Support">Support</option>
                            <option value="Admin">Admin</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 mb-4">
                        <label class="form-label mb-1 text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control text-3 h-auto py-2" name="message" id="message" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 mb-5">
                        <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-5">

            <div class="overflow-hidden mb-1">
                <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Get in <strong>Touch</strong></h4>
            </div>
            <div class="overflow-hidden mb-3">
                <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">You can also contact us with other channels provided below.</p>
            </div>
            

            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                <h4 class="text-primary pt-5">Our <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> House: 24, Road: 04, Block: K, Banasree, Dhaka, 1219, Bangladesh</li>
                    <li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong> <a href="tel:8801841632703"><span>+88 01841 632 703</span></a>  </li>
                    <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:info@ixony.com"><span>info@ixony.com</span></a></li>
                </ul>

                <div class="row lightbox mt-4 mb-0 pb-0" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    
                    <div class="col-md-4 mb-4 mb-md-0">
                        <a class="img-thumbnail p-0 border-0 d-block" href="{{ asset('assets/images/official/of2.jpg') }}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{ asset('assets/images/official/of2.jpg') }}" alt="Ixony Engineering Limited" style="width: 150px; height: 80px" >
                        </a>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <a class="img-thumbnail p-0 border-0 d-block" href="{{ asset('assets/images/official/of1.jpg') }}" data-plugin-options="{'type':'image'}">
                            <img class="img-fluid" src="{{ asset('assets/images/official/of1.jpg') }}" alt="Ixony Engineering Limited" style="width: 150px; height: 80px">
                        </a>
                    </div>
                </div>

                <h4 class="text-primary pt-5">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-2">
                    <li><i class="far fa-clock top-6"></i> Saturday - Thursday - 10:00 AM to 06:00 PM</li>
                    <li><i class="far fa-clock top-6"></i> Friday - Closed</li>
                </ul>
            </div>

        </div>

    </div>

</div>


    

    

    
@endsection