<h1>Post <small><?= $label ?></small></h1>
<form method="post" action="">
	<div class="row-fluid">
	<?= BForm::input('Título', 'Title', $model->Title, 'input-block-level', array('placeholder' => 'Digite o título aqui')) ?>
	</div>
	<div class="row-fluid">
		<div class="control-group span8">
			<label class="control-label" for="Title">Categorias</label>
			<div class="controls">
				<select name="categories[]" class="span12" data-placeholder="Escolha uma categoria" data-toggle="chosen-multiple" multiple="" tabindex="3">
					<option value=""></option>
					<?php foreach($categories as $c): ?>
					<option <?= array_search($c->Id, $selectedCategories) !== false ? 'selected="selected"' : '' ?> value="<?= $c->Id ?>"><?= $c->Name ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
	</div>
	<?= BForm::textarea('Conteúdo', 'Content', $model->Content, 'input-block-level ckeditor') ?>
	<?php if ($label == 'Criar' || $model->Status === 0): ?>
		<button type="submit" class="btn btn-inverse">Publicar</button>
		<button type="submit" class="btn" name="Draft" value="1">Salvar Rascunho</button>
	<?php else: ?>
		<button type="submit" class="btn btn-inverse">Atualizar</button>
	<?php endif ?>
	<a href="~/admin/post" class="help-inline">Voltar</a>
</form>