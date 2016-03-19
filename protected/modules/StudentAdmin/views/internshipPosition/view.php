<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>'index.php?r=StudentAdmin/internshipPosition'),
);


?>

<h1>Θέση πρακτικής άσκησης | <?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_start',
		'date_end',
		
		'company.brand',

		'title',
		'description',



	),
)); ?>

<?php

    $student = Student::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
    $is_in = InternshipPosition::model()->findByAttributes(array('student_id' => $student->id));
    
    $hasRequest = RequestInternship::model()->findByAttributes(array('student_id' => $student->id, 'internship_position_id' => $model->id));
    
    
    if ($hasRequest) {
        echo 'έχετε κάνει αίτηση για αυτή την θέση';
    } else {
        if($is_in){
            echo 'Δεν έχετε κάνει αίτηση για αυτή την θέση, αλλά πλέον συμμετέχετε σε θέση πρακτικής άσκησης ';
        }
        else{
       $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Αίτηση', 'context'=>'primary','buttonType'=>'link','url'=>array('RequestInternship/NewRequest', 'iid' => $model->id, 'uid' => Yii::app()->user->id))
);   
            
            //echo CHtml::link('κάντε αίτηση', array('RequestInternship/NewRequest', 'iid' => $model->id, 'uid' => Yii::app()->user->id));
        }
        
        }
    
    
    
   
    ?>
    <br /> 
