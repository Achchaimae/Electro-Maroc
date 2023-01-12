<?php
require_once 'C:\xampp\htdocs\Electro-Maroc\Model\ProductModel.php';
class ProductController
{
   protected $product;
    public function __construct()
    {
        $this->product = new ProductModel();
    }
    public function addProduct($ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id)
    {
        $this->product->Ajouter($ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id);
    }
    public function listproduit()
    {
        $result = $this->product->listproduit();
        return $result;
    }
    public function getproduit($id)
    {
        $result = $this->product->getproduit($id);
        return $result;
    }
    public function updateProduct($ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id)
    {
        $this->product->updateproduit($ref,$libelle,$code_barre,$prix_achat,$prix_final,$prix_offre,$description,$photo,$categorie_id);
    }
    public function deleteproduit($id)
    {
        $this->product->deleteproduit($id);
    }
    public function searchproduit($libelle)
    {
        $result = $this->product->searchproduit($libelle);
        return $result;
    }
    public function addPic(){
        if(isset($_FILES['produit'])){
            $picname=$_FILES['produit']['name'];
            $picsize=$_FILES['produit']['size'];
            $pictmpname=$_FILES['produit']['tmp_name'];
            if($_FILES['produit']['error']===0){
                
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
    public function listdesc()
    {
        $result = $this->product->listdesc();
        return $result;
    }
    public function listasc()
    {
        $result = $this->product->listasc();
        return $result;
    }
}

