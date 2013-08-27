<?php
/* @var $this EnderecoController */
/* @var $data Endereco */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEndereco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEndereco), array('view', 'id'=>$data->idEndereco)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cep')); ?>:</b>
	<?php echo CHtml::encode($data->cep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logradouro')); ?>:</b>
	<?php echo CHtml::encode($data->logradouro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro')); ?>:</b>
	<?php echo CHtml::encode($data->bairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCidade')); ?>:</b>
	<?php echo CHtml::encode($data->idCidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento')); ?>:</b>
	<?php echo CHtml::encode($data->complemento); ?>
	<br />


</div>