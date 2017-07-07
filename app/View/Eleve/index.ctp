<h1> liste des éleves </h1>
<br></br>

 <?php
           // lien pour ajouter un eleve

            echo $this->Html->link(
                     'Ajouter un eleve',
                     array(
                         'controller' => 'Eleve',
                         'action' => 'add'
                     )
                 );
             ?>

 <table style="width:100%">
  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Date de naissance</th>
  </tr>

  <?php foreach($ListeEleves as $eleve):?>
  <?php echo var_dump($eleve);?>
  <tr>
    <td> <?php echo $eleve['Eleve']['nom_Eleve']; ?> </td>
    <td> <?php echo $eleve['Eleve']['prenom_Eleve'];?> </td>
    <td><?php echo $eleve['Eleve']['date_Naiss_Eleve'] ; ?> </td>

    <td>
    <?php
    echo $this->Html->link(
             'Modifier',
             array(
                 'controller' => 'Eleve',
                 'action' => 'modify',
                 $eleve['Eleve']['id_Eleve']
             )
         );
     ?>
      </td>

     <td>
        <?php
                echo $this->Form->PostLink(
                         'Supprimer',
                         array(
                             'controller' => 'Eleve',
                             'action' => 'supprimer',
                             $eleve['Eleve']['id_Eleve']
                         ),array(
                         'confirm' => 'supprimer '.$eleve['Eleve']['nom_Eleve']
                         )
                     );
                 ?>


        </td>


    <td>
    <?php
            echo $this->Html->link(
                     ' Notes eleve',
                     array(
                         'controller' => 'EleveNote',
                         'action' => 'index',
                         $eleve['Eleve']['id_Eleve']
                     )
                 );
             ?>


    </td>
  </tr>
  <?php endforeach ;?>
</table>

