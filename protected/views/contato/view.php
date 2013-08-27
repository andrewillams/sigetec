<?php
/* @var $this ContatoController */
/* @var $model Contato */

$this->breadcrumbs=array(
	'Contatos'=>array('index'),
	$model->idContato,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Contato', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Contato', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Contato', 'url'=>array('update', 'id'=>$model->idContato)),
	array('label'=>Yii::t('app','Delete').' Contato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idContato),'confirm'=>Yii::t('app','Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Contato', 'url'=>array('admin')),
);
?>

<h1>View Contato #<?php echo $model->idContato; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idContato',
		'fixo',
		'celular',
		'skype',
		'facebook',
		'twitter',
	),
)); ?>
