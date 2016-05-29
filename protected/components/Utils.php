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
    
    public static function seVathmo(){
        return array(
            '1' => 'Σε μεγάλο βαθμό',
            '2' => 'Σε μέτριο βαθμό',
            '3' => 'Σε μικρό βαθμό',
        );
    }
    
    public static function naiOxi() {
        return array(
            '1' => 'Ναι',
            '2' => 'Όχι',
            
        );
    }
    
    public static function polyIkan() {
        return array(
            '1' => 'Πολύ ικανοποιητική',
            '2' => 'Επαρκή',
            '3' => 'Ελλιπή'
        );
    }
    
    public static function ligoPoly() {
        return array(
            '1' => 'Πάρα πολύ',
            '2' => 'Πολύ',
            '3' => 'Αρκετά',
            '4' => 'Λίγο',
            '5' => 'Καθόλου',
            
        );
    }
    
    

}
