<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->idFuncionario=>array('view','id'=>$model->idFuncionario),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Funcionario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Funcionario', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' Funcionario', 'url'=>array('view', 'id'=>$model->idFuncionario)),
	array('label'=>Yii::t('app','Manage').' Funcionario', 'url'=>array('admin')),
);
?>

<h1>Update Funcionario <?php echo $model->idFuncionario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>