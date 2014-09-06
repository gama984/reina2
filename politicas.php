<?php $page ='faq'; ?>
<?php include('includes/header.php'); ?>
	
    
    <!-- Inicia -->
    <div class="contenido">
    	
        <?php
		
			include 'includes/listaOp.php';
			$tag->print_img_tag('page/bg.jpg');
		?>
    	
        <div class="almiv">
        
            <div class="miv">
                <div class="conmiv politica">
                    <span class="colorback">
                    
                        <p><?=$politicas[0]?></p>
                        
                        <span>
                            <?=$politicas[1]?>
                        <span>
    
                    </span>
                </div>
            </div>
            
        </div>
        
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 