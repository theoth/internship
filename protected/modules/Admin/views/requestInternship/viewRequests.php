<?php
/* @var $this RequestInternshipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Request Internships',
);

$this->menu = array(
    array('label' => 'Δημιουργία νέας αίτησης', 'url' => array('create')),
    array('label' => 'Αναζήτηση αιτήσεων', 'url' => array('admin')),
);
//var_dump($d);die();
?>

<h1>Αιτήσεις φοιτητών</h1>

Οι φοιτητές εμφανίζονται με βάση τον βαθμό αξιολόγησης για την πρακτική άσκηση.

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $d,
    'template' => '{items}',
    'itemView' => '_viewRequests',
));
?>
