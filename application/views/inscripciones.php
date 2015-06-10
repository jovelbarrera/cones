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
                        <?php
                        $attributes=array("class"=>"form-horizontal");
                        echo form_open('inicio/enviarPreinscrip',$attributes);
                        ?>
                    <form role="form">

                            <div class="form-group">

                                <label for="nombre">Nombre Completo</label>

                                <input required="required" type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" maxlength="100">

                            </div>

                            <div class="form-group">

                                <label for="pais">Pais</label>                                

                                 <select name="pais" id="pais">                                       

                                        <option value="Argentina">Argentina</option>                                        

                                        <option value="Belice">Belice</option>                                    

                                        <option value="Bolivia">Bolivia</option>                                       

                                        <option value="Brasil">Brasil</option>                                        

                                        <option value="Canadá">Canadá</option>                                        

                                        <option value="Chile">Chile</option>                                        

                                        <option value="Colombia">Colombia</option>                                       

                                        <option value="Costa Rica">Costa Rica</option>                                        

                                        <option value="Cuba">Cuba</option>                                        

                                        <option value="Dominica">Dominica</option>

                                        <option value="Ecuador">Ecuador</option>

                                        <option value="El Salvador" selected>El Salvador</option>                                        

                                        <option value="Estados Unidos">Estados Unidos</option>                                        

                                        <option value="Guatemala">Guatemala</option>                                        

                                        <option value="Honduras">Honduras</option>                                        

                                        <option value="México">México</option>                                        

                                        <option value="NI">Nicaragua</option>                                        

                                        <option value="Nicaragua">Panamá</option>                                        

                                        <option value="Paraguay">Paraguay</option>

                                        <option value="Perú">Perú</option>                                        

                                        <option value="Puerto Rico">Puerto Rico</option>                                        

                                        <option value="República Dominicana">República Dominicana</option>                                        

                                        <option value="Uruguay">Uruguay</option>                                        

                                        <option value="Venezuela">Venezuela</option>                                        

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

                                 <select name="tipo_miembro" id="tipo_miembro">                                       

                                        <option value="E" selected>Estudiante</option>

                                        <option value="P">Profesional</option>

                                        <option value="N">No miembro</option>

                                 </select>

                            </div>



                            <div class="form-group">

                                <label for="no_miembro">N° Miembro</label>

                                <input type="text" class="form-control" name="no_miembro" id="no_miembro" placeholder="Ingrese el numero de miembro(si posee membresia IEEE)" maxlength="20">

                            </div>



                            <div class="form-group">

                                <label for="universidad">Universidad</label>

                                <input type="text" class="form-control" name="universidad" id="universidad" placeholder="Universidad en la que estudia(si aun asiste)" maxlength="75">                                

                            </div>



                            <div class="form-group">

                                <label for="habitacion">Tipo de Habitación</label>                                

                                <select name="habitacion" id="habitacion">       

                                        <!-- <option value="Doble" selected>Doble</option>                                         -->

                                        <option value="Cuádruple ($250.00)">Cuádruple ($250.00)</option>      

                                </select>   

                            </div>



                            <div class="form-group">

                                <label for="email">Email</label>

                                <input required="required" type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email" maxlength="50">

                            </div>                            

                          

                          <!-- <div class="form-group">

                            <label for="ejemplo_archivo_1">Adjuntar un archivo</label>

                            <input type="file" id="ejemplo_archivo_1">

                            <p class="help-block">Ejemplo de texto de ayuda.</p>

                          </div> -->
                        
                              <button type="submit" id="btn_preinscrip"  name="btn_preinscrip" class="btn btn-success">Enviar</button>
                              <script type="text/javascript">
                                     $(document).ready(function(){

                                        $('#tipo_miembro').change(function(){

                                            $('#habitacion').empty()

                                            if ( $(this).val() == "E" ){                                                             
                                                // $("#habitacion").attr("value","Cuádruple ($250.00)").text("Cuádruple ($250.00)");      
                                                    $("#habitacion").append('<option value="Cuádruple ($250.00)">Cuádruple ($250.00)</option>'); 
                                            }
                                            else if ( $(this).val()=="P"){
                                                    // $("#habitacion").attr("value","Doble ($375.00)").text("Doble ($375.00)"); 
                                                    $("#habitacion").append('<option value="Doble ($375.00)">Doble ($375.00)</option>'); 
                                            }
                                            else if ( $(this).val()=="N" ){
                                                    // $("#habitacion").attr("value","Cuádruple ($280.00)").text("Cuádruple ($280.00)");       
                                                    // $("#habitacion").attr("value","Doble ($410.00)").text("Doble ($410.00)"); 
                                                     
                                                    $("#habitacion").append('<option value="Cuádruple ($280.00)">Cuádruple ($280.00) Estudiante</option>');
                                                    $("#habitacion").append('<option value="Doble ($410.00)">Doble ($410.00) Profesional</option>');           
                                            }        

                                        });
                                    });
                                    </script>
                       
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
