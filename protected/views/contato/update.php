<?php
/* @var $this ContatoController */
/* @var $model Contato */

$this->breadcrumbs=array(
	'Contatos'=>array('index'),
	$model->idContato=>array('view','id'=>$model->idContato),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Contato', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Contato', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Contato', 'url'=>array('view', 'id'=>$model->idContato)),
	array('label'=>Yii::t('app','Manage').' Contato', 'url'=>array('admin')),
);
?>

<h1>Update Contato <?php echo $model->idContato; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>