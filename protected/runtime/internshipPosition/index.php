<?php
/* @var $this InternshipPositionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Internship Positions',
);

$this->menu=array(
	array('label'=>'Create InternshipPosition', 'url'=>array('create')),
	array('label'=>'Manage InternshipPosition', 'url'=>array('admin')),
);
?>

<h1>Internship Positions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
