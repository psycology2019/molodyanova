<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="utf-8">
  <meta name="description" content="Квалифицированный, практикующий психолог. Обучение, эффективная практика. Огромный опыт.Отзывы обо мне.Запись по тел.+375(29)6470479">
  <meta name="keywords" content="психолог в Минске, консультация психолога, психологическая помощь">
  <meta name="author" content="Demchenko">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>base Психолог Татьяна Молодьянова, консультация</title>
  <link type="text/css" rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="media/css/style.css" />
  <link rel="stylesheet" href="media/font-awesome/css/font-awesome.min.css">
  @section('style')
  @show  
  @section('scripts') 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
  <script type="text/javascript" src="index.js"></script>
  <script type="text/javascript" src="button_up.js"></script>
  @show 
  </head>
 <body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink"> 
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
				<!--<img src='media/img/LogoNav2.png' alt="Логотип"> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
						<a class="page-scroll" href="{{asset('/')}}">Главная</a>
                    </li>
                    <li class="">
						<a class="page-scroll" href="{{asset('about')}}">Обо мне</a>
                    </li>
                    <li class="">
						<a class="page-scroll" href="{{asset('consultation')}}">Консультации</a>
                    </li>
					<li class="">
						<a class="page-scroll" href="{{asset('reviews')}}">Отзывы</a>
                    </li>
					<li class="">
						<a class="page-scroll" href="{{asset('contact')}}">Контакты</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	@yield('content')
	<footer>
	 <div class="container block_indent">
		<div class="row">
			<div class="col-md-5 footer_info">
				<a href="{{asset('oferta')}}">Договор оферта</a>
				<a href="{{asset('confedencialnost')}}">Политика конфиденциальности сайта molodyanova.com</a>
				<a href="{{asset('')}}">Способы оплаты</a>
				<div class="pay_system">
				  <img src="media/img/pay_system/belcard.jpg" alt="Белкарт" title="Белкарт">
				  <img src="media/img/pay_system/visa.png" alt="Visa" title="Visa">
				  <img src="media/img/pay_system/visawerified.png" alt="Visa" title="Visa">
				  <img src="media/img/pay_system/mastercard.png" alt="MasterCard" title="MasterCard">
				  <img src="media/img/pay_system/bePaid.png" alt="bepaid" title="bepaid" width="52" height="25">					
				</div>				
			</div>	
			<div class="col-md-7 footer_docum_regist">				
			<p>ИП МОЛОДЬЯНОВА ТАТЬЯНА ВАСИЛЬЕВНА<br>
				УНП 193191125 <br>
				Свидетельство о регистрации  от 14.01.2019 выдано Минским горисполкомом<br>
				г. Минск, ул. Якубова, 32-649 <br>
				тел. +375296470479 128wings@mail.ru<br>
				Пн-пт. 9.00-20.00
			</p>
			</div>
		</div>
	 </div>
	</footer>
 </body>
</html>