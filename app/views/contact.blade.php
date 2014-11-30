@extends('layouts.master')

@section('head')
    @parent
    <title>About Page</title>
@stop

@section('content')
            <!-- Blade Template engine -->
            {{ Form:: open(array('url' => 'contact_request')) }} <!--contact_request is a router from Route class-->
 
            <ul class="errors">
                @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
                @endforeach
            </ul>
 
            {{ Form:: label ('first_name', 'First Name*' )}}
            {{ Form:: text ('first_name', '' )}}
 
            {{ Form:: label ('last_name', 'Last Name*' )}}
            {{ Form:: text ('last_name', '' )}}
 
            {{ Form:: label ('email', 'E-mail Address*') }}
            {{ Form:: email ('email', '', array('placeholder' => 'me@example.com')) }}
           
            {{ Form:: label ('message', 'Message*' )}}
            {{ Form:: textarea ('message', '')}}
 
            {{ Form::reset('Clear', array('class' => 'you css class for button')) }}
            {{ Form::submit('Send', array('class' => 'you css class for button')) }}
 
            {{ Form:: close() }}


<section id="content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d76202.99275875361!2d-6.250085299999999!3d53.355006749999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1417376863415" width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
                    <form id="contactform" action="#" method="post" class="validateform" name="send-contact">
                        <div id="sendmessage">
                             Your message has been sent. Thank you!
                        </div>
                        <div class="row">
                            <div class="col-lg-4 field">
                                <input type="text" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-4 field">
                                <input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-4 field">
                                <input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-12 margintop10 field">
                                <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
                                <div class="validation">
                                </div>
                                <p>
                                    <button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
                                    <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>  
    @stop
@stop