<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/interfaces/InterfaceSale.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'/Pago-Comisiones-Web/model/transferObject/Sale.php';
  /**
   *
   */
  class SaleDAO implements InterfaceSale
  {
    public function insertSale($sale){
      $dataBase = new DataBaseConection();
      $sql = 'INSERT INTO Sales (number_sale, sale_detail, date, total_sale, id_seller, nit_client)
        VALUES (null, :sale_detail, :date, :total_sale, :id_seller, :nit_client)';

      $result = $dataBase -> executeInsert($sql, array(
        ':sale_detail'=> $sale->getSaleDetail(),
        ':date'=>$sale->getDate(),
        ':total_sale'=>$sale->getTotalSale(),
        ':id_seller'=>$sale->getSeller(),
        ':nit_client'=>$sale->getClient()
      ));
      $numberSale = $this->getLastNumberSale();
      $sql = 'INSERT INTO SoldProducts (id_product, product, numberSale) VALUES (null, :product, :numberSale)';
      $products = $sale->getSoldProducts();
      for ($i=0; $i < count($products) ; $i++) {
        $result = $dataBase -> executeInsert($sql, array(
          ':product'=> $sale->getSoldProducts()[$i],
          ':numberSale'=> $numberSale
        ));
      }
      return $result;
    }
    public function selectSalesBySeller($idSeller){
    }
    public function selectSumTotalBySeller($idSeller){
      $dataBase = new DataBaseConection();
      $sql = 'SELECT SUM(total_sale) AS TotalSum FROM Sales WHERE id_seller = :id_seller';
      $numberSale = $dataBase -> executeQuery($sql, array(':id_seller'=>$idSeller));
      return $numberSale[0]['TotalSum'];
    }
    public function selectSalesNumber($idSeller)
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT COUNT(*) AS TotalCount FROM Sales WHERE id_seller = :id_seller';
      $numberSale = $dataBase -> executeQuery($sql, array(':id_seller'=>$idSeller));
      return $numberSale[0]['TotalCount'];
    }
    public function getLastNumberSale()
    {
      $dataBase = new DataBaseConection();
      $numberSale = $dataBase -> executeQuery('SELECT MAX(number_sale) AS lastId FROM Sales');
      return $numberSale[0]['lastId'];
    }
  }

?>
