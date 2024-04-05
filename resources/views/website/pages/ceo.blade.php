@extends('website.layouts.main')
@section('content')
	<div class="breadcrumbs">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 offset-lg-3 col-md-12 col-12">
					<div class="breadcrumbs-content">
						<h3 class="w3l_header">
							ACERCA DEL <span> CEO </span></h3>
					</div>
				</div>
			</div>
		</div>
	</div>


	<section class="testimonial-one">
		<div class="testimonial-one__bg-box" style="height: 1870px;">
			<div class="testimonial-one__bg" style="background-image: url({{ asset('images/testimonial-one-bg.jpg')}});"></div>
		</div>
		<div class="container">
			<div class="testimonial-one__top">
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="testimonial-one__left">				
							<p class="testimonial-one__text text-justify">							
								Veronica Aguilar es una emprendedora apasionada que ha transformado su amor por la belleza y el
								bienestar en una exitosa carrera como CEO de uno de los salones de belleza más reconocidos
								en su ciudad natal. Desde muy joven, Veronica mostró un interés innato por el mundo de la
								estética y la moda. Pasaba horas experimentando con peinados, maquillaje y cuidado de la
								piel, desarrollando así un ojo crítico para la calidad y la atención al detalle.

								Después de obtener su título en Administración de Empresas con especialización en Gestión de
								Belleza y Bienestar, Veronica se embarcó en un viaje emprendedor para convertir su pasión en su
								profesión. Fundó su propio salón de belleza con la visión de crear un espacio donde las
								personas no solo se sintieran hermosas por fuera, sino también empoderadas por dentro.

								Con una mentalidad centrada en el cliente y un enfoque en la calidad del servicio, Veronica ha
								llevado a su salón a nuevas alturas. Su capacidad para liderar con carisma y empatía ha
								cultivado un equipo dedicado que comparte su visión y está comprometido con la excelencia en
								cada servicio.

								Veronica no solo se destaca como una líder empresarial, sino que también es una defensora de la
								autoexpresión y la confianza personal. Cree firmemente que el cuidado personal no se trata
								solo de estética, sino de sentirse bien consigo mismo y proyectar una actitud positiva hacia
								el mundo.

								Fuera de su trabajo, Veronica es una entusiasta del desarrollo personal y la filantropía.
								Participa activamente en programas comunitarios que promueven la autoestima y el
								empoderamiento de las mujeres, demostrando su compromiso no solo con el éxito empresarial,
								sino también con el bienestar de la sociedad en general.

								Con su determinación, visión y pasión por la belleza y el bienestar, Veronica García continúa
								inspirando a otros a alcanzar sus sueños y a sentirse con actitud y presencia en cada
								aspecto de sus vidas.

							</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="testimonial-one__right">


							<div class="about-one__img-box wow slideInRight  animated" data-wow-delay="100ms"
								data-wow-duration="2500ms"
								style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
								<div class="about-one__img">
								<video autoplay loop muted class="videoLabel">
									<source src="{{ asset('images/videoCeo.mp4')}}" type="video/mp4">
								</video>
								</div>
							
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</section>


@endsection
