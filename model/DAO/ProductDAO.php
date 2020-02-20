<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceProduct.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Product.php';
  /**
   *
   */
  class ProductDAO implements InterfaceProduct
  {
    public function selectProducts(){
       $dataBase = new DataBaseConection();
       $result= $dataBase -> executeQuery('SELECT id_product, product, category, price  FROM Products');
       $products= array();
       if ($result!= false) {
         for ($i=0; $i <count($result) ; $i++) {
           $product = new Product();
           $product -> setId($result[$i]['id_product']);
           $product -> setProduct($result[$i]['product']);
           $product -> setPrice($result[$i]['price']);
           $product -> setCategory($result[$i]['category']);
           array_push($products, $product);
         }
       }
       return $products;
    }

    public function insertProduct($product){
       $dataBase = new DataBaseConection();
       $sql = 'INSERT INTO Products (id_product, product, category, price) VALUES
       (NULL, :product, :category, :price)';

       $result = $dataBase -> executeInsert($sql, array(
         ':product' => $product ->getProduct(),
         ':category' => $product -> getCategory(),
         ':price' => $product -> getPrice()
       ));
       return $result;
    }
  }

?>
