<?php
/* 
	Template Name: Home Page

*/

get_header(); ?>

<section class="main-slider">
	<div class="main-slider-wrap">
		<div class="slide">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/mock/slider.jpg" alt="">
			<div class="main-slider-text">
				<div class="container">
					<h1>Zabszolút Egészséges</h1>
					<h2>Lorem ipsum dolor sit amet.</h2>
					<button class="button is-primary is-rounded">termékek</button>
				</div>
			</div>
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/mock/slider.jpg" alt="">
			<div class="main-slider-text">
				<div class="container">
					<h1>Csupa egészség!</h1>
					<h2>Lorem ipsum dolor sit amet.</h2>
					<button class="button is-primary is-rounded">termékek</button>
				</div>
			</div>
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/mock/slider.jpg" alt="">
			<div class="main-slider-text">
				<div class="container">
					<h1>Az igazi zabszakértő</h1>
					<h2>Lorem ipsum dolor sit amet.</h2>
					<button class="button is-primary is-rounded">termékek</button>
				</div>
			</div>
		</div>
	</div>
	<div class="curly">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/curly.svg" alt="">
	</div>	
</section>

<section class="introduction">
	<div class="container">
		<div class="card">
			<div class="columns is-marginless">
				<div class="column is-paddingless">
					<img class="introduction-image" src="<?php bloginfo('template_directory'); ?>/assets/images/oatfield.jpg" alt="oatfield">
				</div>
				<div class="column introduction-content">
					<div>
						<h2>A Kölln történet</h2>
						<p>A Kölln cég történetének kezdete 200 évvel ezelőttre tehető, amikor is Elmshorban, Hans-Hinrich Kölln lefektette a Kölln cég alapköveit, mely mára az egyik legsikeresebb német élelmiszer márkává nőtte ki magát. Ez a Németországban középméretűnek számító cég a piacon elérhető legjobb minőségű zabból készült pelyheket és más zab alapú reggeliző termékeket állít elő a német és a nemzetközi piacok számára.</p>
						<a href="#" class="simple-link">
							<span>Tovább a bemutatkozáshoz</span>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/next.svg" alt="">
						</a>
						<img class="top-right-img" src="<?php bloginfo('template_directory'); ?>/assets/images/oat.jpg" alt="oat">
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<section class="advantages">
	<div class="container">
		<div class="columns">
			<div class="column is-three-fifths is-offset-one-fifth">
				<h2 class="has-text-centered">Zabpehely</h2>
				<p class="has-text-centered">Különbség van zabpehely és zabpehely között, mert a nyers zab kiválasztása és feldolgozása döntő jelentőségű a termék minősége szempontjából. Míg sok kenyérliszt őrlésénél eltávolítják a gabonaszem értékes csíráját és a külső héjakat, a Kölln zabpelyheknél csakis az egész szemeket dolgozzák fel. Ezért a zabpelyhek mindig megőrzik a teljes tápértéket és a teljes ízt. Így lesz minden zabszolút egészséges!</p>
			</div>
		</div>
		<div class="columns is-aligncenter">
			<div class="column">
				<h2>Egészségvédelem</h2>
				<p>A rendkívül fontos táplálék az emésztőrendszer megfelelő működése szempontjából, emellett nyugtató hatással van a szervezetre, és szabályozza a test energiaáramlását. Fogyasztása erősíti a lép-hasnyálmirigyet, eltávolítja az emésztőtraktusból és az érrendszerből a koleszterint, emellett bélrendszeri problémák, többek között felfúvódás esetén is alkalmazhatod.</p>
			</div>
			<div class="column is-flex is-justifycenter">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/advantages/health.jpg" alt="health">
			</div>
		</div>
		<div class="columns is-aligncenter">
			<div class="column is-flex is-justifycenter">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/advantages/health2.jpg" alt="healthy">
			</div>
			<div class="column">
				<h2>Csupa egészség!</h2>
				<p>A zab serkenti a bélrendszerben zajló folyamatokat, és bizonyos fokig megakadályozza, hogy a méreganyagok felszívódjanak. Egyfajta nyákot képez a bélrendszerben, mely által a salakanyag könnyebben tud távozni a szervezetből. Ezért fontos a teljes kiőrlésű pékáru - amiből igyekezz minél többet fogyasztani -, de napjainkig fennmaradt a zabkása is - mint a gyomor-bélbetegségekre használt jól bevált szer. </p>
			</div>
		</div>
	</div>
	
</section>

<section class="events">
	<div class="container">
		<div class="columns">
			<div class="column is-three-fifths is-offset-one-fifth events-intro">
				<h2 class="has-text-centered">Események</h2>
				<p class="has-text-centered">In varius ut est lacinia ultrices. Nullam in nulla tellus. Praesent mi mauris, vestibulum eu ante vitae, vehicula pharetra tortor.</p>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="event-card columns">	
					<div class="column is-flex is-justifycenter">
						<div class="event-card-img">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/mock/event-1.jpg" alt="">
						</div>
					</div>
					<div class="column is-flex is-aligncenter is-paddingless is-three-fifths">
						<div class="card-content">
							<span>2018.július</span>
							<h4 class="title is-size-4">Kölln akció</h4>
							<p>Proin a orci a turpis hendrerit tempor. Cras at elementum mi, vitae auctor libero. Donec nunc eros, maximus...</p>
							<a href="#" class="simple-link">
								<span>Részletek</span>
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/next.svg" alt="">
							</a>
						</div>
					</div>					
				</div>
			</div>
			<div class="column">
				<div class="event-card columns">	
					<div class="column is-flex is-justifycenter">
						<div class="event-card-img">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/mock/event-2.jpg" alt="">
						</div>
					</div>
					<div class="column is-flex is-aligncenter is-paddingless is-three-fifths">
						<div class="card-content">
							<span>2018.szeptember</span>
							<h4 class="title is-size-4">Facebook kampány</h4>
							<p>Proin a orci a turpis hendrerit tempor. Cras at elementum mi, vitae auctor libero. Donec nunc eros, maximus...</p>
							<a href="#" class="simple-link">
								<span>Részletek</span>
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/next.svg" alt="">
							</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>