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
                
                    <div class="porta" id="5"><?=$tag->print_img_tag('porta_foto/all/1.jpg');?></div>
                    <div class="porta" id="2"><?=$tag->print_img_tag('porta_foto/all/2.jpg');?></div>
                    <div class="porta" id="3"><?=$tag->print_img_tag('porta_foto/all/3.jpg');?></div>
                    
                    <div class="porta" id="4"><?=$tag->print_img_tag('porta_foto/all/4.jpg');?></div>
                    <div class="porta" id="1" style="opacity:1;"><?=$tag->print_img_tag('porta_foto/all/5.jpg');?></div>
                    <div class="porta" id="6"><?=$tag->print_img_tag('porta_foto/all/6.jpg');?></div>
                    
                </div>
            
            </div>
            
            <!-- Info Fotografo -->
            <div class="miv" id="infoto">    
                <div class="conmiv portafoto wiopo">
                    
                    <div class="backp"><?=$portafolio[0]?></div>
                    
                    <span class="namep" id="myname">*</span>
                    <?=$tag->print_img_tag('porta_foto/pre/5.jpg','imgpg');?>
                    
                    <div class="poqu">
                    	<span id="myabout"><?=$portafolio[1]?></span><br>
                        <span id="aboutme">*</span>
                    </div>
                    
                    <div class="infoFoto">
                    
                    	<span class="ws">
                        	<?=$portafolio[2]?>: <br>
                            <?=$portafolio[5]?>: <br>
                            <?=$portafolio[6]?>: <br>
                        </span>
                        
                        <span class="we">
                        	 <?=$portafolio[3]?>: <span id="mycamara">*</span> -  <?=$portafolio[4]?>: <span id="mylente">*</span><br>
                            <span id="myidioma">*</span><br>
                            <span id="myan">*</span> <?=$portafolio[8]?>
                        </span>
                        
                        <div class="both"></div>
                        
                        <span class="wesr">
                        	<br>
                        	 <?=$portafolio[7]?>
                            
                            <div class="porcien Bodasy">Bodas y Eventos Sociales <div class="circlef"></div><div class="circlef" id="mybo">*</div> </div>
                            <div class="porcien fotogroup">Fotografías de Grupos <div class="circlef"></div><div class="circlef" id="mygr">*</div> </div>
                            <div class="porcien cenote">Cenote <div class="circlef"></div><div class="circlef" id="myce">*</div> </div>
                            <div class="porcien acuatica">Acuaticas/Submarinas <div class="circlef"></div><div class="circlef" id="myac">*</div> </div>
                            <div class="porcien trash">Trash the dress <div class="circlef"></div><div class="circlef" id="mytr">*</div> </div>
                            <div class="porcien boudoir">Boudoir/Desnudos <div class="circlef"></div><div class="circlef" id="mybu">*</div> </div>
                            <div class="porcien conceptual">Conceptual <div class="circlef"></div><div class="circlef" id="myco">*</div> </div>
                            <div class="porcien publicitaria">Publicitaria <div class="circlef"></div><div class="circlef" id="mypu">*</div> </div>
                            <div class="porcien deportes">Deportes Extremos <div class="circlef"></div><div class="circlef" id="myde">*</div> </div>
                            
                        </span>
                        
                       <div class="trabajo" id="0">Mi trabajo</div>
                       <?=$tag->print_img_tag('calendario/estatico.png','calendario');?>
                        
                    </div>
                    
                </div>
            </div>
            
            <!-- Termina info Fotografo -->
            
        </div>
        
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 