<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

use Teguh02\IndonesiaTerritoryForms\Database\Connection;

class Province extends Connection {

    /**
     * Get all provinces
     *
     * @return array
     */
    function all() : array
    {
        return (array) $this->db()
                    ->query('SELECT * FROM provinces')
                    ->fetchAll(parent::$FETCH_ASSOC);
    }

}