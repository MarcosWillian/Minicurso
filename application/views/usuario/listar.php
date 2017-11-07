
<body>
	<div class="container">		

		<?php if( !empty( $this->session->flashdata("mensagem") ) ){ ?>

			<div class="row" onload="aviso()" id="alerta">
				<?php if( $this->session->flashdata("tipo") == "sucesso" ){ ?>
					<div class="col-md-12 bg-success">
				<?php } else { ?>
					<div class="col-md-12 btn-danger ">
				<?php } ?>
				
					<h4 class="text-center" style="padding-top: 15px; padding-bottom: 15px;">						
						<?php echo $this->session->flashdata("mensagem"); ?>
					</h4>
				</div>
			</div>

		<?php } ?>
		
		<div class="row">
			<div class="col-md-9 ">
				<h2>Lista de usuários</h2>
			</div>		

			<div class="col-md-3">
				<a href="<?php echo site_url("usuario/cadastrar"); ?>" class="btn btn-primary pull-right h2">
					Novo Usuário
				</a>
			</div>
		</div>
		
		
		<div class="row" style="margin-top: 30px;">
			<table class="table table-striped" style="font-weight: 600;">
				<thead class="bg-primary">
					<td class="col-md-2">Opções</td>
					<td class="col-md-1">Id</td>
					<td class="col-md-3">Nome</td>
					<td class="col-md-1">Idade</td>
					<td class="col-md-4">Email</td>
				</thead>

				<?php if ( !empty($usuarios) ){ ?>

					<?php foreach ($usuarios as $u) { ?>
						<tr>
							<td>
								<a href="<?php echo site_url("usuario/editar/$u->id"); ?>" class="btn btn-success btn-sm glyphicon glyphicon-pencil"></a>
								<a href="<?php echo site_url("usuario/funcao_excluir/$u->id"); ?>" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
							</td>
							<td style="padding-left: 10px;"><?php echo $u->id; ?></td>
							<td><?php echo $u->nome; ?></td>
							<td style="padding-left: 20px;"><?php echo $u->idade; ?></td>
							<td><?php echo $u->email; ?></td>
						</tr>
					<?php } ?>

				<?php } else { ?>
				<tr>
					<td colspan="5">
						<br class="clear">
						<p class="text-center">Não há usuários cadastrados</p>
					</td>						
				</tr>
				<?php } ?>
			</table>
		</div>

	</div>

</body>
</html>