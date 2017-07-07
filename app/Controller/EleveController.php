<?php

/**
 * Created by PhpStorm.
 * User: Bryan
 * Date: 01/07/2017
 * Time: 19:44
 */
class EleveController extends AppController
{
    public  $helper = array('Html' , 'Form');



    /**
     * @return array
     */
    public function index()
    {
        $this->set('ListeEleves' , $this->Eleve->find('all'));
    }

    /**
     * @return array
     */
    public function modify($id)
    {
        // methode findById ne

       $eleve = $this->Eleve->findByidEleve($id);
      // $this->Eleve->data= $data ;
       // $eleve = $this->Eleve->query('SELECT id_Eleve , nom_Eleve, prenom_Eleve, date_Naiss_Eleve FROM eleve  WHERE id_Eleve='.$id);


       if(!$eleve)
       {
           throw new NotFoundException('eleve non trouve');
       }

        if($this->request->is(  'put'))
        {

            //$this->eleve->create() ;

            $this->Eleve->id = $id ;
            if($this->Eleve->save($this->request->data))
            {
                $this->Session->setFlash('Eleve modifier') ;
                return $this->redirect(array('action' => 'index'));

            }

            $this->Session->setFlash('Echec de la modification') ;

        }

        if(!$this->request->data)
        {
            $this->request->data = $eleve;
        }


        /*


                if(empty($this->data)) {
                    $this->data = $this->Eleve->read(NULL, $id_Eleve);
                }


        */
                }


        //methode de suppresion d'un eleve
    public function supprimer($id)
    {
        //$eleve = $this->Eleve->query('SELECT id_Eleve , nom_Eleve, prenom_Eleve, date_Naiss_Eleve FROM eleve  WHERE id_Eleve='.$id);

       // $this->Eleve->id = $id ;
       // $this->Eleve->delete($id) ;

        if($this->Eleve->delete($id))
        {
            $this->Session->setFlash('Eleve supprimer') ;
            return $this->redirect(array('action' => 'index'));
      }

    }


    // methode d"ajout d'un eleve
    public function add()
    {

        if($this->request->is('post')){

            $this->Eleve->Create();

           if($this->Eleve->save( $this->request->data ))
           {
               $this->Session->setFlash('nouvel éleve ajouter') ;
               return $this->redirect(array('action' => 'index'));
           }

            $this->Session->setFlash('echec de la requete') ;

        }


    }





}

?>