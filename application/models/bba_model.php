<?php
/**
 * bba_model.php
 *
 * Model bba_model
 *
 * @author Bruno Almeida
 * @author Evaldo Junior
 * @package
 * @subpackage  models
 */

/**
 * bba_model
 *
 * @property    CI_DB_active_record     $db
 */
class Bba_model extends MY_Model {

    /**
     * Método construtor
     */
    public function  __construct() {
        parent::__construct();

        $this->table = 'bba_options';
    }

    public function clear() {
        $this->db->truncate($this->table);
    }
}

/* End of file bba_model.php */
/* Location: ./application/models/bba_model.php */

