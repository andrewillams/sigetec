<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idFilial'); ?>
		<?php echo $form->dropDownList($model, 'idFilial',
	                                       CHtml::listData(Filial::model()->findAll(), 'idFilial', 'nome'),
	                                       array('prompt'=>''));; ?>
		<?php echo $form->error($model,'idFilial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCargo'); ?>
		<?php echo $form->dropDownList($model, 'idCargo',
	                                       CHtml::listData(Cargo::model()->findAll(), 'idCargo', 'nome'),
	                                       array('prompt'=>''));; ?>
		<?php echo $form->error($model,'idCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'matricula'); ?>
	</div>

	<h2>Endereço</h2>

	<div class="row">
		<?php echo $form->labelEx($endereco,'cep'); ?>
		<?php echo $form->textField($endereco,'cep',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($endereco,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'logradouro'); ?>
		<?php echo $form->textField($endereco,'logradouro',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($endereco,'logradouro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'numero'); ?>
		<?php echo $form->textField($endereco,'numero',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($endereco,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'bairro'); ?>
		<?php echo $form->textField($endereco,'bairro',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($endereco,'bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'idCidade'); ?>
		<?php echo $form->dropDownList($endereco, 'idCidade',
	                                       CHtml::listData(Cidade::model()->findAll(), 'idCidade', 'nome'),
	                                       array('prompt'=>''));; ?>
		<?php echo $form->error($endereco,'idCidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($endereco,'complemento'); ?>
		<?php echo $form->textArea($endereco,'complemento',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($endereco,'complemento'); ?>
	</div>

	<h2>Contato</h2>

    <div class="row">
        <?php echo $form->labelEx($contato,'fixo'); ?>
        <?php echo $form->textField($contato,'fixo',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($contato,'fixo'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($contato,'celular'); ?>
        <?php echo $form->textField($contato,'celular',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($contato,'celular'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($contato,'skype'); ?>
        <?php echo $form->textField($contato,'skype',array('size'=>60,'maxlength'=>80)); ?>
        <?php echo $form->error($contato,'skype'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($contato,'facebook'); ?>
        <?php echo $form->textField($contato,'facebook',array('size'=>60,'maxlength'=>80)); ?>
        <?php echo $form->error($contato,'facebook'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($contato,'twitter'); ?>
        <?php echo $form->textField($contato,'twitter',array('size'=>60,'maxlength'=>80)); ?>
        <?php echo $form->error($contato,'twitter'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->