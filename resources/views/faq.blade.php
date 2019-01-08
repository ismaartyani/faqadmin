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
              <li class="fadeInDown animated d1 "><a href="#" class="active" id="home" menuid="0" followlink="true" >Home</a></li>
              <li class="fadeInDown animated d2"><a href="#" menuid="1" followlink="true">About</a></li>
              <li class="dropdown fadeInDown animated d3">
              <a href="#" class="trigger right-caret">Service</a>
              <!--<ul class="firstlevel dropdown-menu sub-menu" style="display: none;">
              <li class="twolevel">
              <a class="trigger right-caret">Email Support</a>
               <!--   <ul class="thirdlevel dropdown-menu sub-menu" style="margin-left: -563px; display: none;">
                <li><a href="#" menuid="220" followlink="true">ŞİRKET BİRLEŞME & SATIN ALMA</a></li>
                <li><a href="#" menuid="221" followlink="true">HALKA ARZ</a></li>
                <li><a href="#" menuid="222" followlink="true">TAHVİL/BONO İHRACI</a></li>
                <li><a href="#" menuid="223" followlink="true">DANIŞMANLIK</a></li>
                </ul>-->
              </li>
              <!--<li><a href="#" menuid="224" followlink="true">Router Support</a></li>
              <li class="twolevel">
              <a class="trigger right-caret">Antivirus Support</a>
              <!-- <ul class="thirdlevel dropdown-menu sub-menu">
              <li><a href="#Forex" menuid="311" followlink="true">FOREX</a></li>
              <li><a href="#CFD" menuid="312" followlink="true">CFD</a></li>
              <li><a href="#Hisse" menuid="3" followlink="true">HİSSE/VİOP</a></li>
              <li><a href="#Turev" menuid="4" followlink="true">TÜREV</a></li>
              <li><a href="#UluslararasiPiyasalar" menuid="5" followlink="true">ULUSLARARASI PİYASALAR</a></li>
                                          </ul>-->
              <!--</li>
                <li><a href="#Varlik-Yonetimi" menuid="10" followlink="true">Quickbook Support</a></li>
                <li><a href="#Varlik-Yonetimi" menuid="10" followlink="true">Printer Support</a></li>
                <li><a href="#Varlik-Yonetimi" menuid="10" followlink="true">Game Support</a></li>
              </ul>-->
              <!--</li>-->
              <li class="fadeInDown animated d3"><a href="#Iletisim" menuid="11" followlink="true">Dislaimer</a></li>
              <li class="fadeInDown animated d2"><a href="#" menuid="1" followlink="true">Blog</a></li>
              <li class="fadeInDown animated d2"><a href="#" menuid="1" followlink="true">Contact Us</a></li>
              </ul>
              </div>
      <!--/.nav-collapse -->
    </div>
    </header>
  </div><!--menu-->
  <section class="cd-faq">
    <ul class="cd-faq-categories">
      @foreach($employees as $employee)
      <li><a href="{{$employee['judul']}}">{{$employee['nama']}}</a></li>
      @endforeach
    </ul>
  	<div class="cd-faq-items">
  		<ul id="umum" class="cd-faq-group">
  			<li class="cd-faq-title"><h2>Umum</h2></li>
  			<li>
          @foreach($umum as $konten)
            <a class="cd-faq-trigger" style="color:#ff3333" href="#0">{{$konten['konten']}}</a>
    				<div class="cd-faq-content">
    					<p>{{$konten['isi_konten']}}</p>
    				</div> <!-- cd-faq-content -->
          @endforeach
  			</li>
  		</ul> <!-- cd-faq-group -->

  		<ul id="mobile" class="cd-faq-group">
  			<li class="cd-faq-title"><h2>Mobile</h2></li>
  			<li>
          @foreach($mobile as $konten)
            <a class="cd-faq-trigger" style="color:#ff3333" href="#0">{{$konten['konten']}}</a>
    				<div class="cd-faq-content">
    					<p>{{$konten['isi_konten']}}</p>
    				</div> <!-- cd-faq-content -->
          @endforeach
  			</li>

  		<ul id="account" class="cd-faq-group">
  			<li class="cd-faq-title"><h2>Account</h2></li>
  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How do I change my password?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum autem consectetur labore eius tenetur esse, in temporibus sequi cum voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae necessitatibus, unde, deserunt voluptas possimus veniam magni soluta deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam! Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates corrupti, minus! Possimus, perspiciatis!</p>
  				</div> <!-- cd-faq-content -->
  			</li>
  			<li>
  			    <a class="cd-faq-trigger" style="color:#ff3333" href="#0">How do I delete my account?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo tempore soluta, minus magnam non blanditiis dolore, in nam voluptas nobis minima deserunt deleniti id animi amet, suscipit consequuntur corporis nihil laborum facere temporibus. Qui inventore, doloribus facilis, provident soluta voluptas excepturi perspiciatis fugiat odit vero! Optio assumenda animi at! Assumenda doloremque nemo est sequi eaque, ipsum id, labore rem nisi, amet similique vel autem dolore totam facilis deserunt. Mollitia non ut libero unde accusamus praesentium sint maiores, illo, nemo aliquid?</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How do I change my account settings?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">I forgot my password. How do I reset it?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum at aspernatur iure facere ab a corporis mollitia molestiae quod omnis minima, est labore quidem nobis accusantium ad totam sunt doloremque laudantium impedit similique iste quasi cum! Libero fugit at praesentium vero. Maiores non consequuntur rerum, nemo a qui repellat quibusdam architecto voluptatem? Sequi, possimus, cupiditate autem soluta ipsa rerum officiis cum libero delectus explicabo facilis, odit ullam aperiam reprehenderit! Vero ad non harum veritatis tempore beatae possimus, ex odio quo.</p>
  				</div> <!-- cd-faq-content -->
  		</li>

        <li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">I forgot my password. How do I reset it?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum at aspernatur iure facere ab a corporis mollitia molestiae quod omnis minima, est labore quidem nobis accusantium ad totam sunt doloremque laudantium impedit similique iste quasi cum! Libero fugit at praesentium vero. Maiores non consequuntur rerum, nemo a qui repellat quibusdam architecto voluptatem? Sequi, possimus, cupiditate autem soluta ipsa rerum officiis cum libero delectus explicabo facilis, odit ullam aperiam reprehenderit! Vero ad non harum veritatis tempore beatae possimus, ex odio quo.</p>
  				</div> <!-- cd-faq-content -->
  			</li>
  		</ul> <!-- cd-faq-group -->

  	<ul id="payments" class="cd-faq-group">
  			<li class="cd-faq-title"><h2>Payments</h2></li>
  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">Can I have an invoice for my subscription?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">Why did my credit card or PayPal payment fail?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur accusantium dolorem vel, ad, nostrum natus eos, nemo placeat quos nisi architecto rem dolorum amet consectetur molestiae reprehenderit cum harum commodi beatae necessitatibus. Mollitia a nostrum enim earum minima doloribus illum autem, provident vero et, aspernatur quae sunt illo dolorem. Corporis blanditiis, unde, neque, adipisci debitis quas ullam accusantium repudiandae eum nostrum quis! Velit esse harum qui, modi ratione debitis alias laboriosam minus eaque, quod, itaque labore illo totam aut quia fuga nemo. Perferendis ipsa laborum atque assumenda tempore aspernatur a eos harum non id commodi excepturi quaerat ullam, explicabo, incidunt ipsam, accusantium quo magni ut! Ratione, magnam. Delectus nesciunt impedit praesentium sed, aliquam architecto dolores quae, distinctio consectetur obcaecati esse, consequuntur vel sit quis blanditiis possimus dolorum. Eaque architecto doloremque aliquid quae cumque, vitae perferendis enim, iure fugiat, soluta aut!</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">Why does my bank statement show multiple charges for one upgrade?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

        <li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">bagaimana cara mendaftar?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  		</ul> <!-- cd-faq-group -->

  		<ul id="privacy" class="cd-faq-group">
  			<li class="cd-faq-title"><h2>Privacy</h2></li>
  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">Can I specify my own private key?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">My files are missing! How do I get them back?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How can I access my account data?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus magni vero deserunt enim et quia in aliquam, rem tempore voluptas illo nisi veritatis quas quod placeat ipsa! Error qui harum accusamus incidunt at libero ipsum, suscipit dolorum esse explicabo in eius voluptates quidem voluptatem inventore amet eaque deserunt veniam dignissimos excepturi? Dolore, quo amet nostrum autem nemo. Sit nam assumenda, corporis ea sunt distinctio nostrum doloribus alias, beatae nesciunt dolore saepe consequuntur minima eveniet porro dolor officiis maiores ab obcaecati officia enim aliquam. Itaque fuga molestiae hic accusantium atque corporis quia id sequi enim vero? Hic aperiam sint facilis aliquam quia, accusamus tenetur earum totam enim est, error. Iusto, reiciendis necessitatibus molestias. Voluptatibus eos explicabo repellat nesciunt nam vero minima.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How can I control if other search engines can link to my profile?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			 </li>
  		</ul> <!-- cd-faq-group -->

     <ul id="coba" class="cd-faq-group">
  			<li class="cd-faq-title"><h2>cobaa</h2></li>
  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">What should I do if my order hasn't been delivered yet?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
  				</div> <!-- cd-faq-content -->
  			 </li>
      </ul>

  		<ul id="delivery" class="cd-faq-group">
  			<li class="cd-faq-title"><h2>Delivery</h2></li>
  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">What should I do if my order hasn't been delivered yet?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How can I find your international delivery information?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">Who takes care of shipping?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How do returns or refunds work?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How do I use shipping profiles?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How does your UK Next Day Delivery service work?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">How does your Next Day Delivery service work?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

  			<li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">When will my order arrive?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

        <li>
  				<a class="cd-faq-trigger" href="#0">When will my order arrive?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>

        <li>
  				<a class="cd-faq-trigger" style="color:#ff3333" href="#0">When will my order arrive?</a>
  				<div class="cd-faq-content">
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
  				</div> <!-- cd-faq-content -->
  			</li>
  		</ul> <!-- cd-faq-group -->
      <!-- cd-faq-group -->
    </div>
    <a href="#0" class="cd-close-panel">Close</a>
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
