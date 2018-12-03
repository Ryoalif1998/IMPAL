<?php
Class pengeluaran extends CI_Controller
{   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengeluaran');
    }   

    public function index($offset=0)
    {
        $header['url']="index";
        $data['pengeluaran'] = $this->m_pengeluaran->getAllpengeluaran();
        $data['pengeluaran1'] = $this->m_pengeluaran->getpengeluaran(1);
        $this->load->view('indexpengeluaran',$data);
    }
    public function add()
    {
        $header['url']="add"; 
        $this->load->view('addpengeluaran');
    }
    public function addProses(){
        $datapengeluaran = array(
            'nama_univ' => $this->input->post('nama_univ'),
            'nama_fakultas' => $this->input->post('nama_fakultas'),
            'nama_jurusan' => $this->input->post('nama_jurusan'),
            'tanggal_pengeluaran' => $this->input->post('tanggal_pengeluaran'),
            'jumlah_pengeluaran' => $this->input->post('jumlah_pengeluaran'),
            'asal_pengeluaran' => $this->input->post('asal_pengeluaran')
        );
        $this->m_pengeluaran->insert($datapengeluaran);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
        redirect('pengeluaran');
    }
    public function edit($id)
    {
        $header['url']="edit";
        $data['pengeluaran'] = $this->m_pengeluaran->getpengeluaran($id);
        $this->load->view('editpengeluaran',$data);
    }
    public function updateProcess($id){
        $datapengeluaran = array(
            'nama_univ' => $this->input->post('nama_univ'),
            'nama_fakultas' => $this->input->post('nama_fakultas'),
            'nama_jurusan' => $this->input->post('nama_jurusan'),
            'tanggal_pengeluaran' => $this->input->post('tanggal_pengeluaran'),
            'jumlah_pengeluaran' => $this->input->post('jumlah_pengeluaran'),
            'asal_pengeluaran' => $this->input->post('asal_pengeluaran')
        );
        $this->m_pengeluaran->update($id,$datapengeluaran);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Update Success</p>');
        redirect('pengeluaran');
    }
    public function delete($id){
        $this->m_pengeluaran->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('pengeluaran');
    }
}
?>
