@extends('website.layouts.main')
@section('content')
	<div class="breadcrumbs">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 offset-lg-3 col-md-12 col-12">
					<div class="breadcrumbs-content">
						<h3 class="w3l_header">
							ACERCA DE <span> NOSOTROS </span></h3>
					</div>
				</div>
			</div>
		</div>
	</div>



	<section class="about-one">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="about-one__left">
						<div class="about-one__img-box wow slideInLeft animated" data-wow-delay="100ms"
							data-wow-duration="2500ms"
							style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
							<div class="about-one__img">
								<img src="{{ asset('images/salon.png')}}" alt="">
							</div>
							<div class="about-one__img-2">
								<img src="{{ asset('images/productos.png')}}" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-one__right">
						<div class="section-title text-left">
							<h2 class="section-title__tagline">Misión</h2>

						</div>
						<p class="about-one__text">
							Para Verónica Beauty Studio, el objetivo principal es ser reconocido por los altos
							estándares de calidad en nuestros procesos y servicios ofrecidos, mediante la calidad de los
							productos aplicados en cada proceso de belleza, brindar atención y asesoría, contando con
							colaboradores altamente capacitados en las distintas áreas, orientados a satisfacer sus
							necesidades y expectativas, así mismo buscar crear conciencia en la importancia del cuidado
							y bienestar personal, permitiéndonos vivir en equilibrio y armonía.
						</p>
					</div>
				</div>




			</div>
		</div>
	</section>

	<section class="testimonial-one">
		<div class="testimonial-one__bg-box">
			<div class="testimonial-one__bg" style="background-image: url({{ asset('images/testimonial-one-bg.jpg')}});"></div>
		</div>
		<div class="container">
			<div class="testimonial-one__top">
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="testimonial-one__left">
							<div class="section-title text-left">
								<div class="section-title text-left">
									<h2 class="section-title__tagline">Visión</h2>

								</div>
							</div>
							<p class="testimonial-one__text">
								Verónica Beauty Studio, estamos comprometidos a colaborar y contribuir de manera
								profesional
								en el bienestar, cuidado e higiene de nuestros clientes, anteponiendo en todo momento
								productos profesionales y de alta calidad que permitan agregar valor a nuestros
								servicios,
								buscando en todo momento la mejora continua y fiabilidad del mismo, brindando un alto
								estándar de calidad y atención a nuestros clientes mediante la constante capacitación de
								nuestros colaboradores.
							</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="testimonial-one__right">


							<div class="about-one__img-box wow slideInRight  animated" data-wow-delay="100ms"
								data-wow-duration="2500ms"
								style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
								<div class="about-one__img">
									<img src="{{ asset('images/salon.png')}}" alt="">
								</div>
								<div class="about-one__img-2">
									<img src="{{ asset('images/productos.png')}}" alt="">
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</section>



	<section class="about-one">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 mt-5">
					<div class="about-one__left">
						<div class="about-one__img-box wow slideInLeft animated" data-wow-delay="100ms"
							data-wow-duration="2500ms"
							style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
							<div class="about-one__img">
								<img src="{{ asset('images/salon.png')}}" alt="">
							</div>
							<div class="about-one__img-2">
								<img src="{{ asset('images/productos.png')}}" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 mt-5">
					<div class="about-one__right">
						<div class="section-title text-left">
							<h2 class="section-title__tagline">NUESTROS VALORES</h2>
						</div>
						<ul class="list-unstyled about-one__points">
							<li>
								<h4> <span class="fad fa-check"></span> Calidad</h4>
								<p>Para Veronica MakeUp Studio, representa
									tener en meta las expectativas de los
									clientes, para poder satisfacerlas al
									máximo e incluso superarla, a través de la
									continua preparación de los colaborades.
								</p>
							</li>
							<li>
								<h4> <span class="fad fa-check"></span> Lealtad</h4>
								<p>Para nosotros es de suma vitalidad
									conducirnos bajo el respeto y fidelidad
									hacia nuestros colaboradores y clientes,
									fomentando su propio desarrollo y
									crecimiento.</p>
							</li>
							<li>
								<h4> <span class="fad fa-check"></span> Trabajo en Equipo</h4>
								<p>Sabemos que efectuar tareas que se
									complementen entre sí y que contribuyan
									al desarrollo de todos, genera un valor
									agregado y satisfacción de cada de las
									necesidades.</p>
							</li>
							<li>
								<h4> <span class="fad fa-check"></span> Responsabilidad</h4>
								<p>Valor integrado con el respeto por las
									personas, los valores éticos, la comunidad y
									el medioambiente en el cual se desarrollo
									Veronica MakeUP Studio.</p>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
