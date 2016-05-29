
<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */



$this->breadcrumbs = array(
    'Internship Positions' => array('index'),
    $model->title,
);
?>

<h1>Βιβλίο Φοιτητή | Προβολή εκτύπωσης </h1>

<h3> Στοιχεία Ασκούμενου/ης Φοιτητή/τριας</h3>


<?php
$model_pro=Professor::model()->findByPk($model->professor_id);
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'student.users.first_name',
        'student.users.last_name',
        'student.father_name',
        'student.users.aem',
        'student.users.telephone',
        'date_start',
        'date_end',
        'company.brand',
        array(
            'type' => 'raw',
            'name'=>'Ονοματεπώνυμο Επόπτη Καθηγητή',
            'value'=>$model_pro->getBothnamesurname(),
        ),
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
            'st_text1',
            'st_notes1',
            'st_absence1',
            'st_absence2',
            'st_text2',
            'st_notes2',
            'st_absence2',
            'st_final_text',
            'st_final_notes',
        ),
    ));
} else {
    $this->widget('booster.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => array(
            'st_text1',
            'st_notes1',
            'st_absence1',
            'st_text2',
            'st_notes2',
            'st_absence2',
            'st_text3',
            'st_notes3',
            'st_absence3',
            'st_final_text',
            'st_final_notes',
        ),
    ));
}
?>
<h3> Ερωτηματολόγιο </h3>
<?php

if($model_quest->in1 != NULL){

$ansLigoPoly=utils::ligoPoly();
$ansNaiOxi=utils::naiOxi();
$texts = $model_quest->AttributeLabels();
$this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model_quest,
	'attributes'=>array(
		
		array('label' => $texts['in1'],'value'=>$ansLigoPoly[$model_quest->in1]),
		array('label' => $texts['in2'],'value'=>$ansLigoPoly[$model_quest->in2]),
		array('label' => $texts['in3'],'value'=>$ansLigoPoly[$model_quest->in3]),
		array('label' => $texts['in4'],'value'=>$ansLigoPoly[$model_quest->in4]),
		array('label'=>$texts['in5'],'value'=>$ansLigoPoly[$model_quest->in5]),
		array('label' => $texts['in6'],'value'=>$ansLigoPoly[$model_quest->in6]),
		array('label' => $texts['in7'],'value'=>$ansLigoPoly[$model_quest->in7]),
		array('label' => $texts['in8'],'value'=>$ansLigoPoly[$model_quest->in8]),
		array('label' => $texts['in9'],'value'=>$ansLigoPoly[$model_quest->in9]),
		array('label' => $texts['in10'],'value'=>$ansLigoPoly[$model_quest->in10]),
		array('label' => $texts['in11'],'value'=>$ansLigoPoly[$model_quest->in11]),
		array('label' => $texts['in1'],'value'=>$ansLigoPoly[$model_quest->in12]),
		array('label' => $texts['in2'],'value'=>$ansLigoPoly[$model_quest->in13]),
		array('label' => $texts['in3'],'value'=>$ansLigoPoly[$model_quest->in14]),
		array('label' => $texts['in4'],'value'=>$ansLigoPoly[$model_quest->in15]),
		array('label'=>$texts['in5'],'value'=>$ansLigoPoly[$model_quest->in16]),
		array('label' => $texts['in7'],'value'=>$ansLigoPoly[$model_quest->in17]),
		array('label' => $texts['in8'],'value'=>$ansLigoPoly[$model_quest->in18]),
		array('label' => $texts['in9'],'value'=>$ansLigoPoly[$model_quest->in19]),
		array('label' => $texts['in10'],'value'=>$ansNaiOxi[$model_quest->in20]),
		'in21',
		'in22',
		'in23',
		'comments',
	),
)); 
}
else {
    echo'Το ερωτηματολόγιο δεν συμπληρώθηκε από τον φοιτητή.';
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

    
    
