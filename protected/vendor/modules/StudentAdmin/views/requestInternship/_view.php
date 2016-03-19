<?php
/* @var $this RequestInternshipController */
/* @var $data RequestInternship */
?>

<div class="view" style="background:#428bca; border:1px solid #000; cursor: pointer;">



    <b><?php echo CHtml::encode($data->getAttributeLabel('internship_position_id')); ?>:</b>
    <?php echo CHtml::encode($data->internship_position_id); ?>
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
      <b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
      <?php echo CHtml::encode($data->order); ?>
      <br /> */ ?>
    <?php echo CHtml::link('εμφάνιση', array('view', 'id' => $data->id)); ?>
    <?php echo CHtml::hiddenField('OrderIRForm[order_ids][]', $data->id); ?>
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