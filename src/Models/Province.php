<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

use Illuminate\Support\Facades\Cache;

class Province extends \Teguh02\IndonesiaTerritoryForms\Database\Connection {

    # Define the table name
    const TABLE = 'provinces';

    # Define the columns that will be fetched
    const COLUMNS = [
        'prov_id',
        'prov_name'
    ];

    /**
     * Get all provinces
     *
     * @return array
     */
    function all() : array
    {
        return (array) Cache::remember('all_provinces', 3600, function() {
            return $this->db()
                        ->query('SELECT '. implode(',', self::COLUMNS) .' FROM '. self::TABLE .' ORDER BY prov_name ASC')
                        ->fetchAll(parent::$FETCH_ASSOC);
        });
    }

}