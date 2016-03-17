<?php

class Utils {

    public static function departmentsList() {
        return array(
            'icte' => 'Μηχανικών Πληροφορικής & Τηλεπικοινωνιών',
            'mech' => 'Μηχανολόγων Μηχανικών',
            'enveng' => 'Μηχανικών Περιβάλλοντος',
            'eled' => 'Παιδαγωγικό Δημοτικής Εκπαίδευσης',
            'nured' => 'Παιδαγωγικό Νηπιαγωγών',
            'eetf' => 'Εικαστικών και εφαρμοσμένων τεχνών',
            'enveng' => 'Μηχανικών Περιβάλλοντος',
        );
    }
    
   
    
    

    public static function userTypeList() {
        return array(0 => 'student', 1 => 'professor', 2 => 'company');
    }

}
