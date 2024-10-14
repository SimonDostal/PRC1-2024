<?php

namespace App\Model;

use Nette\Database\Explorer;

class InventoryFacade
{
    private $database;

    public function __construct(Explorer $database)
    {
        $this->database = $database;
    }

    // Načtení inventáře konkrétní postavy podle character_id
    public function getInventoryByCharacterId($characterId)
    {
        return $this->database->table('inventory')
            ->where('character_id', $characterId)
            ->fetchAll();
    }
}
