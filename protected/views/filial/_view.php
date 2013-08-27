<?php
/* @var $this FilialController */
/* @var $data Filial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nome), array('view', 'id'=>$data->idFilial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->cnpj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEndereco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode('Visualizar'), array('endereco/view', 'id'=>$data->idEndereco)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inscEstadual')); ?>:</b>
	<?php echo CHtml::encode($data->inscEstadual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idContato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode('Visualizar'), array('contato/view', 'id'=>$data->idContato)); ?>
	<br />


</div>