<?php
/* @var $this CompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Companies',
);

$this->menu = array(
    array('label' => 'Πίσω', 'url' => array('index')),
);
?>



<h1>Εταιρείες</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_viewRequests',
));
?>


<style>
    .view a:hover { color: #428bca;}
</style>