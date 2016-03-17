<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_cv_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_cv_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_grades_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_grades_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_ika')); ?>:</b>
	<?php echo CHtml::encode($data->file_ika); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_name')); ?>:</b>
	<?php echo CHtml::encode($data->father_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_name')); ?>:</b>
	<?php echo CHtml::encode($data->mother_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identity_number')); ?>:</b>
	<?php echo CHtml::encode($data->identity_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afm')); ?>:</b>
	<?php echo CHtml::encode($data->afm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doy')); ?>:</b>
	<?php echo CHtml::encode($data->doy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ama_ika')); ?>:</b>
	<?php echo CHtml::encode($data->ama_ika); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amka')); ?>:</b>
	<?php echo CHtml::encode($data->amka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_in')); ?>:</b>
	<?php echo CHtml::encode($data->year_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_day')); ?>:</b>
	<?php echo CHtml::encode($data->birth_day); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IBAN')); ?>:</b>
	<?php echo CHtml::encode($data->IBAN); ?>
	<br />

	*/ ?>

</div>