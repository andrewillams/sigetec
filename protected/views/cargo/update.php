<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->idCargo=>array('view','id'=>$model->idCargo),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Cargo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Cargo', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Cargo', 'url'=>array('view', 'id'=>$model->idCargo)),
	array('label'=>Yii::t('app','Manage').' Cargo', 'url'=>array('admin')),
);
?>

<h1>Update Cargo <?php echo $model->idCargo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>