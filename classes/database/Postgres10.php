<?php

/**
 * PostgreSQL 10 support
 *
 */

include_once('./classes/database/Postgres.php');

class Postgres10 extends Postgres {

    var $major_version = 10;

    // Help functions

    public function getHelpPages()
    {
        include_once('./help/PostgresDoc10.php');
        return $this->help_page;
    }
}
