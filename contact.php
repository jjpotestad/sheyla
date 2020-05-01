<?php include 'header.php'; ?>
<main role="main">
    <!-- <div class="container">
        <div class="alert alert-success text-center">
            <p>Su mensaje se envio correctamente</p> 
        </div>
    </div> -->
    <section id="map">
        <div class="container d-flex flex-row">
            <div class="row col-md-6 flex-column">
                <p><strong>Direccion: </strong> Cancun, Quintana Roo</p>
                <p><strong>Telefono: </strong> +52 55555555</p>
                <p><strong>Email: </strong> ejemplo@gmail.com</p>
            </div>
            <div class="row col-md-6">
                <iframe src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Cancun+(Mi%20nombre%20de%20egocios)&ie=UTF8&t=&z=14&iwloc=B&output=embed" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section id="contact" class="container">
        <h2 class="text-center">Formulario de contacto</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <!--Form with header-->
                <form action="mail.php" method="post" class="needs-validation" novalidate>
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                                <p class="m-0">Con gusto te ayudaremos</p>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Nombre y Apellido" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="ejemplo@gmail.com" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment"></i></div>
                                    </div>
                                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Envianos tu Mensaje"
                                        required></textarea>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Enviar" class="btn btn-outline-secondary py-2">
                            </div>
                        </div>

                    </div>
                </form>
                <!--Form end-->
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>
