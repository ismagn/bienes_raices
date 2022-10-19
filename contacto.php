<?php include 'includes/templates/header.php'  ?>

    <main>
        <section class="cont_contacto text-center">
            <h1>Contacto</h1>
            <div class="img_contacto">
                <img src="build/img/destacada3.jpg" alt="">
            </div>
        </section>
        <section class="cont_formulario ">
            <h1 class="text-center">Llene el formulario de Contacto</h1>
            
            <form action="" class="form">
                <div class="info_personal mt-5">
                    <div class="titulos_formularios text-muted">
                        <h3 >INFORMACION PERSONAL</h3>
                        </div>
                        <div class="input nombre my-5">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" class="form-control" placeholder="tu nombre">
                        </div>
                        <div class="input email my-5">
                            <label for="correo" class="form-label">E-mail</label>
                            <input type="email" id="correo" class="form-control" placeholder="tu correo">
                        </div>
                        <div class="input telefono my-5">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="number" id="telefono" class="form-control" placeholder="tu numero">
                        </div>
                        <div class="input my-5">
                            <label for="mensaje" class="form-label" id="mensaje">Mensaje</label>
                            <textarea name="" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                </div>
                <div class="info_propiedad mt-5 pt-5">
                    <div class="titulos_formularios text-muted">
                        <h3 >INFORMACION PROPIEDAD</h3>
                    </div>
                        <div class="input my-5">
                            <label for="vendecompra" class="form-label">VENDE O COMPRA</label>
                            <select name="" id="vendecompra" class="form-select">
                                <option disabled selected>seleccione</option>
                                <option value="">compra</option>
                                <option value="">vende</option>
                            </select>
                        </div>
                        <div class="input my-5">
                            <label for="presupuesto" class="form-label">PRECIO O PRESUPUESTO</label>
                            <input type="number" id="presupuesto" class="form-control">
                        </div>
                </div>
                <div class="info_contactar mt-5 pt-5">
                    <div class="titulos_formularios text-muted">
                        <h3 >INFORMACION CONTACTO</h3>
                    </div>
                        <div class="input my-5 ">
                            <p class="text-center text-md-start">Como desea ser contactado: </p>
                            <div class="telefono_email form-chek mt-3">
                                <div class="col-12 col-md-6 d-flex justify-content-between justify-content-md-start">
                                <label for="celular" class="form-check-label mx-1">TELEFONO</label>
                                <input type="radio" name="telefono-mail" id="celular" class="form-check-input">
                                </div>
                                <div class="col-12 col-md-6 d-flex justify-content-between justify-content-md-start">
                                <label for="mail" class="form-check-label mx-1">EMAIL</label>
                                <input type="radio" name="telefono-mail" id="mail" class="form-check-input">
                                </div>
                            </div>
                        </div>
                        <div class="input my-5">
                            <label for="presupuesto" class="form-label">PRECIO O PRESUPUESTO</label>
                            <input type="number" id="presupuesto" class="form-control">
                        </div>
                        <div class="input my-5">
                            <p class="text-warning">*si eligío telefono, elija la fecha y hora*</p>
                            <div class="fecha">
                                <label for="fecha" class="form-label">FECHA</label>
                                <input type="date" id="fecha" class="form-control">
                            </div>
                            <div class="hora mt-3">
                                <label for="hora" class="form-label">HORA</label>
                                <input type="time" id="hora" class="form-control">
                            </div>
                        </div>
                </div>
                <div class="enviar">
                    <input type="submit" class="btn ">
                </div>
            </form>
        </section>
    </main>


    <?php include 'includes/templates/footer.php' ?>

