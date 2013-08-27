<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->idFuncionario,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Funcionario', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Funcionario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Funcionario', 'url'=>array('update', 'id'=>$model->idFuncionario)),
	array('label'=>Yii::t('app','Delete').' Funcionario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFuncionario),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage').' Funcionario', 'url'=>array('admin')),
);
?>

<h1>Exibir Funcionario #<?php echo $model->idFuncionario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFuncionario',
		'idFilial',
		'nome',
		'cpf',
		'matricula',
		'idEndereco',
		'idContato',
		'idCargo',
	),
)); ?>
