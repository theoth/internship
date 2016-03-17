<?php
/* @var $this CompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Companies',
);

$this->menu=array(
	array('label'=>'Δημιουργία νέας εταιρείας', 'url'=>array('create')),
	array('label'=>'Αναζήτηση εταιρειών', 'url'=>array('admin')),
    array('label'=>'Αιτήσεις εταιρειών', 'url'=>array('viewRequests')),
);
?>

<h1>Εταιρείες</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
