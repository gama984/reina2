            <!-- Copyright -->
            <div class="copyright">
            	
                <p> 
                	<?php 
						$qty = $conn->sum('views');
						$vis = $qty['SUM(qty)'];
					?>
                	Copyright 2014 © <span class="dom">www.reinablancastudio.com</span> <?=$footer[0]?> <br />
                    <?=$footer[1]?> <span class="cont"><?=$vis?></span><span class="polit"><a href="politicas.php"> *<?=$politicas[0]?></a></span>
                </p>
                
                <?php if($page != 'index'){?>
                <div class="search">
                	<?php 
						$tag->print_img_tag('busqueda/activo.png');
						$tag->print_img_tag('inicio/activa.png');
					?>
                </div>
                <?php }?>
                
            </div>
	  </div>
      </body>
 </html>