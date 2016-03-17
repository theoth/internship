<?php
/* @var $this RequestInternshipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Request Internships',
);

$this->menu=array(
	array('label'=>'Create RequestInternship', 'url'=>array('create')),
	array('label'=>'Manage RequestInternship', 'url'=>array('admin')),
);
?>

<h1>Request Internships</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
