<?php $page ='portafolios'; ?>
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
        
        
        
        <div class="almiv">
        
        	<div class="paquet">
                <a href="#" class="pb-video"><?=$retoquep[2]?></a>
                <a href="retoquep.php" class="pe-video" style="padding: 3px 6% 16px 6%;"><span class="pes"><?=$retoquep[3]?></span></a>
                <a href="#" class="mr"><?=$retoquep[4]?></a>
            </div>
            
            <div class="miv">
            
                <div class="conmiv retp">
                    
                    <div class="ante"><?=$retoquep[0]?></div>
                    <div class="despu"><?=$retoquep[1]?></div>
                    
                    <!-- <div class="backn"></div> -->
                    
                    <div class="comp">
                        <div class="antes ra"></div>
                        <div class="despues rd"></div>
                    </div>
                    
                </div>
            
            </div>
        </div>
        
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 