<?php
/* @var $this SetorController */
/* @var $model Setor */

$this->breadcrumbs=array(
	'Setors'=>array('index'),
	$model->idSetor=>array('view','id'=>$model->idSetor),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Setor', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Setor', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Setor', 'url'=>array('view', 'id'=>$model->idSetor)),
	array('label'=>Yii::t('app','Manage').' Setor', 'url'=>array('admin')),
);
?>

<h1>Update Setor <?php echo $model->idSetor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>