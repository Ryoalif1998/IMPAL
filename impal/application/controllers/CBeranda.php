<?php
Class CBeranda extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pemasukan');
        $this->load->model('m_pengeluaran');
    }  
	public function index()
	{
		$header['url']="index";
        $data['pemasukan'] = $this->m_pemasukan->getAllpemasukan();
        $data['pemasukan1'] = $this->m_pemasukan->getpemasukan(1);

        $data['pengeluaran'] = $this->m_pengeluaran->getAllpengeluaran();
        $data['pengeluaran1'] = $this->m_pengeluaran->getpengeluaran(1);
        
		$this->load->view('beranda.php',$data);
    }
}
?>