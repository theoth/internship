
<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */



$this->breadcrumbs = array(
    'Internship Positions' => array('index'),
    $model->title,
);
?>

<h1>Βιβλίο Καθηγητή | Προβολή εκτύπωσης </h1>

<h3> Στοιχεία Πρακτικής άσκησης</h3>


<?php
$model_pro=Professor::model()->findByPk($model->professor_id);
$model_stu=Student::model()->findByPk($model->student_id);
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'type' => 'raw',
            'name'=>'Ονοματεπώνυμο Επόπτη Καθηγητή',
            'value'=>$model_pro->getBothnamesurname(),
        ),
        'professor.users.telephone',
        'professor.users.email',
        array(
            'type' => 'raw',
            'name'=>'Ονοματεπώνυμο Φοιτητή/τριας',
            'value'=>$model_stu->getBothnamesurname(),
        ),
        'student.users.aem',
        'company.brand',
        'date_start',
        'date_end',
        'grade',
        array(
            'type' => 'raw',
            'name'=>'Ημερομηνία σύνταξης',
            'value'=>date('Y-m-d'),
        ),
        
    ),
));
?>
<h3> Τελική έκθεση Επόπτη Καθηγητή </h3>
<?php
$department = Department::model()->findByPk($model->department_id);

    $this->widget('booster.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => array(
            'pro_final_text'
        ),
    ));

   
?>
<h3> Ερωτηματολόγιο Αξιολόγησης Φοιτητή/τριας </h3>
<?php

if($model_quest->in1 != NULL){

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
		'st6',
		'st7',
		
	),
)); 
?>
<h3> Ερωτηματολόγιο Αξιολόγησης Πρακτικής Άσκησης </h3>
<?php
$ansLigoPoly=utils::ligoPoly();
$ansNaiOxi=utils::naiOxi();
$texts = $model->AttributeLabels();
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		array('label' => $texts['in1'],'value'=>$ansLigoPoly[$model->in1]),
		array('label' => $texts['in2'],'value'=>$ansLigoPoly[$model->in2]),
		array('label' => $texts['in3'],'value'=>$ansLigoPoly[$model->in3]),
		array('label' => $texts['in4'],'value'=>$ansLigoPoly[$model->in4]),
		array('label'=>  $texts['in5'],'value'=>$ansLigoPoly[$model->in5]),
		array('label' => $texts['in6'],'value'=>$ansLigoPoly[$model->in6]),
		array('label' => $texts['in7'],'value'=>$ansLigoPoly[$model->in7]),
		array('label' => $texts['in8'],'value'=>$ansLigoPoly[$model->in8]),
		array('label' => $texts['in9'],'value'=>$ansLigoPoly[$model->in9]),
		array('label' => $texts['in10'],'value'=>$ansNaiOxi[$model->in10]),
		array('label' => $texts['in11'],'value'=>$ansNaiOxi[$model->in11]),
		'in12',
		'in13',
		'in14',
		'in15',
		'in16',
		'in17',
		
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

    
    
