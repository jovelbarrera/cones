<div class="container"><style type="text/css">    body {        background-image: linear-gradient(rgba(255,255,255,0.5),rgba(255,255,255,0.5)), url('./assets/img/fondos/hex_small_invisble.png');        background-size: 100%;    }</style>    <div class="page-header">        <h2>Contacto</h2>    </div>          <div class="col-lg-12">        <!--<form class="form-horizontal">-->            <?php            $attributes=array("class"=>"form-horizontal");            echo form_open('inicio/enviarFormulario',$attributes);            ?>            <fieldset>                <legend>¿Tiene alguna consulta o desea algún espacio en el evento?</legend>                <div class="form-group">                    <label for="inputName" class="col-lg-2 control-label">Nombre</label>                    <div class="col-lg-10">                        <input required="required" name="nombre" class="form-control" id="inputName" placeholder="Nombre" type="text">                    </div>                </div>                <div class="form-group">                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>                    <div class="col-lg-10">                        <input required="required" name="correo" class="form-control" id="inputEmail" placeholder="Email" type="text">                    </div>                </div>                <div class="form-group">                    <label for="inputPhone" class="col-lg-2 control-label">Teléfono</label>                    <div class="col-lg-10">                        <input name="telefono" class="form-control" id="inputPhone" placeholder="Teléfono" type="text">                    </div>                </div>                <div class="form-group">                    <label for="select" class="col-lg-2 control-label">Asunto</label>                    <div class="col-lg-10">                        <select name="asunto" class="form-control" id="select">                            <option value="Sin Asunto" selected="selected">-Elija una asunto-</option>                                                        <option value="Inscripciones">Inscripciones</option>                            <option value="Comité Organizador">Comité Organizador</option>                            <option value="Programa Técnico">Programa Técnico</option>                                                              <option value="Llamado a ponencias">Llamado a ponencias</option>                            <option value="Patrocinio">Patrocinio</option>                            <option value="Hotel Sede">Hotel Sede</option>                            <option value="Espacio en el Evento">Espacio en el Evento</option>                            <option value="Otro">Otro</option>                        </select>                    </div>                </div>                <div class="form-group">                    <label for="select" class="col-lg-2 control-label">Mensaje</label>                    <div class="col-lg-10">                        <textarea  required="required" name="mensaje" class="form-control" rows="3" id="textArea"></textarea>                        <span class="help-block">Escribe tu mensaje aquí.</span>                    </div>                </div>                <div class="form-group">                    <div class="col-lg-10 col-lg-offset-2">                        <button type="reset" class="btn btn-default">Cancelar</button>                        <button type="submit" class="btn btn-primary">Enviar</button>                    </div>                </div>            </fieldset>        </form>        <div><!-- espacio para que el footer no estorbe con el boton -->                        </br>            </br>                    </div>      </div>