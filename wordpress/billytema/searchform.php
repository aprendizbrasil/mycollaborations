<!--Tema: Billy Tema-->
<!--Fonte: https://www.youtube.com/watch?v=44XAFLCBo9g-->

<!-- Código que exibe o Formulário de Pesquisa padronizado   -->

<form action="" method="get" accept-charset="utf-8" id="searchform" role="search">
	<div>
		<input type="text" name="s" id="s" value="Pesquisar no Site" 
			onblur="if(this.value=='') this.value='Pesquisar no Site';" 
			onfocus="if(this.value=='Pesquisar no Site') this.value='';" />
		<input type="submit" id="searchsubmit" value="Buscar"/>	
	</div>
</form>
