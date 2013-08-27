<?php
/* @var $this EnderecoController */
/* @var $model Endereco */

$this->breadcrumbs=array(
	'Enderecos'=>array('index'),
	$model->idEndereco,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Endereco', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Endereco', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Endereco', 'url'=>array('update', 'id'=>$model->idEndereco)),
	array('label'=>Yii::t('app','Delete').' Endereco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEndereco),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage').' Endereco', 'url'=>array('admin')),
);
?>

<h1>Exibir Endereço #<?php echo $model->idEndereco; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cep',
		'logradouro',
		'numero',
		'bairro',
		'idCidade',
		'complemento',
	),
)); ?>
