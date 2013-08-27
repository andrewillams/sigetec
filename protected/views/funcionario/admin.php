<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Funcionario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Funcionario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#funcionario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Listar Funcionários</h1>

<p>
Use operadores de comparação para refinar a sua pesquisa (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou  <b>=</b>) começando antes que cada valor da pesquisa seja inserido para especificar como a mesma deve ser feita.</p>

<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'funcionario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'  => 'idFilial',
			'value' => '$data->idFilial0->nome." - ".$data->idFilial0->cnpj',
		),
		'nome',
		'cpf',
		'matricula',
		array(
			'name'  => 'idContato0.fixo',
			'value' => '$data->idContato0->fixo'
		),
		array(
			'name'  => 'idContato0.celular',
			'value' => '$data->idContato0->celular'
		),
		array(
			'name'  => 'idCargo',
			'value' => '$data->idCargo0->idSetor0->sigla." - ".$data->idCargo0->nome'
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
