<?php
/* @var $this EnderecoController */
/* @var $model Endereco */

$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	$model->idEndereco=>array('view','id'=>$model->idEndereco),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Endereco', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Endereco', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Endereco', 'url'=>array('view', 'id'=>$model->idEndereco)),
	array('label'=>Yii::t('app','Manage').' Endereco', 'url'=>array('admin')),
);
?>

<h1>Update Endereco <?php echo $model->idEndereco; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>