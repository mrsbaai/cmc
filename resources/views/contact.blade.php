
@extends('layouts.app')


@section('head')
    <title>Cloud Mining Solutions</title>
	<meta name="description" content="A comparison of the best and safest cloud mining solutions">
	<meta name="keywords" content="cloud, mining">
@stop

@section('content')
<div class="container marketing col-sm-12 text-center">

        <!-- Where all the magic happens -->
        <!-- LOGIN FORM -->
        <div class="text-center" style="padding:50px 0">
            <div class="logo">Contact Us</div>
            <!-- Main Form -->
            <div class="login-form-1" style="  width: 600px;max-width: 600px;">


                {{ Form::open(array('action' => 'pagesController@savecontact', 'id' => 'contact-form', 'class' => 'text-left'))}}

                <div class="main-login-form">
                    @include('flash::message')
                    <div class="login-group">
                        <div class="form-group">
                            <label for="lg_email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="lg_email" name="lg_email" placeholder="email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="lg_subject" class="sr-only">Subject</label>
                            <input type="text" class="form-control" id="lg_subject" name="lg_subject" placeholder="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="lg_message" class="sr-only">Message</label>
                            <textarea class="form-control" id="lg_message" name="lg_message" placeholder="message" required></textarea>
                        </div>

                    </div>
                    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                </div>

                {{ Form::close() }}
            </div>
            <!-- end:Main Form -->
        </div>


    </div>

@stop

