<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
 class Users implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=45)
     */
    private $nom;

    /**
     * @ORM\Column(type="string",length=45)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string",length=255,unique=true)
     */
    private $mail;


    /**
     * @ORM\Column(type="string",length=4096)
     */
    private $password;


    /**
     * @ORM\Column(type="array")
     */
    private $roles;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserArticle",mappedBy="users")
     */
    private $usersArticle;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return [$this->roles];
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles): void
    {
        $this->roles = $roles;
    }

    public function setId($id): void
    {
        $this->id=$id;
    }

    /**
     * @return mixed
     */
    public function getUsersArticle()
    {
        return $this->usersArticle;
    }

    /**
     * @param mixed $userArticle
     */
    public function setUsersArticle($usersArticle): void
    {
        $this->usersArticle = $usersArticle;
    }


     /**
      * Returns the salt that was originally used to encode the password.
      *
      * This can return null if the password was not encoded using a salt.
      *
      * @return string|null The salt
      */
     public function getSalt()
     {
         return null;
     }

     /**
      * Returns the username used to authenticate the user.
      *
      * @return string The username
      */
     public function getUsername()
     {
         return $this->getMail();
     }

     /**
      * Removes sensitive data from the user.
      *
      * This is important if, at any given point, sensitive information like
      * the plain-text password is stored on this object.
      */
     public function eraseCredentials()
     {
        return null;
     }


 }
