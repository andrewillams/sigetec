<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Funcionario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Funcionario', 'url'=>array('admin')),
);
?>

<h1>Incluir Funcionario</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'endereco'=>$endereco,'contato'=>$contato)); ?>