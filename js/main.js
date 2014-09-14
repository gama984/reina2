/*********************************************
*
* Home
*
*********************************************/


function setLang(idioma){
  $.post("functions/stuff.php",{setLang : 1, idioma : idioma},function(data){
	  location.reload();
  });
}

$(document).ready(function(e) {
	
	
	setTimeout(function(){$('.loading').html("<img src='img/barra_carga/1.png'/>");}, 200);
	setTimeout(function(){$('.loading').html("<img src='img/barra_carga/2.png'/>");}, 400);
	setTimeout(function(){$('.loading').html("<img src='img/barra_carga/3.png'/>");}, 600);
	setTimeout(function(){$('.loading').html("<img src='img/barra_carga/4.png'/>");}, 800);
	setTimeout(function(){$('.loading').html("<img src='img/barra_carga/5.png'/>");}, 1000);
	//setTimeout(function(){$('.loading').html("");}, 900);
	
	$(window).load(function(){
	  setTimeout(function(){$('.loading').html("");}, 1200);
	  $('.imB').fadeOut(3000);
	});
	
	$('.menOp').click(function(){
		$('.opL').toggle();
	});
	
	$('#porta5').click(function(){
		$('.mivsd').hide();
		$('#infoto').show();
	});
	
});


/*ducumento de fqa*/

document.write('<style type="text/css">p.p2{display: none;}</style>');  
function MostrarOcultar(capa,enlace)  
{  
    if (document.getElementById)  
    {  
        var aux = document.getElementById(capa).style;  
        aux.display = aux.display? "":"block";  
    }  
}