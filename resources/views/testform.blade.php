@extends('layouts.master')
@section('title', 'Contact Us | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    <div class="col-lg-9 order-1 order-lg-2">
							
        <div class="offset-anchor" id="contact-sent"></div>

        
        <div class="overflow-hidden mb-1">
            <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
        </div>
        @if(session('success'))
            <div class="overflow-hidden mb-4 pb-3 bg-danger">
                <p class="mb-0">Post Success</p>
            </div>
        @endif
        

        <form id="contactFormAdvanced" action="{{ url('ixony/testform/action') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            <input type="hidden" value="true" name="emailSent" id="emailSent">
            {{-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="required text-2">Full Name</label>
                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="">
                </div>
                <div class="form-group col-md-6">
                    <label class="required text-2">Email Address</label>
                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Subject</label>
                    <select data-msg-required="Please enter the subject." class="form-control" name="subject" id="subject" required="">
                        <option value="">...</option>
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                        <option value="Option 4">Option 4</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <p class="mb-2">Checkboxes</p>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option1"> 1
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option2"> 2
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option3"> 3
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <p class="mb-2">Radios</p>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio1" value="option1"> 1
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio2" value="option2"> 2
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio3" value="option3"> 3
                        </label>
                    </div>
                </div>
            </div> --}}
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Attachment</label>
                    <input class="d-block" type="file" name="file" id="attachment">
                </div>
            </div>
            {{-- <div class="form-row">
                <div class="form-group col-md-12 mb-4">
                    <label class="required text-2">Message</label>
                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required=""></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <hr>
                </div>
            </div> --}}
            <div class="form-row">
                <div class="form-group col-md-12 mb-5">
                    <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading...">
                </div>
            </div>
        </form>

    </div>

</div>


    

    

    
@endsection