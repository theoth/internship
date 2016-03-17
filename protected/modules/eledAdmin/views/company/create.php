<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Εταιρείες', 'url'=>array('index')),
	array('label'=>'Διαχείριση εταιρειών', 'url'=>array('admin')),
);
?>

<h1>Δημιουργία νέας εταιρείας</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>