
<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Τελευταίες Αναρτήσεις</h1>


<?php
$this->widget('booster.widgets.TbListView', array(
    'ajaxUpdate' => false,
    'dataProvider' => $dataProvider,
    'itemView' => '_viewInternshipPosition',
    'template' => "{items}\n{pager}",
));
?>