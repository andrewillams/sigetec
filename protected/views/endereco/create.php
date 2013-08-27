<?php
/* @var $this EnderecoController */
/* @var $model Endereco */

$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Endereco', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Endereco', 'url'=>array('admin')),
);
?>

<h1>Incluir Endereco</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>