<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Cargo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Cargo', 'url'=>array('admin')),
);
?>

<h1>Incluir Cargo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>