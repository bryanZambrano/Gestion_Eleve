<?php

/**
 * Created by PhpStorm.
 * User: Bryan
 * Date: 01/07/2017
 * Time: 19:40
 */
class Eleve extends AppModel
{
    //Nom de la table  a utiliser
    var $useTable = 'eleve';

    var $primaryKey = 'id_Eleve';
    var $displayField = 'id_Eleve' ;

   public $validate = array(


       'nom_Eleve' => array(
                      'rule' => 'notEmpty'
       ) ,

       'prenom_Eleve' => array(
                      'rule' => 'notEmpty'
       ) ,

       'date_Naiss_Eleve' => array(
                      'rule' => 'notEmpty'
       )

   );



}