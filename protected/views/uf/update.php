<?php
/* @var $this UfController */
/* @var $model Uf */

$this->breadcrumbs=array(
	'Ufs'=>array('index'),
	$model->idUf=>array('view','id'=>$model->idUf),
	'Update',
);

$this->menu=array(
	array('label'=>'List Uf', 'url'=>array('index')),
	array('label'=>'Create Uf', 'url'=>array('create')),
	array('label'=>'View Uf', 'url'=>array('view', 'id'=>$model->idUf)),
	array('label'=>'Manage Uf', 'url'=>array('admin')),
);
?>

<h1>Update Uf <?php echo $model->idUf; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>