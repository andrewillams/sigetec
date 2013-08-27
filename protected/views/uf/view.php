<?php
/* @var $this UfController */
/* @var $model Uf */

$this->breadcrumbs=array(
	'Ufs'=>array('index'),
	$model->idUf,
);

$this->menu=array(
	array('label'=>'List Uf', 'url'=>array('index')),
	array('label'=>'Create Uf', 'url'=>array('create')),
	array('label'=>'Update Uf', 'url'=>array('update', 'id'=>$model->idUf)),
	array('label'=>'Delete Uf', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUf),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Uf', 'url'=>array('admin')),
);
?>

<h1>View Uf #<?php echo $model->idUf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUf',
		'nome',
		'codIBGE',
		'sigla',
	),
)); ?>
