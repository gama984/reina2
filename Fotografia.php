<?php $page ='fotografia'; ?>
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
            <div class="miv mivsd">
            
                <div class="conmiv portafoto port">
                	
                    <div class="bordt"></div>
                    <div class="bordb"></div>
                
                    <div class="porta" id="porta1"><?=$tag->print_img_tag('porta_foto/1.jpg');?></div>
                    <div class="porta" id="porta2"><?=$tag->print_img_tag('porta_foto/2.jpg');?></div>
                    <div class="porta" id="porta3"><?=$tag->print_img_tag('porta_foto/3.jpg');?></div>
                    
                    <div class="porta" id="porta4"><?=$tag->print_img_tag('porta_foto/4.jpg');?></div>
                    <div class="porta" id="porta5" style="opacity:1;"><?=$tag->print_img_tag('porta_foto/5.jpg');?></div>
                    <div class="porta" id="porta6"><?=$tag->print_img_tag('porta_foto/6.jpg');?></div>
                    
                </div>
            
            </div>
        </div>
        
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 