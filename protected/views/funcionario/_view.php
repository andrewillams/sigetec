<?php
/* @var $this FuncionarioController */
/* @var $data Funcionario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFuncionario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFuncionario), array('view', 'id'=>$data->idFuncionario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFilial')); ?>:</b>
	<?php echo CHtml::encode($data->idFilial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matricula')); ?>:</b>
	<?php echo CHtml::encode($data->matricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEndereco')); ?>:</b>
	<?php echo CHtml::encode($data->idEndereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idContato')); ?>:</b>
	<?php echo CHtml::encode($data->idContato); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idCargo')); ?>:</b>
	<?php echo CHtml::encode($data->idCargo); ?>
	<br />

	*/ ?>

</div>