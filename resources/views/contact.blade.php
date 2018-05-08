
@extends('layouts.app')


@section('head')
    <title>Cloud Mining Solutions</title>
	<meta name="description" content="A comparison of the best and safest cloud mining solutions">
	<meta name="keywords" content="cloud, mining">
@stop

@section('content')

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-gray-dark">Contact Us</h1>
          <p class="lead mb-4">Complete all the fields below to send us a message</p>
         {{ Form::open(array('action' => 'pagesController@savecontact', 'id' => 'contact-form', 'class' => 'text-left'))}}
                    <div class="login-group">
                        <div class="form-group">
                            <label for="lg_email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="lg_email" name="lg_email" placeholder="Your Email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="lg_subject" class="sr-only">Subject</label>
                            <input type="text" class="form-control" id="lg_subject" name="lg_subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="lg_message" class="sr-only">Message</label>
                            <textarea class="form-control" id="lg_message" name="lg_message" placeholder="Message" required></textarea>
                        </div>

                    </div>
            <button type="submit" class="btn btn-secondary">Send</button>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>



    </div>

@stop

