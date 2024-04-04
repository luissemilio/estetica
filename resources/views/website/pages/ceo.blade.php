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


@endsection
