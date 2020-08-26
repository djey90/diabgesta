<?php

namespace Modeles;

class ContactForm extends Database
{
    //déclaration de mes variables
    private $nom;
    private $mail;
    private $objet;
    private $msg;

    //GETTER/SETTER
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function setObjet($objet)
    {
        $this->objet = $objet;
    }
    public function getObjet()
    {
        return $this->objet;
    }
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
    public function getMsg()
    {
        return $this->msg;
    }
}
