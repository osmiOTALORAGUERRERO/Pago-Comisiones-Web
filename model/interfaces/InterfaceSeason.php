<?php
  /**
   *
   */
  interface InterfaceSeason
  {
    public function updateSeason($season);
    public function selectSeasons();
    public function deleteSeason($idSeason);
    public function selectActiveSeason();
    public function selectSeasonById($idSeason);
    public function updateSeaosonToActive($idSeason);
    public function insertSeasonBySeller($idSeason='', $idSeller);
  }

?>
