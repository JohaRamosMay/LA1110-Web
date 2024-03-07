<?php include("template/header.php"); ?>

<?php include("administrador/config/bdpl.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM productos;");
$sentenciaSQL->execute();
$listaproductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>





<section data-bs-version="5.1" class="slider4 mbr-embla cid-u5pSQQi6rU mbr-parallax-background" id="slider04-3y">
    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(255, 246, 229);"></div>
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-1">
                    <strong>Polos Literarios</strong>
                </h3>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7"><strong>Polos literarios hechos con 10% algodón peruano reactivo y estampados de la mejor calidad. <br> No encogen ni destiñen. <br> <a href="https://postimg.cc/PLn3fXsW" target="_blank">Revisa la tabla de medidas para conocer tu talla.</a>
                    </strong>
                </h5>
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="features4 cid-u5w92RwmgN" id="features04-4t">

	<div class="container">
			<div class="row">

        		<?php foreach ($listaproductos as $producto) { ?>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="item features-image">
						<div class="item-wrapper">
							<div class="item-img">
								<img src="./assets/images/<?php echo $producto['Imagen']; ?>" width="100" alt="">
							</div>
							<div class="item-content">
								<h5 class="item-title mbr-fonts-style display-5">
									<strong><?php echo $producto['Nombre']; ?></strong>
								</h5>
								<p class="mbr-text mbr-fonts-style display-7">
									<?php echo $producto['Descripcion']; ?>
								</p>
								<h6 class="item-subtitle mbr-fonts-style display-7">
									<strong><?php echo $producto['Precio']; ?></strong>
								</h6>
								<div class="mbr-section-btn item-footer">
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>


</section>


<?php include("template/footer.php"); ?>