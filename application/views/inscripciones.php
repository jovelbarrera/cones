<div class="container" style="min-height: 500px">
    
    <div class="page-header">
        <h1 class="text-center">Inscripciones</h1>
    </div>
    <div>
         <!--Formulario Pre inscripción -->
    <div>                                            
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_preinscripcion">Preinscribirme</button>

        <div id="modal_preinscripcion" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Formulario de Preinscripción</h4>
              </div>

              <div class="modal-body">
                <!-- <p>Some text in the modal.</p>                 -->
                    <form role="form">
                            <div class="form-group">
                                <label for="nombre">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre completo" maxlength="100">
                            </div>
                            <div class="form-group">
                                <label for="pais">Pais</label>                                
                                 <select name="pais" id="pais">                                       
                                        <option value="AR">Argentina</option>                                        
                                        <option value="BZ">Belice</option>                                    
                                        <option value="BO">Bolivia</option>                                       
                                        <option value="BR">Brasil</option>                                        
                                        <option value="CA">Canadá</option>                                        
                                        <option value="CL">Chile</option>                                        
                                        <option value="CO">Colombia</option>                                       
                                        <option value="CR">Costa Rica</option>                                        
                                        <option value="CU">Cuba</option>                                        
                                        <option value="DM">Dominica</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="SV" selected>El Salvador</option>                                        
                                        <option value="US">Estados Unidos</option>                                        
                                        <option value="GT">Guatemala</option>                                        
                                        <option value="HN">Honduras</option>                                        
                                        <option value="MX">México</option>                                        
                                        <option value="NI">Nicaragua</option>                                        
                                        <option value="PA">Panamá</option>                                        
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Perú</option>                                        
                                        <option value="PR">Puerto Rico</option>                                        
                                        <option value="DO">República Dominicana</option>                                        
                                        <option value="UY">Uruguay</option>                                        
                                        <option value="VE">Venezuela</option>                                        
                                 </select>
                            </div>
                            <div class="form-group">
                                <label for="genero">Género</label>                                
                                 <select name="genero" id="genero">                                       
                                        <option value="M">Masculino</option>                                        
                                        <option value="F">Femenino</option>                                                                                                        
                                 </select>
                            </div>

                           <!--  <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Miembro                                    
                                </label>
                            </div> -->
                            <div class="form-group">
                                <label for="tipo_miembro">Tipo de Miembro</label>                                
                                 <select name="genero" id="genero">                                       
                                        <option value="Estudiante" selected>Estudiante</option>
                                        <option value="Profesional">Profesional</option>
                                        <option value="No">No miembro</option>
                                 </select>
                            </div>

                            <div class="form-group">
                                <label for="no_miembro">N° Miembro</label>
                                <input type="text" class="form-control" id="no_miembro" placeholder="Ingrese el numero de miembro(si posee membresia IEEE)" maxlength="20">
                            </div>

                            <div class="form-group">
                                <label for="Universidad">Universidad</label>
                                <input type="text" class="form-control" id="universidad" placeholder="Universidad en la que estudia(si aun asiste)" maxlength="75">                                
                            </div>

                            <div class="form-group">
                                <label for="habitacion">Tipo de Habitación</label>                                
                                <select name="habitacion" id="pais">       
                                        <option value="Doble" selected>Doble</option>                                        
                                        <option value="Cuádruple">Cuádruple</option>      
                                </select>   
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingrese su email" maxlength="50">
                            </div>                            
                          
                          <!-- <div class="form-group">
                            <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                            <input type="file" id="ejemplo_archivo_1">
                            <p class="help-block">Ejemplo de texto de ayuda.</p>
                          </div> -->

                          
                          <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
              </div>

              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div> -->
            </div>

          </div>
        </div>

        </br>  
        </br>
        </br>
    </div>
       
    </div>
    <div>
    <div class="col-lg-6">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Congreso</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Estudiante Miembro IEEE</td>
                    <td>$120.00</td>
                </tr>
                <tr>
                    <td>Estudiante No Miembro IEEE</td>
                    <td>$150.00</td>
                </tr>
                <tr>
                    <td>Profesional Miembro IEEE</td>
                    <td>$210.00</td>
                </tr>
                <tr>
                    <td>Profesional No Miembro IEEE</td>
                    <td>$250.00</td>
                </tr>
                <tr>
                    <td>Pase por día</td>
                    <td>$45.00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-6">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Congreso y Hospedaje</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>*Estudiante Miembro IEEE</td>
                    <td>$250.00</td>
                </tr>
                <tr>
                    <td>*Estudiante No Miembro IEEE</td>
                    <td>$280.00</td>
                </tr>
                <tr>
                    <td>**Profesional Miembro IEEE</td>
                    <td>$375.00</td>
                </tr>
                <tr>
                    <td>**Profesional No Miembro IEEE</td>
                    <td>$410.00</td>
                </tr>
            </tbody>
        </table>
        <p>*En Acomodación Cuádruple</p>
        <p>**En Acomodación Doble</p>
    </div>
    </div>
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>