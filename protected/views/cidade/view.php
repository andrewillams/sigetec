<?php
/* @var $this CidadeController */
/* @var $model Cidade */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->idCidade,
);

$this->menu=array(
	array('label'=>'List Cidade', 'url'=>array('index')),
	array('label'=>'Create Cidade', 'url'=>array('create')),
	array('label'=>'Update Cidade', 'url'=>array('update', 'id'=>$model->idCidade)),
	array('label'=>'Delete Cidade', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCidade),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Cidade', 'url'=>array('admin')),
);
?>

<h1>View Cidade #<?php echo $model->idCidade; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'idUf',
			'value'=>$model->idUf0->nome,
		),
		'nome',
		'codIBGE',
	),
)); ?>
