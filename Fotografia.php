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
            
            <!-- Info Fotografo -->
            <div class="miv" id="infoto">    
                <div class="conmiv portafoto wiopo">
                    
                    <div class="backp">Atras</div>
                    
                    <span class="namep">Nombre del Fotógrafo</span>
                    <?=$tag->print_img_tag('porta_foto/pre/5.jpg');?>
                    
                    <div class="poqu">
                    	<span>Un poquito de mi</span><br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                    </div>
                    
                    <div class="infoFoto">
                    
                    	<span class="ws">
                        	Mi equipo de Trabajo: <br>
                            Idiomas que domino: <br>
                            Años de experiencia: <br>
                        </span>
                        
                        <span class="we">
                        	Camara: XXXXXX  -    Lente: XXXXXX<!-- <p class="lente">Lente: XXXXXX</p>--> <br>
                            Ingles, Español, Frances<br>
                            5 años de esperiencia
                        </span>
                        
                        <div class="both"></div>
                        
                        <span class="wesr">
                        	<br>
                        	Experiencia en el Campo
                            
                            <div class="porcien Bodasy">Bodas y Eventos Sociales <div class="circlef"></div><div class="circlef">200</div> </div>
                            <div class="porcien fotogroup">Fotografías de Grupos <div class="circlef"></div><div class="circlef">160</div> </div>
                            <div class="porcien cenote">Cenote <div class="circlef"></div><div class="circlef">120</div> </div>
                            <div class="porcien acuatica">Acuaticas/Submarinas <div class="circlef"></div><div class="circlef">70</div> </div>
                            <div class="porcien trash">Trash the dress <div class="circlef"></div><div class="circlef">160</div> </div>
                            <div class="porcien boudoir">Boudoir/Desnudos <div class="circlef"></div><div class="circlef">110</div> </div>
                            <div class="porcien conceptual">Conceptual <div class="circlef"></div><div class="circlef">180</div> </div>
                            <div class="porcien publicitaria">Publicitaria <div class="circlef"></div><div class="circlef">90</div> </div>
                            <div class="porcien deportes">Deportes Extremos <div class="circlef"></div><div class="circlef">180</div> </div>
                            
                        </span>
                        
                       <div class="trabajo">Mi trabajo</div>
                       <?=$tag->print_img_tag('calendario/estatico.png','calendario');?>
                        
                    </div>
                    
                </div>
            </div>
            
            <!-- Termina info Fotografo -->
            
        </div>
        
    </div>
    <!-- Fin -->

    
<?php include('includes/footer.php'); ?> 