<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFuncionario'); ?>
		<?php echo $form->textField($model,'idFuncionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idFilial'); ?>
		<?php echo $form->dropDownList($model, 'idFilial',
	                                       CHtml::listData(Filial::model()->findAll(), 'idFilial', 'nome'),
	                                       array('prompt'=>''));; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEndereco'); ?>
		<?php echo $form->dropDownList($model, 'idEndereco',
	                                       CHtml::listData(Endereco::model()->findAll(), 'idEndereco', 'idEndereco'),
	                                       array('prompt'=>''));; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idContato'); ?>
		<?php echo $form->dropDownList($model, 'idContato',
	                                       CHtml::listData(Contato::model()->findAll(), 'idContato', 'idContato'),
	                                       array('prompt'=>''));; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCargo'); ?>
		<?php echo $form->dropDownList($model, 'idCargo',
	                                       CHtml::listData(Cargo::model()->findAll(), 'idCargo', 'nome'),
	                                       array('prompt'=>''));; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->