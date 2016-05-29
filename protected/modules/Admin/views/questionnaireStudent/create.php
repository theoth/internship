<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */

$this->breadcrumbs=array(
	'Questionnaire Students'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List QuestionnaireStudent', 'url'=>array('index')),
	array('label'=>'Πίσω', 'url'=>array('internshipPosition/myindex')),
);
?>

<h1>Συμπλήρωση Ερωτηματολογίου</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>