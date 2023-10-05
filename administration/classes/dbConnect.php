<?php

include 'Database.php';

class DbConnect extends Database{
    private $dbConnect;    


    public function __construct()
    {
        
        $this->dbConnect = Database::dbConnect();
    }



    public function insertPartenaire ($nomCollab,$logoCollab){        
        $sqlinsertPartenaire = "INSERT INTO collab(nom_collab, logo_collab, id_style)
                                VALUES (:nom_collab, :logo_collab, :id_style)";

        $stmtinsertPartenaire =$this->dbConnect->prepare($sqlinsertPartenaire);
        $stmtinsertPartenaire->bindValue(':nom_collab', $nomCollab);
        $stmtinsertPartenaire->bindValue(':logo_collab', $logoCollab);
        $stmtinsertPartenaire->bindValue(':id_style', "1");

        $stmtinsertPartenaire->execute();
        
        return 'Le partenaire a bien été ajouté';
    } 

    public function insertEntreprise ($nomCollab,$logoCollab){        
        $sqlinsertEntreprise = "INSERT INTO collab(nom_collab, logo_collab, id_style)
                                VALUES (:nom_collab, :logo_collab, :id_style)";

        $stmtinsertEntreprise =$this->dbConnect->prepare($sqlinsertEntreprise);
        $stmtinsertEntreprise->bindValue(':nom_collab', $nomCollab);
        $stmtinsertEntreprise->bindValue(':logo_collab', $logoCollab);
        $stmtinsertEntreprise->bindValue(':id_style', "2");
        $stmtinsertEntreprise->execute();
        
        return 'L\'entreprise a été bien ajoutée';
    } 

    public function creationCompte($emailAdmin, $mdp_admin) {
        $insertUserQuery = "INSERT INTO `admin` (email_admin, mdp_admin, `role`) 
                            VALUES (:email_admin, :mdp_admin, :role)";
        $insertUserStmt = $this->dbConnect->prepare($insertUserQuery);
        $insertUserStmt->bindValue(':email_admin', $emailAdmin);
        $insertUserStmt->bindValue(':mdp_admin', $mdp_admin);
        $insertUserStmt->bindValue(':role', "0");
        $insertUserStmt->bindValue('mdp_admin', password_hash($mdp_admin, PASSWORD_DEFAULT)); 
        $insertUserStmt->execute();
        echo "Le compte a été créé avec succès!";
    }

    
    public function Connexion($emailAdmin) {
        $checkUserQuery = "SELECT * FROM admin WHERE email_admin = :email_admin";
        $checkUserStmt = $this->dbConnect->prepare($checkUserQuery);
        $checkUserStmt->bindValue(':email_admin', $emailAdmin);
        $checkUserStmt->execute();
        $user = $checkUserStmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }  

    public function setAdmin($user) {
        $_SESSION['id_admin'] = $user['id_admin'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['email_admin'] = $user['email_admin'];
    }
    
    public function deconnexion() {
        session_destroy();
        header("Location:index.php");
    }

    public function modifCompte ($idAdmin, $newEmail, $newPassword) {
        $updateUserQuery = "UPDATE admin
                            SET email_admin = :new_email,  
                                mdp_admin = :new_password
                            WHERE id_admin = :admin_id";
        $updateUserStmt = $this->dbConnect->prepare($updateUserQuery);
        $updateUserStmt->bindValue(':new_email',$newEmail);
        $updateUserStmt->bindValue(':new_password',password_hash($newPassword, PASSWORD_DEFAULT));
        $updateUserStmt->bindValue(':admin_id',$idAdmin);
        $updateUserStmt->execute();
        return 'les modifications ont bien été prises en compte!';
    }

    public function readFournisseurs(){
        $checkCompteQuery = "SELECT * FROM collab WHERE id_style=1";
        $checkCompteStmt = $this->dbConnect->prepare($checkCompteQuery);
        $checkCompteStmt ->execute();
        return $checkCompteStmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function suppFournisseurs($idFournisseur){
            $sql = "DELETE FROM collab WHERE id_style=1 AND id_collab=:id_collab";
            $stmt = $this->dbConnect->prepare($sql);
            $stmt->bindValue(":id_collab", $idFournisseur, PDO::PARAM_INT);
            $stmt->execute();
            header("refresh:30");
            return 'Le fournisseur a bien été supprimé!';
        }    
        public function vu($idCollab){  
            $sql = "UPDATE collab 
                    SET visibilite_collab = NOT visibilite_collab
                    WHERE id_collab=:id_collab";
            $stmt = $this->dbConnect->prepare($sql);
            $stmt->bindValue(':id_collab', $idCollab, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            header("refresh:1");
        
            }


// gestion section realisation slide






    public function readAllSlide()
    {
        $sql="SELECT * FROM `chantier`;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readAllSlideWhereAnd($idtravaux)
    {
        $sql="SELECT * FROM `chantier` WHERE `id_travaux`=$idtravaux AND `position_chantier`!=0 ORDER BY `position_chantier` ASC;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readAllSlideWhereAnd2($idtravaux)
    {
        $sql="SELECT * FROM `chantier` WHERE `id_travaux`=$idtravaux AND `position_chantier`=0 ORDER BY `position_chantier` ASC;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readAllSlideWhere($idtravaux)
    {
        $sql="SELECT * FROM `chantier` WHERE `id_travaux`=$idtravaux;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteCard($idCardDelete){
        $sqlDeleteCard="DELETE FROM `chantier` WHERE `id_chantier`=$idCardDelete;";
        $stmtDeleteCard= $this->dbConnect->prepare($sqlDeleteCard);
        $stmtDeleteCard->execute();
        }

    public function readAllSlideUpdate($idCardUpdate){

        $sql="SELECT * FROM `chantier` WHERE `id_chantier`=$idCardUpdate;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function uploadimgUpdate($imgPath, $idCardUpdate){
        $sql="UPDATE `chantier`
            SET `photo_av_chantier`='$imgPath' WHERE `id_chantier`=$idCardUpdate;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
    }

    public function uploadimgUpdate2($imgPath, $idCardUpdate){
        $sql="UPDATE `chantier`
            SET `photo_ap_chantier`='$imgPath' WHERE `id_chantier`=$idCardUpdate;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
    }

    public function update2($newTitle, $newDescription, $idCardUpdate){
        $sql="UPDATE `chantier`
        SET `nom_chantier` = :newTitle, `description_chantier` = :newDescription WHERE `id_chantier` = :idCardUpdate;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->bindParam(":newTitle", $newTitle, PDO::PARAM_STR);
        $stmt->bindParam(":newDescription", $newDescription, PDO::PARAM_STR);
        $stmt->bindParam(":idCardUpdate", $idCardUpdate, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function insertUpdateParDefaut($positionParDefaut,$idtravaux){
        $sql="INSERT INTO `chantier`(`nom_chantier`, `description_chantier`, `position_chantier`, `id_travaux`) VALUES ('Chantier$positionParDefaut','Description par défaut','$positionParDefaut','$idtravaux');";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
    }

    public function readAllSlideWherePosition($idtravaux, $position)
    {
        $sql="SELECT * FROM `chantier` WHERE `id_travaux`=$idtravaux AND `position_chantier`=$position;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectPosition($idChantierToReplace)
    {
        $sql="SELECT `position_chantier` FROM `chantier` WHERE `id_chantier`=$idChantierToReplace;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updatePosition($positionChantier, $idChantier){
        $sql="UPDATE `chantier`
        SET `position_chantier`='$positionChantier' WHERE `id_chantier`=$idChantier;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
    }

    public function deleteParDefaut($idtravaux){
        $sql="DELETE FROM `chantier` WHERE `description_chantier`='Description par défaut' AND `position_chantier`=0 AND `id_travaux`=$idtravaux;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        
    }

    public function countParDefaut($idtravaux){
        $sql="SELECT COUNT(*) FROM  `chantier` WHERE `description_chantier`='Description par défaut' AND `position_chantier`=0 AND `id_travaux`=$idtravaux;";
        $stmt= $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }


            // ************************ AJOUT D'UN CHANTIER ************************//
    // INSERT INTO `chantier`(`nom_chantier`, `photo_av_chantier`, `photo_ap_chantier`, `description_chantier`, `position_chantier`, `id_travaux`)
    public function ajouterChantier($nomChantier, $imageAvChantier, $imageApChantier, $descriptionChantier, $travauxId) {
        $sqlChantier = "INSERT INTO chantier(nom_chantier, photo_av_chantier, photo_ap_chantier, description_chantier, position_chantier, id_travaux) 
                    VALUES (:nomChantier, :imageAvChantier, :imageApChantier, :descriptionChantier, :position_chantier, :travauxId )";
        $stmtChantier = $this->dbConnect->prepare($sqlChantier);
        $stmtChantier->bindValue(':nomChantier', $nomChantier);
        $stmtChantier->bindValue(':imageAvChantier', $imageAvChantier);
        $stmtChantier->bindValue(':imageApChantier', $imageApChantier);        
        $stmtChantier->bindValue(':travauxId', $travauxId);
        $stmtChantier->bindValue(':descriptionChantier', $descriptionChantier);
        $stmtChantier->bindValue(':position_chantier', "0");
        //$stmtChantier->bindValue(':imageAvChantier', $imageAvChantier);
        //$stmtChantier->bindValue(':imageApChantier', $imageApChantier);
        $stmtChantier->execute();
        return 'L\'ajout du chantier a bien été réalisé';
    }

    // LISTE CATEGORIE
    public function readCategorie() {
        $checkCategoriesQuery = "SELECT * FROM travaux ORDER BY type_travaux";
        $checkCategorieStmt = $this->dbConnect->prepare($checkCategoriesQuery);
        $checkCategorieStmt ->execute();
        return $checkCategorieStmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //AJOUT D'IMAGE
    public function ajoutImage($dossierImage, $fichier, $nomFichierUpload){
        
        //var_dump($fichier);
        $target_file = $dossierImage . basename($fichier[$nomFichierUpload]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Vérification que ce soit bien image
        if(isset($_POST["submit"])) {
        $check = getimagesize($fichier[$nomFichierUpload]["tmp_name"]);
        if($check !== false) {
            echo "Le fichier n'est pas une image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Le fichier n'est pas une image, veuillez ressayer avec une image.";
            $uploadOk = 0;
        }
        }
        // Vérification que le fichier n'est pas déjà existant
        if (file_exists($target_file)) {
        echo "Désolé,le fichier existe déjà.";
        $uploadOk = 0;
        }
        // Verification de la taille du fichier
        if ($fichier[$nomFichierUpload]["size"] > 500000) {
        echo "Désolé,le fichier est trop important.";
        $uploadOk = 0;
        }
        // Verification du format de l'image 
        if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "les formats acceptés sont : JPG, JPEG & PNG.";
        $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Désolé, le fichier n'a pas été téléchargé";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($fichier[$nomFichierUpload]["tmp_name"], $target_file)) {
            echo "Le fichier ". htmlspecialchars( basename( $fichier[$nomFichierUpload]["name"])). " a été téléchargé avec succès.";
            //header("refresh:2");
        } else {
            echo "Erreur lors du téléchargement, veuillez réessayer";
        }
        }
    }








} 

