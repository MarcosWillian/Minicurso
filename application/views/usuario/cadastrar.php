
<body>
	<div class="container">
		
		<div class="row">
			<div class="col-md-9 ">
				<h2>Cadastro de usuários</h2>
			</div>					

			<div class="col-md-3">
				<a href="<?php echo site_url("usuario/cadastrar"); ?>" class="btn btn-danger pull-right h2">
					Voltar
				</a>
			</div>
		</div>
		
		<br class="clear">
		<form action="<?php echo site_url('usuario/funcao_cadastrar'); ?>" method="POST" class="col-md-offset-2 col-md-8">

			<div class="row" style="margin-top: 30px;">
	            <div class="col-md-6">
	                <div class="form-group">
	                    <label for="nome">Nome completo</label>
						<input type="text" class="form-control input-lg" name="nome" id="nome" placeholder="Seu nome"required="required" data-error="Nome é obrigatório">
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <label for="idade">Idade</label>
						<input type="text" class="form-control input-lg" name="idade" id="idade" placeholder="Idade" maxlength="3" required="required" data-error="Idadeé obrigatório">
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	        </div>

	        <div class="row">
	        	<div class="col-md-12">
	        		<div class="form-group">
	        			<label for="email">E-mail</label>
	        			<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Email" >
	        		</div>
	        	</div>
	        </div>

			<div class="row">			
				<button type="submit" class="btn btn-success pull-right h2" style="margin-right: 15px;">
					Salvar
				</button>				
			</div>
			
		</form>

	</div>
</body>
</html>