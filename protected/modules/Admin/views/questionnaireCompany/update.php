<?php
/* @var $this QuestionnaireCompanyController */
/* @var $model QuestionnaireCompany */

$this->breadcrumbs=array(
	'Questionnaire Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$in=InternshipPosition::model()->findByAttributes(array('questionnaire_professor_id'=>$model->id));


$this->menu=array(
	//array('label'=>'List QuestionnaireCompany', 'url'=>array('index')),
	//array('label'=>'Create QuestionnaireCompany', 'url'=>array('create')),
	//array('label'=>'View QuestionnaireCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Πίσω', 'url'=>array('questionnaireCompany/view','id'=>$model->id)),
);
?>

<h1>Συμπλήρωση ερωτηματολογίου</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>