<?php
/* @var $this RequestInternshipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Οι αιτήσεις μου',
);

$this->menu = array(
        //array('label'=>'Create RequestInternship', 'url'=>array('create')),
        //array('label'=>'Manage RequestInternship', 'url'=>array('admin')),
);
?>

<h1>Οι αιτήσεις μου</h1>

<p>Εμφάνιση με σειρα προτεραιότητας (αλλαγή με drag &amp; drop)</p>

<?php
$dt = $dataProvider->data;
$items = array();
foreach ($dt as $i) :
    $items[] = $this->renderPartial('_view', array('data' => $i), true);
endforeach;

$form = $this->beginWidget('CActiveForm', array(
    'id' => 'order-ids',
        ));


$this->widget('zii.widgets.jui.CJuiSortable', array(
'id' => 'orderList',
 'items' => $items,
));
/*
  $this->widget('zii.widgets.CListView', array(
  'dataProvider' => $dataProvider,
  'itemView' => '_view',
  ));
 */


 $this->widget(
        'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' =>'Ενημέρωση','context'=>'primary')
);   



$this->endWidget();
?>


<?php
/*
  var_dump($orderIRForm->attributes);
  $form = $this->beginWidget('CActiveForm', array(
  'id' => 'order-ids',
  ));
  echo $form->listBox($orderIRForm, 'order_ids', $orderIRForm->order_ids, array('multiple' => 'multiple', 'size' => '10',));
  $this->endWidget();
 */
?>
 