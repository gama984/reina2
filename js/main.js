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
	
	$(window).load(function(){
	  setTimeout(function(){$('.loading').html("");}, 1200);
	  $('.imB').fadeOut(3000);
	});
	
	$('.menOp').click(function(){
		$('.opL').toggle();
	});
	
	$('.backp').click(function(){
		$('.mivsd').show();
		$('#infoto').hide();
	});
	
<<<<<<< HEAD
	// fotografo
	$('.porta').click(function(){
		var id = $(this).attr("id");
		$.post('functions/do.php',{ id : id, n : 1},function(data){
			if( data != 0 ){
				$('.mivsd').hide();
				$('#infoto').show();
				$('.imgpg').attr('src' , 'img/porta_foto/pre/'+data.id+'.jpg' );
				$('.trabajo').attr('id' , data.id );
				$('#myname').text(data.nombre);
				$('#aboutme').text(data.about);
				$('#mycamara').text(data.camara);
				$('#mylente').text(data.lente);
				$('#myidioma').text(data.idioma);
				$('#myan').text(data.experiencia);
				$('#mybo').text(data.boda);
				$('#mygr').text(data.grupo);
				$('#myce').text(data.cenote);
				$('#myac').text(data.acuatica);
				$('#mytr').text(data.trash);
				$('#mybu').text(data.boudoir);
				$('#myco').text(data.conceptual);
				$('#mypu').text(data.publicitaria);
				$('#myde').text(data.deporte);
			};
		},'json');
	});	
	
	
});
=======
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
>>>>>>> eeeb9f65f820b0339f5d434fbbe07f88ab60a76f
