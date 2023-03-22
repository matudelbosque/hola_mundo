<div class="cont_padre">
    <div id="carouselAceitesBlends" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
                            <!--              grupo 3 cards                -->
            <div class="carousel-item active">
                    <?php //include('recursos.php');
                    $lista_blend = $produc2->listar_blend();
                     for ($i=0; $i<3 ; $i++) { ?>

                       <!--               card                 -->
                    <a href="detalle_prod.php?prod=<?php echo $lista_blend[$i]['cod_producto']?>">
                        <div class="card" style="width: 13rem;">
                            <img src="<?php echo $lista_blend[$i]['foto'] ?>" class="card-img-top" alt="foto <?php echo $lista_blend[$i]['titulo'] ?>">
                            <div class="card-body">
                                <p class="card-title"><?php echo $lista_blend[$i]['titulo'] ?></p>
                                <p class="card-text"><?php echo $lista_blend[$i]['subtitulo']?></p>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                       <!--               card                 -->   
                </div>

                <?php $lista_blend = $produc2->listar_blend();
                for ($i=3 ; $i<count($lista_blend) ; $i++) { ?>
                <div class="carousel-item">
                <?php for ($j=0 ; $j<3 ; $j++) {
                    if(isset($lista_blend[$i+$j])){
                    ?>
                       <!--               card                 -->
                    <a href="detalle_prod.php?prod=<?php echo $lista_blend[$i+$j]['cod_producto']?>">
                        <div class="card" style="width: 13rem;">
                            <img src="<?php echo $lista_blend[$i+$j]['foto'] ?>" class="card-img-top" alt="foto <?php echo $lista_blend[$i+$j]['titulo'] ?>">
                            <div class="card-body">
                                <p class="card-title"><?php echo $lista_blend[$i+$j]['titulo'] ?></p>
                                <p class="card-text"><?php echo $lista_blend[$i+$j]['subtitulo']?></p>
                            </div>
                        </div>
                    </a>
                       <!--               card                 -->
                       <?php } } ?>
                </div>
            <?php   $i=$i+2;  } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAceitesBlends" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAceitesBlends" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>