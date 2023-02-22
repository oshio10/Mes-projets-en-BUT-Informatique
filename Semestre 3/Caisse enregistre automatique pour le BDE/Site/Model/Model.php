<?php
class Model
{
     /**
     * Attribut contenant l'instance PDO
     */
    private $bd;

    /**
     * Attribut statique qui contiendra l'unique instance de Model
     */
    private static $instance = null;
    
    private function __construct()
    {
        $this->bd= new PDO('mysql:host=localhost;dbname=id20208635_sitebde','id20208635_marie','dHr@Xo1kQOCs5_2i');
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }
    /**
     * Méthode permettant de récupérer un modèle car le constructeur est privé (Implémentation du Design Pattern Singleton)
     */
    public static function getModel()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function addToPanier($id)
    {
        $products = $this->bd->query("SELECT * FROM stock WHERE id = $id");
        //ajouter le produit dans le panier ( Le tableau)

        if (isset($_SESSION['panier'][$id])) { // si le produit est déjà dans le panier
            $_SESSION['panier'][$id]++; //Représente la quantité 
        } else {
            //si non on ajoute le produit
            $_SESSION['panier'][$id] = 1;
        }
        return $_SESSION['panier'];
    }
    public function getProduct($ids){

        $statement = $this->bd->query("SELECT * FROM stock WHERE id IN (".implode(',', $ids).")");
        $product = [];
        while (($row = $statement->fetch())) {
            $product = [
                'img' => $row['img'],
                'nomProduitFR' => $row['nomProduitFR'],
                'prix' => $row['prix'],
                'id' => $row['id'],
            ];
            $products[] = $product;
        }
        return $products;
    }
    public function getArticle(){
    $statement = $this->bd->query('SELECT * FROM stock');
    $articles = [];
    while (($row = $statement->fetch())) {
        $article = [
            'img' => $row['img'],
            'nomProduitFR' => $row['nomProduitFR'],
            'prix' => $row['prix'],
            'id' => $row['id'],
            'quantite' => $row['quantite'],
        ];
        $articles[] = $article;
    }
	return $articles;
    }
    public function affiche_tresorie(){
        $req = $this->bd->prepare("SELECT * FROM tresorerie");
        $req->execute();
        $tresorie = $req->fetchAll();
        return $tresorie ;
      }

    public function addproduct(){
        $req = $this->bd->prepare("INSERT INTO stock( nomProduitFR, nomProduitEN, prix, quantite, categorie, img)  VALUES (?,?,?,?,?,?)");
        $tabarticles = $req->execute(
        [
          $_POST["nomProduitFR"],
          $_POST['nomProduitEN'],
          $_POST['prix'],
          $_POST['quantite'],
          $_POST['categorie'],
          $_POST['image']
        ]
        );
        return $tabarticles;
    }

    public function addImage(){
        $req_1 = $this->bd->prepare("SELECT max(id) as max FROM Stock ;");
        $req_1->execute();
        $data = $req_1->fetch();
        $file_name = $data["max"];
        return $file_name;
    }

    public function updateImage($new_target_file, $file_name){
        $req = $this->bd->prepare("UPDATE Stock set img = ? WHERE id = ?");
        $updateimg = $req->execute([$new_target_file, $file_name]);
        return $updateimg;

    }
    public function updateQuantite($quantite, $id){
        $req = $this->bd->prepare("UPDATE stock set quantite = $quantite WHERE id = $id");
        $updateQuantite = $req->execute();
        return $updateQuantite; 
    }

    function deletarticle($id){
        $req = $this->bd->prepare("DELETE FROM stock WHERE id = $id");
        $deletarticle = $req->execute();
        return $deletarticle; 
    }
    
    public function verifConnexion($num_etudconnect, $mdpconnect){
        $requser = $this->bd->prepare("SELECT * FROM comptes WHERE num_etud = ? AND motdepasse = ?");
        $requser->execute(array($num_etudconnect, $mdpconnect));
        return $requser;
        }
    public function session($getid){
        $requser = $this->bd->prepare('SELECT * FROM comptes WHERE id = ?');
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();
        return $userinfo;
    }
    public function validerMail(){
        $mail = htmlspecialchars($_POST['mail']);
        $reqmail = $this->bd->prepare("SELECT * FROM comptes WHERE mail = ?");
        return $reqmail;
    }
    public function validateMdp($num_etud, $mail, $mdp, $role){
        $insertmbr = $this->bd->prepare("INSERT INTO comptes(num_etud, mail, motdepasse, role) VALUES(?, ?, ?, ?)");
        $insertmbr->execute(array($num_etud, $mail, $mdp, $role));
        return $insertmbr;
    }
    public function historiqueClient($numetud)
    {
        $statement = $this->bd->query("SELECT * FROM achats WHERE num_etud = '$numetud'");
        $produits = [];
        while (($row = $statement->fetch())) {
            $produit = [
                'num_etud' => $row['num_etud'],
                'nomProduitFR' => $row['nomProduitFR'],
                'nomProduitEN' => $row['nomProduitEN'],
                'date' => $row['date'],
                'quantite' => $row['quantite'],
            ];
            $produits[] = $produit;
        }
        return $produits;
    }
    
    public function client(){
        $statement = $this->bd->prepare("SELECT * FROM achats ");
        $articles = [];
        while (($row = $statement->fetch())) {
           $article = [
             'num_etud' => $row['num_etud'],
             'nomProduitFR' => $row['nomProduitFR'],
             'nomProduitEN' => $row['nomProduitEN'],
             'date_achat' => $row['date_achat'],
             'quantite' => $row['quantite'],
        ];
        $articles[] = $article;
    }
	return $articles;
    }
    public function addSortie(){
        $req = $this->bd->prepare("INSERT INTO tresorerie(entrees, sortie) VALUES (?, ?)");
        $_POST['entrees'] = 0;
        $addsortie = $req->execute(
            [
              $_POST["entrees"],
              $_POST['sortie']
            ]
            );
        return $addsortie;
    }

    public function addachats(){
        $req = $this->bd->prepare("INSERT INTO achats(num_etud, nomProduitFR, nomProduitEN, date, quantite) VALUES (?, ?, ?, ?, ?)");
        $_GET['date'] = date("Y-m-d");
        $_GET['nomProduitEN'] = $_GET['nomProduitFR'];
        $_GET['quantite'] = 1;
        $achats = $req->execute(
            [
              $_POST['num_etud'], 
              $_GET['nomProduitFR'],
              $_GET['nomProduitEN'], 
              $_GET['date'],
              $_GET['quantite']
            ]
            );
        return $achats;
    }
}
