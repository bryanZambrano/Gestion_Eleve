bonjour

<h1> liste des éleves </h1>
<br></br>

 <?php
           // lien pour ajouter un eleve

            echo $this->Html->link(
                     'Ajouter une note',
                     array(
                         'controller' => 'EleveNote',
                         'action' => 'add',
                         $id ,
                         $tableauNote
                     )
                 );
             ?>

 <table style="width:100%">
  <tr>
    <th>Matiere</th>
    <th>Note</th>
    <th>Date de naissance</th>
  </tr>

  <?php foreach($ListeNote as $note):?>

  <tr>
    <td> <?php echo $note['EleveNote']['note']; ?> </td>
     <td> <?php echo $note['EleveNote']['note']; ?> </td>

  </tr>
  <?php endforeach ;?>
</table>

