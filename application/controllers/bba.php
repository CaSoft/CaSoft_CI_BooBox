<?php
/**
 * bba.php
 *
 * Administração das campanhas Boo-Box.
 *
 * @author Bruno Almeida
 * @author Evaldo Junior
 * @version 0.1
 * @package
 * @subpackage controllers
 */

/**
 * bba
 *
 * @property CI_Loader  $load
 * @property CI_Input   $input
 */
class Bba extends CI_Controller {

    /**
     * Método construtor
     */
    public function  __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->helper(array('html', 'form'));
        $this->load->library('form_validation');

        if ($this->input->post()) {
            $this->load->model('bba_model');
            $this->bba_model->clear();
            foreach ($this->input->post() as $conf => $value) {
                if (is_array($value)) {
                    $va = '';
                    foreach ($value as $v) {
                        $va .= $v.',';
                    }
                    $value = $va;
                }

                $data = array(
                    'conf'  => $conf,
                    'value' => $value
                );

                $this->bba_model->save($data);
            }
        }

        $this->load->view('bba/index');
    }
}

/* End of file bba.php */
/* Location: ./application/controllers/bba.php */
