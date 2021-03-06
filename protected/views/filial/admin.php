<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filiais'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Filial', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Filial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#filial-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Listar Filiais</h1>

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
	'id'=>'filial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idFilial',
		'nome',
		'cnpj',
		'idEndereco',
		'inscEstadual',
		array(
			'name'=>'idEndereco0.idCidade',
			'value'=>'$data->idEndereco0->idCidade0->nome."-".$data->idEndereco0->idCidade0->idUf0->sigla',
			'filter'=>CHtml::listData(Cidade::model()->findAll(),'idCidade','nome'),
		),
		array(
			'name'=>'idEndereco0.bairro',
			'value'=>'$data->idEndereco0->bairro',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
