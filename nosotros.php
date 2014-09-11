<?php $page ='nosotros'; ?>
<?php include('includes/header.php'); ?>
	
    
    <!-- Inicia -->
    <div class="contenido">
    
    	<div class="bord bord1"></div>
        <div class="bord bord2"></div>
        <div class="bord bord3"></div>
        <div class="bord bord4"></div>
    	
        <?php
		
			include 'includes/listaOp.php';
			$tag->print_img_tag('page/bg.jpg');
		?>
    	<div class="almiv almivp">
            <div class="miv">
            
                <div class="conmiv">
                	
                    <div class="bordt bordtnos"></div>
                    
                
                    <div class="mision">
                        <p><?= $nosotros[0]?></p>
                        <span><?=$nosotros[1]?></span>
                    </div> 
                    
                </div>
            
            </div>
        </div>
        
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 