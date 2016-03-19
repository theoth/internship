<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Πίσω στις εταιρείες', 'url'=>array('index')),
	array('label'=>'Αναζήτηση εταιρειών', 'url'=>array('admin')),
);
?>

<h1>Δημιουργία νέας εταιρείας</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>