<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
  <style>
		  ul.share-buttons{
		  list-style: none;
		  padding: 0;
		}

		ul.share-buttons li{
		  display: inline;
		}

		ul.share-buttons .sr-only{
		  position: absolute;
		  clip: rect(1px 1px 1px 1px);
  </style>
    @yield('head')
</head>
<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b>Cloud Mining Solutions</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/badlist">
              <i class="fa d-inline fa-lg fa-exclamation-triangle"></i> Badlist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">
              <i class="fa d-inline fa-lg fa-envelope-o"></i> Contacts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container width-fix col-sm-12">
            @include('flash::message')
	</div>

    <div class="container col-xs-12 col-sm-12 col-lg-12 col-md-12">
        @yield('content')
    </div>
	
	<div class="py-5 text-white bg-dark" >
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="lead">Sign up to our newsletter for the latest news</p>
          <form class="form-inline">
            <div class="form-group">
			{{ Form::open(array('action' => 'pagesController@subscrib', 'id' => 'subscribe-form'))}}
              <input type="email" class="form-control" placeholder="Your e-mail here"> </div>
            <button type="submit" class="btn btn-primary ml-3">Subscribe</button>
			{{ Form::close() }}
          </form>
        </div>
		
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcloud-mining.solutions&quote=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;">
            <i class="fa fa-fw fa-facebook fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fcloud-mining.solutions&text=:%20https%3A%2F%2Fcloud-mining.solutions" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;">
            <i class="fa fa-fw fa-twitter fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://plus.google.com/share?url=https%3A%2F%2Fcloud-mining.solutions" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;">
            <i class="fa fa-fw fa-google-plus text-white fa-3x"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="http://www.reddit.com/submit?url=https%3A%2F%2Fcloud-mining.solutions&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;">
            <i class="fa fa-fw fa-reddit text-white fa-3x"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fcloud-mining.solutions&title=&summary=&source=https%3A%2F%2Fcloud-mining.solutions" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;">
            <i class="fa fa-fw fa-linkedin text-white fa-3x"></i>
          </a>
        </div>
		<div class="col-4 col-md-1 align-self-center">
          <a href="mailto:?subject=&body=:%20https%3A%2F%2Fcloud-mining.solutions" target="_blank" title="Send email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;">
            <i class="fa fa-fw fa-envelope text-white fa-3x"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 Cloud-Mining.Solutions - All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
	

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
