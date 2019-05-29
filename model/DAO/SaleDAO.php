<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/dataSource/DataBaseConection.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/interfaces/InterfaceSale.php';
  require_once $_SERVER['DOCUMENT_ROOT'].'Pago-Comisiones-Web/model/transferObject/Sale.php';
  /**
   *
   */
class SaleDAO implements InterfaceSale
{

    function __construct(){}

    public function insertSale($sale)
    {
      $dataBase = new DataBaseConection();
      $sql = 'INSERT INTO Sales (number_sale,sale_detail,date,total_sale,id_seller,nit_client)
              VALUES (:number_sale, :sale_detail, :date, :total_sale, NULL, :nit_client)';

        $result = $dataBase -> executeInsert($sql, array(
          ':number_sale'=>$sale->getNumberSale(),
          ':sale_detail'=>$sale->getSaleDetail(),
          ':date'=>$sale->getDate(),
          ':total_sale'=>$sale->getTotalSale(),
          ':nit_client'=>$sale->getClient()
        ));

        return $result;

    }


    public function selectByNumberSale($numberSale)
    {
      $dataBase = new DataBaseConection();
      $sql = 'SELECT * FROM Sales WHERE number_sale= :number_sale';
      $result = $dataBase -> executeQuery($sql, array(':number_sale'=>$numberSale));

      $sale = null;
      if ($result != false)
      {
        $sale = new Sale();
        $sale->setNumberSale( $result[0]['number_sale'] );
        $sale->setSaleDatail( $result[0]['sale_detail'] );
        $sale->setDate( $result[0]['date'] );
        $sale->setTotalSale( $result[0]['total_sale'] );
        $sale->setClient( $result[0]['nit_client'] );
      }

      return $sale;
    }
}
