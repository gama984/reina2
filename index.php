<?php $page ='index'; ?>
<?php include('includes/header.php'); ?>
	
    
    <!-- Inicia -->
    <div class="contenido">
    	
    	<div class="bord bord1"></div>
        <div class="bord bord2"></div>
        <div class="bord bord3"></div>
        <div class="bord bord4"></div>
    
    	<?php
			$tag->print_img_tag('page/bride.jpg');
			echo '<div class="imB contenido">';
				$tag->print_img_tag('page/brideb.jpg');
			echo '</div>';
		?>
        
        <div class="welcome"><a href="nosotros.php"><?=$index[0]?></a> <div class="homr"></div></div>
        <div class="cent"><div class="loading"></div></div>
        
    </div>
    <!-- Fin -->


<?php include('includes/footer.php'); ?> 