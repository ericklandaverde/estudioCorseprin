<!DOCTYPE html>
<html>
<head>
	<title>Estudio SocioEconomico</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<!-- js -->
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
    <script type="text/javascript">
            var regex = /^(.*)(\d)+$/i;
            var cloneIndex = $(".clonedInput").length;

            function clone(){
                $(this).parents(".clonedInput").clone()
                    .appendTo("body")
                    .attr("id", "clonedInput" +  cloneIndex)
                    .find("*")
                    .each(function() {
                        var id = this.id || "";
                        var match = id.match(regex) || [];
                        if (match.length == 3) {
                            this.id = match[1] + (cloneIndex);
                        }
                    })
                    .on('click', 'button.clone', clone)
                    .on('click', 'button.remove', remove);
                cloneIndex++;
            }
            function remove(){
                $(this).parents(".clonedInput").remove();
            }
            $("button.clone").on("click", clone);

            $("button.remove").on("click", remove);
    </script>
</head>

<body>
	<div class="menu-area">
		<div id="dl-menu" class="dl-menuwrapper">
			<button class="dl-trigger">Open Menu</button>
			<ul class="dl-menu">
				<li>
					<a href="index.html">Principal</a>
				</li>
				<li><a href="formularioIdentificacion.php">Comenzar...</a></li>
			</ul>
		</div>
	</div>	

	<!-- Altas -->
	<section id="contact" class="home-section bg-white">
		<div class="container">
			
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
						<h2>ESTUDIO SOCIOECONOMICO</h2>
						<p><label>INVESTIGACION SOCIAL Y FAMILIAR</label></p>
						<p>CANDIDATO: <label><?php echo $clave; ?></label></p>
					</div>
				</div>
			</div>
           
   <div class="row">
        <div class="col-md-offset-1 col-md-10">

			<form id="myForm" action="formularioFinal.php" method="post" class="form-horizontal" role="form">
				    <label> a) Datos Familiares (Personas con las que vive) </label>
				    
<!--         		    <div class="form-group">
        		    	<div class="col-md-offset-2 col-md-8">
        				    <div id="input1" class="clonedInput">
        				    	<fieldset>
                                   <legend>Familiar</legend>   
        			    	       <table>
        			    	       	<tr>
                                        <td><label>Parentesco</label></td>
                                        <td><label>Nombre:</label></td>
                                    </tr>
                                    <tr>
                                    <td>                           
                                        <select type="text" class="form-control" id="parentesco1" placeholder="Parentesco" name="parentesco1" required>
                                           <option selected value="">Seleccione un parentesco</option>
                                           <option value="Hijo(a)">Hijo(a)</option>
                                           <option value="Esposo(a)">Esposa(a)</option>
                                           <option value="Padres">Padres</option>
                                           <option value="Hermanos">Padres</option>
                                       </select>
                                    </td>
                                    	<td><input type="text" class="form-control" id="name1" placeholder="Nombre" name="name1" required></td>
                                    </tr>
                                    <tr>
                                        <td><label>Edad</label></td>
                                        <td><label>Ocupacion:</label></td>
                                        <td><label>Depende economicamente:</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" id="edad1" placeholder="Edad" name="edad1" required></td>
                                        <td><input type="text" class="form-control" id="ocupacion1" placeholder="Ocupacion" name="ocupacion1" required></td>
                                        <td>
                                            <input type="radio" id="depende1" name="depende1" value="Si" placeholder="Selecciona una opcion" checked required>Si
                                            <input type="radio" id="depende1" name="depende1" value="No" placeholder="Selecciona una opcion" required>No
                                        </td>
                                    </tr>
                                   </table>
                                 </fieldset>
        				    </div>
        				</div>
        			</div> -->
				    <div id="clonedInput1" class="clonedInput">
                    <div>
                        <label for="txtCategory" class="">Learning category <span class="requiredField">*</span></label>
                        <select class="" name="txtCategory[]" id="category1">
                            <option value="">Please select</option>
                        </select>
                    </div>
                    <div>
                        <label for="txtSubCategory" class="">Sub-category <span class="requiredField">*</span></label>
                        <select class="" name="txtSubCategory[]" id="subcategory1">
                            <option value="">Please select category</option>
                        </select>
                    </div>
                    <div>
                        <label for="txtSubSubCategory">Sub-sub-category <span class="requiredField">*</span></label>
                        <select name="txtSubSubCategory[]" id="subsubcategory1">
                            <option value="">Please select sub-category</option>
                        </select>
                    </div>
                    <div>
                        <input type="button" class="clone" id="btnAdd" value="Agregar otro familiar" />
                        <input type="button" class="remove" id="btnDel" value="Remover" />
                    </div>
                    </div>

				    <div class="form-group">
				    	
				    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <label> b) Actividades Sociales: </label>
                            <table>
                                <tr><label>¿Que religion profesa?</label></tr>
                                <tr>
                                    <select type="text" class="form-control" id="inputClave" placeholder="Religion" name="religion" required>
                                            <option selected value="">Seleccione una opcion</option>
                                            <option value="Creyente">Creyente</option>
                                            <option value="Ateo">Ateo</option>
                                            <option value="Catolico">Catolico</option>
                                            <option value="Cristiano">Cristiano</option>
                                            <option value="Testigo de Jehová">Testigo de Jehová</option>
                                            <option value="Otra Religion">Otra Religion</option>
                                    </select>
                                </tr>
                                <tr>
                                    <td><label>Actividades<label></td>
                                    <td><label>Frecuencia Anual</label></td>
                                </tr>
                                <tr>
                                    <td><label>Eventos sociales (Familiares o amigos)<label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="sociales" required></td>
                                </tr>
                                <tr>
                                    <td><label>Eventos sociales (Familiares o amigos)<label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="comunitarios" required></td>
                                </tr>
                            </table><br>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <label> c) Actividades Culturales: </label>
                            <table>
                                <tr>
                                    <td><label>Actividades<label></td>
                                    <td><label>Frecuencia Anual</label></td>
                                </tr>
                                <tr>
                                    <td><label>Museos: <label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="museos" required></td>
                                </tr>
                                <tr>
                                    <td><label>Teatro: <label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="teatro" required></td>
                                </tr>
                                <tr>
                                    <td><label>Festivales Culturales: <label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="culturales" required></td>
                                </tr>
                                <tr>
                                    <td><label>Zonas arqueologicas: <label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="arqueologicas" required></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <label> e) Actividades Recreativas: </label>
                            <table>
                                <tr>
                                    <td><label>Actividad<label></td>
                                    <td><label>Frecuencia anual</label></td>
                                </tr>
                                <tr>
                                    <td><label>Vacaciones</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="vacaciones" required></td>
                                </tr>
                                <tr>
                                    <td><label>Plazas publicas</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="publicas" required></td>
                                </tr>
                                <tr>
                                    <td><label>Parques naturales</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="naturales" required></td>
                                </tr>
                                <tr>
                                    <td><label>Parques de diversiones</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="diversiones" required></td>
                                </tr>
                                <tr>
                                    <td><label>Cine</label></td>
                                    <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="cine" required></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
		                <div class="col-md-offset-2 col-md-8">
			                    <label> f)  Pasatiempos : </label>
			                    <table>
			                        <tr>
			                            <td><label>Actividad<label></td>
			                            <td><label>Frecuencia anual</label></td>
			                        </tr>
			                        <tr>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadA" required></td>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaA" required></td>
			                        </tr>
			                        <tr>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadB" required></td>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaB" required></td>
			                        </tr>
			                        <tr>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadC" required></td>
			                            <td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaC" required></td>
			                        </tr>
			                    </table>
			             </div>
		            </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
                            <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
                        </div>
                    </div>
            </form>
        <div>
      <div>
			
			<div class="row mar-top30 ">
				<div class="col-md-offset-2 col-md-8">
					<h5>Tienes dudas contactanos por nuestras redes sociales.</h5>
					<ul class="social-network">
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
					</ul>
				</div>				
			</div>
		
		</div> <!-- container -->
	</section>  

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;2015 <a href="http://corseprin.com.mx/">Corseprin </a></p>
					<p>Copyright &copy;2015 <a href="Login-ajax/index.php">INGRESAR AL SISTEMA</a></p>
				</div>
			</div>		
		</div>	
	</footer>

	<!-- js -->
    <!-- <script src="js/jquery.js"></script> -->
	<!-- <script src="js/bootstrap.min.js"></script>  -->
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

	</html>