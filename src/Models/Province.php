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
                    ->query('SELECT * FROM provinces ORDER BY prov_name ASC')
                    ->fetchAll(parent::$FETCH_ASSOC);
    }

}