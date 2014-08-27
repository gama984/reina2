<?php $page ='nosotros'; ?>
<?php include('includes/header.php'); ?>
	
    
    <!-- Inicia -->
    <div class="contenido">
    	
        <?php
		
			include 'includes/listaOp.php';
			$tag->print_img_tag('page/bg.jpg');
		?>
    	
        <div class="miv">
        
        	<div class="conmiv">
            
            	<div class="mision">
                	<?php $nosotros[0]  ?><br><br>
                    <span><?=$nosotros[1]?></span>
                    
                </div>
                
                <div class="vision">
                	<?=$nosotros[2]?><br><br>
                    <span><?=$nosotros[3]?></span>
                    
                </div>
            	
            </div>
        
        </div>
        
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 