<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

    public function form1_page1()
    {

    	$data = array(	'title' => 'FORM 1 – DATA DIRI SISWA - PAGE1',
    					'isi' => 'user/form1/page1' );

        $this->load->view('templates/wrapper', $data, FALSE);
        
    }

     public function form1_page2()
    {

    	$data = array(	'title' => 'FORM 1 – DATA DIRI SISWA - PAGE2',
    					'isi' => 'user/form1/page2' );

        $this->load->view('templates/wrapper', $data, FALSE);
        
    }

    public function form2_page1()
    {

    	$data = array(	'title' => 'FORM 2 – PEMINATAN SISWA',
    					'isi' => 'user/form2/page1' );

        $this->load->view('templates/wrapper', $data, FALSE);
        
    }


}

/* End of file C_user.php */
