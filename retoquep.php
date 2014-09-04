<?php $page ='portafolios'; ?>
<?php include('includes/header.php'); ?>
	
    
    <!-- Inicia -->
    <div class="contenido">
    	
        <?php
		
			include 'includes/listaOp.php';
			$tag->print_img_tag('page/bg.jpg');
		?>
    	
        <!--<div class="paquet">
            <a href="#" class="pb-video">Retoque Básico</a>
            <a href="retoquep.php" class="pe-video"><span class="pes">Retoque Profundo</span></a>
            <a href="#" class="mr">Retoque Artístico</a>
		</div>-->
        
        <div class="paquet">
            <a href="#" class="pb-video">Retoque Básico</a>
            <a href="retoquep.php" class="pe-video" style="padding: 3px 6% 16px 6%;"><span class="pes">Retoque Profundo</span></a>
            <a href="#" class="mr">Retoque Artístico</a>
		</div>
        
        <div class="miv">
        
        	<div class="conmiv">
            	
            	<div class="ante"></div>
           		<div class="despu"></div>
                
            	<div class="comp">
                	<div class="antes ra"></div>
                    <div class="despues rd"></div>
                </div>
            	
            </div>
        
        </div>
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 