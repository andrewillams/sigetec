<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filials'=>array('index'),
	$model->idFilial=>array('view','id'=>$model->idFilial),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Filial', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Filial', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Filial', 'url'=>array('view', 'id'=>$model->idFilial)),
	array('label'=>Yii::t('app','Manage').' Filial', 'url'=>array('admin')),
);
?>

<h1>Update Filial <?php echo $model->idFilial; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco,'contato'=>$contato)); ?>