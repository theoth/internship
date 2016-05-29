<?php
/* @var $this InternshipPositionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Internship Positions',
);

$this->menu = array(
    array('label' => 'Δημιουργία νέας θέσης', 'url' => array('create')),
    array('label' => 'Αναζήτηση θέσεων', 'url' => array('admin')),
    array('label' => 'Ιστορικό', 'url' => array('history')),
    array('label' => 'Νέες αιτήσεις θέσεων', 'url' => array('viewNewPositions')),
    array('label' => 'Αναλυτική κατάσταση', 'url' => array('printOutForm')),
    array('label' => 'Στατιστικά', 'url' => array('Statistics')),
);
?>

<h1>Θέσεις πρακτικής άσκησης</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
