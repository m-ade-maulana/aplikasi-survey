<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function index()
	{
		$this->load->view('welcome');
	}

	public function input_data()
	{
		$data = [
			'nama_siswa' => $this->input->post('nama_siswa'),
			'nama_orang_tua' => $this->input->post('nama_orang_tua'),
			'nomor_hp' => $this->input->post('nomor_hp'),
			'alamat' => $this->input->post('alamat'),
			'asal_sekolah' => $this->input->post('asal_sekolah'),
			'jalur_pendaftaran' => $this->input->post('jalur_pendaftaran')
		];

		$insert = $this->db->insert('tb_data_diri', $data);

		if ($insert == TRUE) {
			redirect('welcome/question_1');
		} else {
			redirect('welcome');
		}
	}

	public function question_1()
	{
		$data = [
			'question' => 'Bagaimana sarana Posko PPDB SMAN 7'
		];
		$quest = "Bagaimana sarana Posko PPDB SMAN 7";
		// $this->load->view('welcome', $data);
		$this->parser->parse('survey', $data);

		if ($this->input->post('select_1')) {
			$answer = $this->input->post('select_1');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome/question_2');
		} elseif ($this->input->post('select_2')) {
			$answer = $this->input->post('select_2');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome/question_2');
		} elseif ($this->input->post('select_3')) {
			$answer = $this->input->post('select_3');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome/question_2');
		} elseif ($this->input->post('select_4')) {
			$answer = $this->input->post('select_4');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome/question_2');
		}
	}

	public function question_2()
	{
		$data = [
			'question' => 'Bagaimana Pelayanan Petugas Posko PPDB SMAN 7'
		];
		$quest = "Bagaimana Pelayanan Petugas Posko PPDB SMAN 7";
		// $this->load->view('survey', $data);
		$this->parser->parse('survey', $data);

		if ($this->input->post('select_1')) {
			$answer = $this->input->post('select_1');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome/question_3');
		} elseif ($this->input->post('select_2')) {
			$answer = $this->input->post('select_2');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome/question_3');
		} elseif ($this->input->post('select_3')) {
			$answer = $this->input->post('select_3');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome/question_3');
		} elseif ($this->input->post('select_4')) {
			$answer = $this->input->post('select_4');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome/question_3');
		}
	}

	public function question_3()
	{
		$data = [
			'question' => 'Bagaimana Untuk Penyelesaian Masalah oleh Petugas PPDB SMAN 7'
		];
		$quest = "Bagaimana Untuk Penyelesaian Masalah oleh Petugas PPDB SMAN 7";
		// $this->load->view('survey', $data);
		$this->parser->parse('survey', $data);

		if ($this->input->post('select_1')) {
			$answer = $this->input->post('select_1');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome');
		} elseif ($this->input->post('select_2')) {
			$answer = $this->input->post('select_2');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome');
		} elseif ($this->input->post('select_3')) {
			$answer = $this->input->post('select_3');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome');
		} elseif ($this->input->post('select_4')) {
			$answer = $this->input->post('select_4');
			$data = [
				'quest' => $quest,
				'answer' => $answer,
			];
			redirect('welcome');
		}
	}
}
