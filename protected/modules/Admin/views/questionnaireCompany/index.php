<?php
/* @var $this QuestionnaireCompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Questionnaire Companies',
);

$this->menu=array(
	array('label'=>'Create QuestionnaireCompany', 'url'=>array('create')),
	array('label'=>'Manage QuestionnaireCompany', 'url'=>array('admin')),
);
?>

<h1>Questionnaire Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
