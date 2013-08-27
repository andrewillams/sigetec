<?php
/* @var $this SetorController */
/* @var $model Setor */

$this->breadcrumbs=array(
	'Setors'=>array('index'),
	$model->idSetor,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Setor', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Setor', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Setor', 'url'=>array('update', 'id'=>$model->idSetor)),
	array('label'=>Yii::t('app','Delete').' Setor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSetor),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage').' Setor', 'url'=>array('admin')),
);
?>

<h1>Exibir Setor #<?php echo $model->idSetor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSetor',
		'nome',
		'sigla',
	),
)); ?>
