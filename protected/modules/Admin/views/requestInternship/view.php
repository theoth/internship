<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Request Internships'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Πίσω', 'url'=>array('viewRequests')),
	array('label'=>'Δημιουργία νέας αίτησης', 'url'=>array('create')),
	array('label'=>'Επεξεργασία αίτησης', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Διαγραφή αίτησης', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Διαχείριση αιτήσεων', 'url'=>array('admin')),
);
?>

<h1>Εμφάνιση αίτησης | <?php echo $model->id; ?></h1>

<?php

//$st=$model->student->getBothnamesurname();
//echo($st);
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
        
	'attributes'=>array(
		'id',
		'internship_position_id',
		'student.users.first_name',
                'student.users.last_name',
		'date_request',
		'status',
		'title1',
		'code1',

	),
)); 

echo CHtml::link('εμφάνιση θέσης', array('RequestInternship/viewInternshipPosition2','id'=>$model->code1,'rid'=>$model->id));  
echo '<br/>';
echo CHtml::link('εμφάνιση φοιτητή', array('RequestInternship/viewStudent', 'id'=>$model->student_id,'rid'=>$model->id)); 
echo '<br/>';
echo '<br/>';
//echo CHtml::link('ανάθεση', array('InternshipPosition/award', 'id' => $model->internship_position_id, 'sid' => $model->student_id,'rid' => $model->id));

$this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Ανάθεση', 'context'=>'primary','buttonType'=>'link','url'=>array('InternshipPosition/award', 'id' => $model->internship_position_id, 'sid' => $model->student_id,'rid' => $model->id))
);   

?>
