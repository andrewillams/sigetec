<?php
/* @var $this SetorController */
/* @var $model Setor */

$this->breadcrumbs=array(
	'Setors'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Setor', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Setor', 'url'=>array('admin')),
);
?>

<h1>Incluir Setor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>