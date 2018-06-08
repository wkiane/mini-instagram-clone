<div class="container">
	<form action="<?=BASE_URL?>/profile/edit" enctype="multipart/form-data" method="POST" >
		<h1 class="mt-5 mb-3">Edite suas informações</h1>
		<div class="form-group">
			<label>Foto de perfil:</label>
			<input class="form-control-file" type="file" name="foto">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="nome" placeholder="Nome.." value="<?=$profile->nome?>">
		</div>

		<div class="form-group">
			<textarea name="descricao" class="form-control" placeholder="Descrição"><?=$profile->descricao?></textarea>
		</div>
		<input type="submit" name="enviar" value="Atualizar" class="btn btn-primary">
	</form>
</div>