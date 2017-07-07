<?php

/**
 * Created by PhpStorm.
 * User: Bryan
 * Date: 04/07/2017
 * Time: 14:08
 */
class EleveNoteController extends AppController
{
    public  $helper = array('Html' , 'Form');

    public function index($id=null )
    {



        $this->set('ListeNote' , $this->EleveNote->findByidEleve($id));
        $this->set('id' , $id);


    }

    public function add($id)
    {


        if($this->request->is('post')){

            $this->EleveNote->Create();

           if(!$id)
           {
               $this->EleveNote->id = $id ;
           }
            if($this->EleveNote->save($this->request->data()))
            {
                $this->Session->setFlash('nouvel note ajouter') ;
                return $this->redirect(array('action' => 'index'));
            }

            $this->Session->setFlash('echec de la requete') ;

        }



    }
}