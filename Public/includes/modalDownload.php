                            <!-- INICIO MODAL -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Descargar ficha técnica: <?php echo $producto ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form_ficha_tecnica">
                                            <!-- Grupo: Correo Electronico -->
                                            <div class="formulario__grupo" id="grupo__correo">
                                                <div class="formulario__grupo-input">
                                                    <label for="recipient-name" class="col-form-label">Correo electrónico:</label>
                                                    <input type="email" class="formulario__input form-control" name="correo" id="correo" placeholder="Email">
                                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                </div>
                                                <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input type="text" class="form-control" name="correo" id="correo">
                                            </div> -->

                                            <!-- Grupo: Teléfono -->
                                            <div class="formulario__grupo" id="grupo__telefono">
                                                <div class="formulario__grupo-input">
                                                    <label for="message-text" class="col-form-label">Tel. / Cel:</label>
                                                    <input type="text" class="formulario__input form-control" name="telefono" id="telefono" placeholder="Mínimo 10 dígitos">
                                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                </div>
                                                <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 12 dígitos.</p>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input type="tel" class="form-control" name="telefono" id="telefono">
                                            </div> -->
                                            <div class="formulario__mensaje" id="formulario__mensaje">
                                                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llena el formulario correctamente. </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <input type="submit" class="btn btn-primary" value="Enviar y descargar">
                                            </div>
                                            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"><b>Formulario:</b> Enviado exitosamente!</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN MODAL -->