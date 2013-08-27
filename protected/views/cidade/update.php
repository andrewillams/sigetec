<?php
/* @var $this CidadeController */
/* @var $model Cidade */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->idCidade=>array('view','id'=>$model->idCidade),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cidade', 'url'=>array('index')),
	array('label'=>'Create Cidade', 'url'=>array('create')),
	array('label'=>'View Cidade', 'url'=>array('view', 'id'=>$model->idCidade)),
	array('label'=>'Manage Cidade', 'url'=>array('admin')),
);
?>

<h1>Update Cidade <?php echo $model->idCidade; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>