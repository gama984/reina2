<header>
	
    <a href="index.php"><div class="logo"></div></a>
    
   <div class="lang">
   		<div class="flag">
        
        	<?php
				if($page != 'index')
				echo '<span class="reg">'.$menu[0].' <input type="text" name="registro" id="registro" required="required" /> </span>';
			?>	
				<a href="javascript:setLang(1)" id="en"><?=$tag->print_img_tag('lang/ingles.png');?></a>
				<a href="javascript:setLang(2)" id="es"><?=$tag->print_img_tag('lang/espanol.png');?></a>

            
        </div>
        <div style="clear:both"></div>
        <p><?=date("d/m/Y H:i a")?> Playa del Carmen, Méx.</p>
        <div style="clear:both"></div>
        
   </div>
    
</header>