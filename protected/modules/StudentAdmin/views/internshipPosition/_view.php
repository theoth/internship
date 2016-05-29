
<?php



$this->menu=array(
	//array('label'=>'List InternshipPosition', 'url'=>array('index')),
	//array('label'=>'Create InternshipPosition', 'url'=>array('create')),
	//array('label'=>'Update InternshipPosition', 'url'=>array('update', 'id'=>$data->id)),
	//array('label'=>'Delete InternshipPosition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Αναζήτηση Θέσης', 'url'=>array('admin')),
);


?>


<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::encode($data->id); ?>
    <br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($data->title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->company->brand), array('Company/View', 'id' => $data->company_id)); ?>
    <br />



    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('company.city')); ?>:</b>
    <?php echo CHtml::encode($data->company->city); ?>
    <br />

    <?php echo CHtml::link('εμφάνιση', array('view', 'id'=>$data->id)); ?>
    <br />
    <?php
    //var_dump($student);var_dump($data);die();
    $hasRequest = RequestInternship::model()->findByAttributes(array('student_id' => $student->id, 'internship_position_id' => $data->id));
    
    if ($hasRequest) {
        echo 'έχετε κάνει αίτηση για αυτή την θέση';
    }
    
    
   
    ?>
     
    
        
        <?php
     
    /*
     * 
      <b><?php echo CHtml::encode($data->getAttributeLabel('status_submit_student')); ?>:</b>
      <?php echo CHtml::encode($data->status_submit_student); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('status_submit_company')); ?>:</b>
      <?php echo CHtml::encode($data->status_submit_company); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('status_submit_professor')); ?>:</b>
      <?php echo CHtml::encode($data->status_submit_professor); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
      <?php echo CHtml::encode($data->status); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
      <?php echo CHtml::encode($data->title); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
      <?php echo CHtml::encode($data->description); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('published')); ?>:</b>
      <?php echo CHtml::encode($data->published); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
      <?php echo CHtml::encode($data->year); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_absence1')); ?>:</b>
      <?php echo CHtml::encode($data->st_absence1); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_text1')); ?>:</b>
      <?php echo CHtml::encode($data->st_text1); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_notes1')); ?>:</b>
      <?php echo CHtml::encode($data->st_notes1); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_text2')); ?>:</b>
      <?php echo CHtml::encode($data->st_text2); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_notes2')); ?>:</b>
      <?php echo CHtml::encode($data->st_notes2); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_text3')); ?>:</b>
      <?php echo CHtml::encode($data->st_text3); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_notes3')); ?>:</b>
      <?php echo CHtml::encode($data->st_notes3); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_absence2')); ?>:</b>
      <?php echo CHtml::encode($data->st_absence2); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_absence3')); ?>:</b>
      <?php echo CHtml::encode($data->st_absence3); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_final_text')); ?>:</b>
      <?php echo CHtml::encode($data->st_final_text); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('st_final_notes')); ?>:</b>
      <?php echo CHtml::encode($data->st_final_notes); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_absence1')); ?>:</b>
      <?php echo CHtml::encode($data->co_absence1); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_absence2')); ?>:</b>
      <?php echo CHtml::encode($data->co_absence2); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_absence3')); ?>:</b>
      <?php echo CHtml::encode($data->co_absence3); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_text1')); ?>:</b>
      <?php echo CHtml::encode($data->co_text1); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_notes1')); ?>:</b>
      <?php echo CHtml::encode($data->co_notes1); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_text2')); ?>:</b>
      <?php echo CHtml::encode($data->co_text2); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_notes2')); ?>:</b>
      <?php echo CHtml::encode($data->co_notes2); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_text3')); ?>:</b>
      <?php echo CHtml::encode($data->co_text3); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_notes3')); ?>:</b>
      <?php echo CHtml::encode($data->co_notes3); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_final_text')); ?>:</b>
      <?php echo CHtml::encode($data->co_final_text); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('co_final_notes')); ?>:</b>
      <?php echo CHtml::encode($data->co_final_notes); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('prof_final_text')); ?>:</b>
      <?php echo CHtml::encode($data->prof_final_text); ?>
      <br />

     */ ?>

</div>