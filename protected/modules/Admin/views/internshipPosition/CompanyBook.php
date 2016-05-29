
<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */



$this->breadcrumbs = array(
    'Internship Positions' => array('index'),
    $model->title,
);
?>

<h1>Βιβλίο Φορέα Απασχόλησης | Προβολή εκτύπωσης </h1>

<h3> Στοιχεία Πρακτικής Άσκησης</h3>


<?php
$model_pro=Professor::model()->findByPk($model->professor_id);
$model_stu=Student::model()->findByPk($model->student_id);
$model_co=Company::model()->findByPk($model->company_id);
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'company.brand',
        array(
            'type' => 'raw',
            'name'=>'Υπεύθυνο Στέλεχος',
            'value'=>$model_co->getBothnamesurname(),
        ),
        'company.users.telephone',
        'company.users.email',
        array(
            'type' => 'raw',
            'name'=>'Ονοματεπώνυμο Φοιτητή/τριας',
            'value'=>$model_stu->getBothnamesurname(),
        ),
        array(
            'type' => 'raw',
            'name'=>'Επιβλέπων μέλος ΔΕΠ',
            'value'=>$model_pro->getBothnamesurname(),
        ),
        'date_start',
        'date_end',
        'grade',
        
        
    ),
));
?>
<h3> Εκθέσεις Φοιτητή/τριας </h3>
<?php
$department = Department::model()->findByPk($model->department_id);
if ($department->period <= 2) {
    $this->widget('booster.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => array(
            'co_text1',
            'co_notes1',
            'co_absence1',
            'co_absence2',
            'co_text2',
            'co_notes2',
            'co_absence2',
            'co_final_text',
            'co_final_notes',
        ),
    ));
} else {
    $this->widget('booster.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => array(
            'co_text1',
            'co_notes1',
            'co_absence1',
            'co_text2',
            'co_notes2',
            'co_absence2',
            'co_text3',
            'co_notes3',
            'co_absence3',
            'co_final_text',
            'co_final_notes',
        ),
    ));
}
?>
<h3> Ερωτηματολόγιο Αξιολόγησης Φοιτητή/τριας </h3>
<?php

if($model_quest->st1 != NULL){

$ansLigoPoly=utils::ligoPoly();
$ansNaiOxi=utils::naiOxi();
$texts = $model->AttributeLabels();
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('label' => $texts['st1'],'value'=>$ansLigoPoly[$model->st1]),
		array('label' => $texts['st2'],'value'=>$ansLigoPoly[$model->st2]),
		array('label' => $texts['st3'],'value'=>$ansLigoPoly[$model->st3]),
		array('label' => $texts['st4'],'value'=>$ansLigoPoly[$model->st4]),
		array('label' => $texts['st5'],'value'=>$ansLigoPoly[$model->st5]),
		array('label' => $texts['st6'],'value'=>$ansLigoPoly[$model->st6]),
		array('label' => $texts['st7'],'value'=>$ansLigoPoly[$model->st7]),
		array('label' => $texts['st8'],'value'=>$ansLigoPoly[$model->st8]),
		array('label' => $texts['st9'],'value'=>$ansLigoPoly[$model->st9]),
		array('label' => $texts['st10'],'value'=>$ansNaiOxi[$model->st10]),
		
	),
)); 
?>
<h3> Ερωτηματολόγιο Αξιολόγησης Πρακτικής Άσκησης </h3>
<?php

$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		array('label' => $texts['in1'],'value'=>$ansLigoPoly[$model->in1]),
		array('label' => $texts['in2'],'value'=>$ansLigoPoly[$model->in2]),
		array('label' => $texts['in3'],'value'=>$ansLigoPoly[$model->in3]),
		array('label' => $texts['in4'],'value'=>$ansLigoPoly[$model->in4]),
		array('label'=>$texts['in5'],'value'=>$ansLigoPoly[$model->in5]),
		array('label' => $texts['in6'],'value'=>$ansNaiOxi[$model->in6]),
		array('label' => $texts['in7'],'value'=>$ansNaiOxi[$model->in7]),
		array('label' => $texts['in8'],'value'=>$ansNaiOxi[$model->in8]),
		
	),
)); 

?>
<h3> Γενικές Παρατηρήσεις - Σχόλια </h3>
<?php


$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'comments',
	),
)); 
}
else {
    echo'Το ερωτηματολόγιο δεν συμπληρώθηκε από τον καθηγητή.';
}
?>
<h3> Γενικές Παρατηρήσεις - Σχόλια </h3>
<?php
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model_quest,
	'attributes'=>array(
		'comments',
	),
)); 


echo '<br/>';
?>
<?php
