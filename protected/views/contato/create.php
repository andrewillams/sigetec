<?php
/* @var $this ContatoController */
/* @var $model Contato */

$this->breadcrumbs=array(
	'Contatos'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Contato', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Contato', 'url'=>array('admin')),
);
?>

<h1>Incluir Contato</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>