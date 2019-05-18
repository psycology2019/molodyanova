 @extends('layouts.base')
 @section('content')
	<header>
	 <div class="wrap-h">
	  <div class="headline">
	   <div class="title">
	    <hgroup>
	     <h1>Психолог<br>Татьяна Молодьянова</h1>
	     <h2>Помогающая психология</h2>
         <p>«Величайшее счастье - это знать,<br>
        по крайней мере, от чего несчастлив».<br>
        Ф.М. Достоевский </p>		 
	    </hgroup>
	   </div>	      
	  </div>
	  <div class="headfoto">
	  <img src='media/img/foto_header.png' alt="Фото Татьяна Молодьянова">	
	  </div>	 
	 </div>
	</header> 
    <section>
	  <div class="txt_section block_indent">
		  <h3 class="color_txt" >Давайте знакомиться!<h3>
          <p id="p_title">Меня зовут Татьяна.</p>
     	  <p>Я - практикующий психолог, тренер, коуч ICTA , семейный системный терапевт, автор проекта «Помогающая психология» и программ для начинающих психологов и коучей.</p>
          <div class="test">
          <p id="p_title">Лидмагнит блок</p>
		  <p>Эффективная психологическая помощь должна быть направлена не только на временное облегчение тяжелого эмоционального состояния человека, но и вести его к глубокой личностной трансформации.</p>
		  <img class="center" src='media/img/lid_mag.PNG'>
		  			<div class="lid_button">               		   
		       <div class="buttonhead">
		         <a class="go" href="lessons_program.html">ХОЧУ ПЕРЕМЕН!</a>
		       </div>              				   
		    </div>
		  </div>		  		  
		  <p id="p_title" >Оказываю психологическую помощь онлайн и очно в решении проблем:</p>	  		  
		  <ul>
		    <li>Семейные проблемы и конфликты.</li>
			<li>Сложности в детско-родительских отношениях.</li>
			<li>Повышенная раздражительность, нервозность, тревожность, депрессивные состояния.</li>
			<li>Трудности в принятии решений.</li>
			<li>Жизненные кризисы, потеря целей и смысла.</li>
		  </ul>
		  <p id="p_title">Мой опыт:</p>
		  <p>Жизненный): мне 45+</p>
		  <p>Профессиональный: </p>
		  <ul>
		   <li>Более 13 лет изучения различных направлений в области прикладной психологии, многолетний опыт самопознания и личной трансформации.</li>
		   <li>5 лет в области практической бизнес-психологии. Медиация.</li>
		   <li>Проведение более 250 часов групповой терапии.</li>
		   <li>Индивидуальное консультирование и терапия  более 4500 часов .</li>
		  </ul>
		  <p id="p_title">Мое достижение: <br>
	      <p>Более 300 моих клиентов получили значимые, долгосрочные результаты и изменили свою жизнь к лучшему.</p> 
	  </div>   
	  <div class="section_info block_indent">
	    <div class="row">
         <div class="col-md-4" >
          <div class="bl_about">	       
	       <div class="bimg">
		    <div class="bl_title">Обо мне</div>
		    <a href="about.html"><img src='media/img/about_flex.jpg' class="img-thumbnail"></a></div>
	      </div>  
         </div>		 
		 <div class="col-md-4">
		  <div class="bl_about">
		   <div class="bimg">
		     <div class="bl_title">Консультации</div>
		     <a href="consultation.html"><img src='media/img/consultation.jpg' class="img-thumbnail"></a></div>
		  </div>
		 </div>
		 <div class="col-md-4">
		  <div class="bimg">
		    <div class="bl_title">Программы</div>
		    <a href="product.html"><img src='media/img/program.jpg' class="img-thumbnail"></a></div>   
		 </div>
        </div>	
	  </div>	  
	  <div class="lidmagnit header_page">
        <div class="lidmagnit_txt txt_p">
		 <div class="lid_descript">
		  <p id='lid_text_bold'>Я уверена, что</p>
		  <p>Эффективная психологическая помощь должна быть направлена не только на временное облегчение тяжелого эмоционального состояния человека, но и вести его к глубокой личностной трансформации.</p>
		 </div>
		</div>	
	  </div>
	  
	  
	  <div class="quest_soc block_indent">
	    <div class="row">
		 <div class="col-md-8" >
		 <div class="bl_title">Задайте вопрос</div>
		  <form>	      
		   <div class="form-group">
			<input type="name" class="form-control" id="exampleInputName1" placeholder="Введите имя">
		   </div>
		   <div class="form-group">		  
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email">
		   </div>
		   <div class="form-group">		  
			<input type="phone" class="form-control" id="exampleInputPhonel1" placeholder="Введите номер телефона">
		   </div>
		   <div class="form-group">
			 <textarea class="form-control" rows="3" placeholder="Введите вопрос"></textarea>
		   </div>
		   <div class="checkbox">
			<label>
			 <input type="checkbox" checked> Я выражаю согласие на обработку персональных данных согласно <a href="confedencialnost.html">политике конфиденциальности</a>
			</label>
		   </div>
		   <button type="submit" class="btn btn-primary btn-lg center-block">Отправить вопрос</button>
		  </form>		 
		 </div>
		 <div class="col-md-4" >
		 <div class="social">
		  <div class="bl_title titl_soc">Я в соц. сетях</div>
		  <div class="wrapper">
		   <ul>
			<li class="facebook"><a href="https://www.facebook.com/molodpsy"><i class="fa fa-facebook fa-2x"></i></a></li>
			<li class="vk"><a href="https://vk.com/id173676978"><i class="fa fa-vk fa-2x" ></i></a></li>
			<li class="instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
			<li class="youtube"><a href="https://www.youtube.com/channel/UCGEcYTurvJtKx1d83owYauw"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a></li>
		   </ul>
		  </div>	 
		 </div>	  
		 </div>	 
		</div> 
	  </div>  
    </section>
@endsection