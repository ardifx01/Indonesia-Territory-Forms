<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

use Teguh02\IndonesiaTerritoryForms\Database\Connection;

class Province extends Connection {

    /**
     * Get all provinces
     *
     * @return void
     */
    function all() 
    {
        return $this->db()
                    ->query('SELECT * FROM provinces')
                    ->fetchAll(parent::$FETCH_ASSOC);
    }

}