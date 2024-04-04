@extends('website.layouts.main')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h3 class="w3l_header">
                        CONT<span>ACTO</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="services-page about section">
    <div class="container">
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">
                                </span>
                                <h2 class="section-title__title">
                                    <p style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Enviar un mensaje</p>
                                    </p>
                                </h2>
                            </div>
                            <p class="contact-page__text">
                            <p style="vertical-align: inherit;">
                            <p style="vertical-align: inherit; text-align: justify;">
                                ¿Estás interesado en nuestros servicios? En nuestro salón, nos esforzamos
                                por hacer que tu experiencia sea inolvidable. ¡Nos encantaría escucharte!
                                Comunícate con nosotros para descubrir cómo podemos ayudarte a lucir y
                                sentirte lo mejor posible.
                            </p>
                            </p><br>

                            </p>
                            <div class="contact-page__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/veronica_aguilar_bs/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__content">
                                <form action="{{ route('website.schedule-meeting') }}" method="POST" class="contact-page__form contact-form-validated" id="form_contact" novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label>Nombre completo:</label>
                                            <div class="contact-page__form-input-box">
                                                <input id="name" name="name" type="text" class="form-control"
                                                    placeholder="Nombre completo">
                                                <p class="text-danger message-error name d-none"></p>
                                            </div>

                                        </div>
                                        <div class="col-xl-6">
                                            <label>Teléfono:</label>
                                            <div class="contact-page__form-input-box">
                                                <input id="phone" name="phone" type="text" class="form-control"
                                                    placeholder="Teléfono">
                                                <p class="text-danger message-error d-none phone"></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <label>Correo electrónico:</label>
                                            <div class="contact-page__form-input-box">
                                                <input id="email" name="email" type="email" class="form-control"
                                                    placeholder="Escribe una dirección de correo electrónico">
                                                <p class="text-danger message-error d-none email"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <label>Mensaje:</label>
                                        <div class="contact-page__form-input-box text-message-box">
                                            <textarea name="mesage" placeholder="Escribe aquí ..." class="form-control"></textarea>
                                            <p class="text-danger message-error d-none mesage"></p>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__btn-box">
                                            <button type="submit" class="thm-btn contact-page__btn" id="create_submit">
                                                {{-- Enviar un mensaje --}}
                                                <span id="indicator-label">Enviar un mensaje</span>
                                                <span id="loader" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<section class="contact-page__google-map">
    <!-- Enlace que redirige al usuario a la página "Cómo llegar" en Google Maps -->
    <!--<a href="https://www.google.com/maps/dir/?api=1&destination=19.25819789887946,-99.6010199308622"
        target="_blank">Cómo llegar</a>-->

    <!-- iframe de Google Maps -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3766.555422353345!2d-99.6010199308622!3d19.25819789887946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDE1JzI5LjMiTiA5OcKwMzYnMDMuOCJX!5e0!3m2!1ses!2smx!4v1710887138527!5m2!1ses!2smx"
        class="contact-page__google-map-one" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function ($) {
        $(document).ready(function (){
            let form = document.getElementById('form_contact');
            form.addEventListener('submit', contactFunc);

            function contactFunc(event){
                event.preventDefault();
                $("p.text-danger").addClass('d-none');
                $(".form-control").removeClass('is-invalid');
                let formData = new FormData($(this)[0]);

                let buttom_submit 	= document.getElementById('create_submit');
                let indicador_label = document.getElementById('indicator-label');
                let loader 			= document.getElementById('loader');

                loader.classList.remove('d-none');
                indicador_label.textContent = 'Enviando...';
                clearTimeout( $(this).data('timer') )

                var timer = setTimeout(function(){
                    $.ajax({
                        method: 'POST',
                        url: "{{ route('website.schedule-meeting') }}",
                        data: formData,
                        async: false,
                        processData: false,
                        contentType: false,
                        success: function(response){
                            const {message} = response;
                            Swal.fire({
                                    icon: 'success',
                                    title: 'Exito',
                                    text: message,
                                    timer: 3000,
                                    showConfirmButton: false,
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        },
                        error: function(err){
                            if(err.status == 500){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Opps',
                                    text: 'Ocurrio un error intentalo mas tarde',
                                    timer: 2000,
                                    showConfirmButton: false,
                                });
                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Opps',
                                    text: 'Existen errores en tu información',
                                    timer: 2000,
                                    showConfirmButton: false,
                                });
                                if(err.responseJSON.errors){
                                        const {errors} = err.responseJSON;
                                        $.each(errors, function(index, value){
                                            $(`#${index}`).addClass('is-invalid');
                                            $(`p.${index}`).removeClass('d-none').text(value);
                                        });
                                }
                            }
                            indicador_label.textContent = 'Enviar un mensaje';
                            loader.classList.add('d-none');
                        },
                    });
                },1000);
                $(this).data('timer', timer);

                if(buttom_submit.classList.contains('success') == false){
                    return false
                }
            }
        })
    });
</script>
@endsection

@endsection
