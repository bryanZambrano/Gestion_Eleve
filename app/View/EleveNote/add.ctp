page dajout

Formulaire d'ajout note.

<?php

    $tableauNote = array() ;

           for($i=0; $i<=20; $i++ )
           {
             $tableauNote[] = $i ;
           }

    echo $this->Form->create('EleveNote');
    echo $this->Form->input('note', array('label' => 'Entrez la note:'));



    echo $this->Form->input('note', array(
          'options' => $tableauNote,
          'empty' => '(choisissez)'
      ));

      echo $this->Form->end('Ajouter');

?>