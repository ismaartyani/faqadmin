<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('public/faq/css/reset.css')}}"> <!-- CSS reset -->
  	<link rel="stylesheet" href="{{asset('public/faq/css/style.css')}}"> <!-- Resource style -->
    <link rel="stylesheet" href="{{asset('public/faq/css/headerbr.css')}}"> <!-- css header -->
    <!--<script src="{{asset('public/js/modernizr.js')}}"></script>-->
    <!-- header -->
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  	   <title>FAQ | PANDI</title>
  </head>
  <body>
  <div class="menu">
      <header class="container">
       <div class="navbar navbar-inner">
         <div class="container">
        <div class="navbar-header">
        <img src="public/faq/image/id-my-identity.png" height="65px" />
       </div>
          <div class="collapse navbar-collapse pull-right" id="main-menu">
            <ul class="nav">
              @foreach($navigators as $navigator)
              <li class="fadeInDown animated d1 "><a href="{{$navigator['link']}}">{{$navigator['nama']}}</a></li>
              @endforeach
            </ul>
              </div>
      <!--/.nav-collapse -->
    </div>
    </header>
  </div><!--menu-->
  <section class="cd-faq">
    <ul class="cd-faq-categories">
      @foreach($kategoris as $kategori)
      <li><a href="#{{$kategori['nama']}}">{{$kategori['nama']}}</a></li>
      @endforeach
    </ul>
    <!--@foreach($kategoris as $kategori)
      @foreach($kontens as $konten)
        @if ($kategori->id == $konten->id_kategori)
          {{$konten['isi_konten']}}
        @endif
      @endforeach
      <br>
    @endforeach-->
  	<div class="cd-faq-items">
      @foreach($kategoris as $kategori)
  		<ul id="{{$kategori['nama']}}" class="cd-faq-group">
  			<li class="cd-faq-title"><h2>{{$kategori['nama']}}</h2></li>
        @foreach($kontens as $konten)
        @if ($kategori->id == $konten->id_kategori)
  			<li>
            <a class="cd-faq-trigger" style="color:#ff3333" href="#0">{{$konten['konten']}}</a>
    				<div class="cd-faq-content">
    					<p>{{$konten['isi_konten']}}</p>
    				</div> <!-- cd-faq-content -->
  			</li>
        @endif
        @endforeach
  		</ul>
      @endforeach <!-- cd-faq-group -->
      <!-- cd-faq-group -->
    </div>
    <!-- <a href="#0" class="cd-close-panel">Close</a> -->
    </section> <!-- cd-faq -->
   <!-- cd-faq-items -->
  <!-- Footer -->
      <section class="kontak">
        <h5 class="mb-1">Masih Memiliki Pertanyaan?</h5>
          <input class="MyButton" type="button" value="Hubungi Kami" onclick="window.location.href='http://pandi.id/kontak'" />
        </section>

        <footer>
          <p>Copyright © 2018<a style="color:#0a93a6; text-decoration:none;">
          </a> PANDI - Pengelola Nama Domain Internet Indonesia. All rights reserved.</p>
      </footer>
  <script src="{{asset('public/faq/js/jquery-2.1.1.js')}}"></script> <!-- Modernizr -->
  <script src="{{asset('public/faq/js/jquery.mobile.custom.min.js')}}"></script> <!-- Modernizr -->
  <script src="{{asset('public/faq/js/main.js')}}"></script>
  <!-- <script src="{{asset('public/js/custom.js')}}"></script> -->
  </body>
  </html>
