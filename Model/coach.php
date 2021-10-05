	<?php 
class Coach{
		private $cin;
		private $nom;
        private $prenom;
        private $email;
        private $mdp;
		private $tel;
		private $adresse;
		private $sexe;
		private $date_nais;
		private $dernier_acc;
		private $categorie;

		public function __construct($cin,$nom,$prenom,$email,$mdp,$tel,$adresse,$sexe,$date_nais,$categorie){
        $this->cin=$cin;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->mdp=$mdp;
        $this->tel=$tel;
        $this->adresse=$adresse;
        $this->sexe=$sexe;
        $this->date_nais=$date_nais;
        $this->categorie=$categorie;
		}
		public function getCin(){
			return $this->cin;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getPrenom(){
			return $this->prenom;
		}
		public function getEmail(){
			return $this->email;
        }
        public function getMdp(){
			return $this->mdp;
        }
        public function getTel(){
			return $this->tel;
        }
        public function getAdresse(){
			return $this->adresse;
        }
        public function getSexe(){
			return $this->sexe;
        }
        public function getDateNais(){
			return $this->date_nais;
        }
        public function getDernier_acc(){
			return $this->dernier_acc;
        }
        public function getCategorie(){
			return $this->categorie;
        }

		public function setCin($cin){
			$this->cin=$cin;
		}
		public function setNom($nom){
			$this->nom=$nom;
		}
		public function setPrenom($prenom){
			$this->prenom;
        }
        public function setEmail($email){
			$this->email=$email;
        }
        public function setMdp($mdp){
			$this->mdp=$mdp;
        }
  		public function setTel($tel){
			$this->tel=$tel;
        }
        public function setAdresse($adresse){
			$this->adresse=$adresse;
        }
        public function setSexe($sexe){
			$this->sexe=$sexe;
        }
        public function setDateNais($date_nais){
			$this->date_nais=$date_nais;
        }
        public function setDernier_acc($dernier_acc){
			$this->dernier_acc=$dernier_acc;
        }
		public function setCategorie($categorie){
			$this->categorie=$categorie;
        }

}

?>