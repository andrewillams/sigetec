<?php
/* @var $this ContatoController */
/* @var $model Contato */

$this->breadcrumbs=array(
	'Contatos'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Contato', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Contato', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contato-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Listar Contatos</h1>

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
	'id'=>'contato-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idContato',
		'fixo',
		'celular',
		'skype',
		'facebook',
		'twitter',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
