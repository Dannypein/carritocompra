<div class="row" style='margin-top: 1em'>
	<div class='col-xs-12'>
		<div class='alert alert-dismissable alert-success'>
			<button class='close' data-dismiss='alert'>x</button>
			Su compra ha sido registrada. Los detalles de su pedido se 
			muestran abajo.
		</div>
	</div>
</div>
<hr>
<div class='row'>
	<div class='col-xs-12'>
		<!-- <div class='well'> -->
			<a class='btn btn-primary' href='<?=link_pagina($this, 'catalogo', 'catalogo')?>'>Volver al catálogo</a> 
<<<<<<< HEAD
			<script>
				var pfHeaderImgUrl = '';
				var pfHeaderTagline = '';
				var pfdisableClickToDel = 0;
				var pfHideImages = 0;
				var pfImageDisplayStyle = 'block';
				var pfDisablePDF = 0;
				var pfDisableEmail = 0;
				var pfDisablePrint = 0;
				var pfCustomCSS = '';
				var pfBtVersion='1';
				(function(){
					var js, pf;
					pf = document.createElement('script');
					pf.type = 'text/javascript';
					if('https:' == document.location.protocol){
						js='https://pf-cdn.printfriendly.com/ssl/main.js'
					}else{
						js='http://cdn.printfriendly.com/printfriendly.js'
					}
					pf.src=js;
					document.getElementsByTagName('head')[0].appendChild(pf)
				})();
			</script>
			<!-- <a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-gry20.png" alt="Print Friendly and PDF"/></a> -->
			<a class='btn btn-default' target="_blank"  onclick="window.print();return false;" href='http://www.printfriendly.com'>Imprimir</a>
=======
>>>>>>> master
		<!-- </div> -->
	</div>
</div>	
<div class='row'>
	<div class='col-xs-12'>
		<div id='detalles-pedido'>
			<?=$this->load->view('admin/pedidos/tabla-detalles')?>
		</div>
	</div>
</div>