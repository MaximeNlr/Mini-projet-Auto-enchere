<?php

    class UserData 
    {
        protected string $nom;
        protected string $prenom;
        protected string $email;
        protected string $password;
        protected string $pseudo;
    

    protected function __construct(string $nom, string $prenom, string $email, string $password, string $pseudo)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->pseudo = $pseudo;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function updateNom(string $nom)
    {
        $this->setNom($nom);
    }

    public function updatePrenom(string $prenom)
    {
        $this->setPrenom($prenom);
    }

    public function updateEmail(string $email)
    {
        $this->setEmail($email);
    }

    public function updatePassword(string $password)
    {
        $this->setPassword($password);
    }
    
    public function updatePseudo(string $pseudo)
    {
        $this->setPseudo($pseudo);
    }
}

    
?>