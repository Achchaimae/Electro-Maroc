<?php
include_once '../Model/CategorieModel.php';
class CategorieController
{
   protected $categorie;
    public function __construct()
    {
        $this->categorie = new Categorie();
    }
    public function Ajouter($nom,$description,$photo)
    {
        $this->categorie->AjouterCategorie($nom,$description,$photo);
    }
    public function listcategorie()
    {
        $result = $this->categorie->listcategorie();
        return $result;
    }
    public function getcategorie($id)
    {
        $result = $this->categorie->getcategorie($id);
        return $result;
    }
    public function updatecategorie($nom,$description,$photo)
    {
        $this->categorie->updatecategorie($nom,$description,$photo);
    }
   
    public function deleteproduit($id)
    {
        $this->categorie->deletecategorie($id);
    }
    public function searchcategorie($nom)
    {
        $result = $this->categorie->searchcategorie($nom);
        return $result;
    }
    public function addPic(){
        if(isset($_FILES['categorie'])){
            $picname=$_FILES['categorie']['name'];
            $picsize=$_FILES['categorie']['size'];
            $pictmpname=$_FILES['categorie']['tmp_name'];
            if($_FILES['categorie']['error']===0){
                
                    $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    $allowed_exs=array("jpg","jpeg","png");

                    if(in_array($img_ex_lc,$allowed_exs)){
                        $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                        $img_upload_path='public/uploads/'.$new_img_name;
                        move_uploaded_file($pictmpname,$img_upload_path);
                        return $img_upload_path;
                    }else{
                        die("error");
                    }

            }else{
                    die("error");
                }
        }
    }
}

