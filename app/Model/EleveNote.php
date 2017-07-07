<?php

/**
 * Created by PhpStorm.
 * User: Bryan
 * Date: 04/07/2017
 * Time: 14:29
 */
class EleveNote extends AppModel
{
    var $useTable = 'eleve_note';

    var $primaryKey = array('id_eleve','id_matiere');


    var $belongsTo = array
    (
        'Eleve' => array
        (
            'className' => 'Eleve',
            'foreignKey' => 'id_eleve',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Matiere' => array
        (
            'className' => 'Matiere',
            'foreignKey' => 'id_matiere',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}