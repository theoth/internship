<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class OrderIRForm extends CFormModel {

    public $order_ids;

    public function loadIds($sid) {

        $ri = RequestInternship::model()->findAllByAttributes(array('student_id' => $sid));

        $this->order_ids = [];
        foreach ($ri as $r) {
            $this->order_ids[$r->id] = $r->internshipPosition->title;
        }
        
        //var_dump($this->order_ids);
    }

    public function save() {
        $c = 0;
        foreach ($this->order_ids as $i) {
            $c++;
            $m = RequestInternship::model()->findByPk($i);
            $m->saveAttributes(array('order' => $c));
            
            //var_dump($m->id);
            //var_dump($m->order);
        }
    }

    public function rules() {
        return array(
            array('order_ids', 'type', 'type' => 'array', 'allowEmpty' => true),
        );
    }

}
