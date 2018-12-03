<?php
Class pemasukan extends CI_Controller
{   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pemasukan');
    }   

    public function index($offset=0)
    {
        $header['url']="index";
        $data['pemasukan'] = $this->m_pemasukan->getAllpemasukan();
        $data['pemasukan1'] = $this->m_pemasukan->getpemasukan(1);
        $this->load->view('index',$data);
    }
    public function add()
    {
        $header['url']="add"; 
        $this->load->view('add');
    }
    public function addProses(){
        $datapemasukan = array(
            'nama_univ' => $this->input->post('nama_univ'),
            'nama_fakultas' => $this->input->post('nama_fakultas'),
            'nama_jurusan' => $this->input->post('nama_jurusan'),
            'tanggal_pemasukan' => $this->input->post('tanggal_pemasukan'),
            'jumlah_pemasukan' => $this->input->post('jumlah_pemasukan'),
            'asal_pemasukan' => $this->input->post('asal_pemasukan')
        );
        $this->m_pemasukan->insert($datapemasukan);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Input Success</p>');
        redirect('pemasukan');
    }
    public function edit($id)
    {
        $header['url']="edit";
        $data['pemasukan'] = $this->m_pemasukan->getpemasukan($id);
        $this->load->view('edit',$data);
    }
    public function updateProcess($id){
        $datapemasukan = array(
            'nama_univ' => $this->input->post('nama_univ'),
            'nama_fakultas' => $this->input->post('nama_fakultas'),
            'nama_jurusan' => $this->input->post('nama_jurusan'),
            'tanggal_pemasukan' => $this->input->post('tanggal_pemasukan'),
            'jumlah_pemasukan' => $this->input->post('jumlah_pemasukan'),
            'asal_pemasukan' => $this->input->post('asal_pemasukan')
        );
        $this->m_pemasukan->update($id,$datapemasukan);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Update Success</p>');
        redirect('pemasukan');
    }
    public function delete($id){
        $this->m_pemasukan->delete($id);
        $this->session->set_flashdata('msg','<p class="alert alert-success">Delete Success</p>');
        redirect('pemasukan');
    }
}
?>
