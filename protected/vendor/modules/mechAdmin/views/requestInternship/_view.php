<?php
/* @var $this RequestInternshipController */
/* @var $data RequestInternship */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internship_position_id')); ?>:</b>
	<?php echo CHtml::encode($data->internship_position_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_request')); ?>:</b>
	<?php echo CHtml::encode($data->date_request); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title1')); ?>:</b>
	<?php echo CHtml::encode($data->title1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code1')); ?>:</b>
	<?php echo CHtml::encode($data->code1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('title2')); ?>:</b>
	<?php echo CHtml::encode($data->title2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code2')); ?>:</b>
	<?php echo CHtml::encode($data->code2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title3')); ?>:</b>
	<?php echo CHtml::encode($data->title3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code3')); ?>:</b>
	<?php echo CHtml::encode($data->code3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title4')); ?>:</b>
	<?php echo CHtml::encode($data->title4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code4')); ?>:</b>
	<?php echo CHtml::encode($data->code4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title5')); ?>:</b>
	<?php echo CHtml::encode($data->title5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code5')); ?>:</b>
	<?php echo CHtml::encode($data->code5); ?>
	<br />

	*/ ?>

</div>