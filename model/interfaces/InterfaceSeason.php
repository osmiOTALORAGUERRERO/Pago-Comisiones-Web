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
    public function updateSeaosonToActive($idSeason, $active);
    public function insertSeasonBySeller($idSeason='', $idSeller);
    public function deleteSeasonsBySeller($idSeason='');
    public function selectSeasonsSet();
  }

?>
