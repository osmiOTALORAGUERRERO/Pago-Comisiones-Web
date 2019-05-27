<?php
  /**
   *
   */
  interface InterfaceSeason
  {
    public function insertSeason($season);
    public function selectSeasons();
    public function deleteSeason($idSeason);
    public function selectActiveSeason();
  }

?>
