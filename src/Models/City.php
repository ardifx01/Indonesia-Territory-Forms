<?php

namespace Teguh02\IndonesiaTerritoryForms\Models;

class City extends \Teguh02\IndonesiaTerritoryForms\Database\Connection {

    # Define the table name
    const TABLE = 'city';

    /**
     * Get all cities by province
     *
     * @param integer $prov_id
     * @return array
     */
    function city_by_provincy(int $prov_id) : array
    {
        $query = $this->db()
                    ->prepare('SELECT city_id, city_name FROM '. self::TABLE .' WHERE prov_id = :prov_id ORDER BY city_name ASC');

        $query->bindParam(':prov_id', $prov_id);
        $query->execute();
        return (array) $query->fetchAll(parent::$FETCH_ASSOC);
    }

}