modification des information de l'eleves.
<?php echo $this->Form->create('Eleve');
echo $this->Form->input('nom_Eleve', array('label' => 'Entrez votre nom:' ));
    echo $this->Form->input('prenom_Eleve', array('label' => 'Entrez votre prenom:'));
    echo $this->Form->input('date_Naiss_Eleve', array('label' => 'Entrez votre date de naissance'));


    echo $this->Form->end('Modifier');?>