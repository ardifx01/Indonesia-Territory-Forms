<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

class Province extends \Teguh02\IndonesiaTerritoryForms\Database\Connection {

    # Define the table name
    const TABLE = 'provinces';

    /**
     * Get all provinces
     *
     * @return array
     */
    function all() : array
    {
        return (array) $this->db()
                    ->query('SELECT * FROM '. self::TABLE .' ORDER BY prov_name ASC')
                    ->fetchAll(parent::$FETCH_ASSOC);
    }

}