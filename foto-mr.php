<?php $page ='foto'; ?>
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
        	
           <!-- <div class="paquet">
                <a href="foto.php" class="pb-video"> paquete basico</a>
                <a href="foto-pe.php" class="pe">paquete especial</a>
                <a href="foto-mr.php" class="mr-video"> <span class="mrs">mesa de regalo</span></a>
            </div>-->
            <div class="paquet paquetPhot">
                <a href="foto.php" class="pb-video"><?=$retoquep[2]?></a>
                <a href="foto-pe.php" class="pb-video" ><?=$retoquep[3]?></a>
                <a href="foto-mr.php" class="pe-video" style="padding: 3px 6% 16px 6%;"><span class="pes"><?=$retoquep[4]?></span></a>
            </div>
            
            <div class="miv">
            
                <div class="conmiv">
        
                </div>
            
            </div>
        </div>
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 