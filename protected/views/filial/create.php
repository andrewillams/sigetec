<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filials'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Filial', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Filial', 'url'=>array('admin')),
);
?>

<h1>Incluir Filial</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco,'contato'=>$contato)); ?>