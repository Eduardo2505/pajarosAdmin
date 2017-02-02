<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $limite = 10;

	function __construct() {

		parent::__construct();

		$this->load->model('models_avistamientos');
	}


	public function all() {


		$parajos=$this->models_avistamientos->get();

		echo json_encode($parajos);

	}

	public function updateVeces(){

		$id = $this->input->post('id');
		$data = array(
			'veces' => $this->input->post('veces'),
			'lastView' => $this->input->post('lastView'));

		$notas=$this->models_avistamientos->update($id,$data);
		

		echo '{"mensaje":"'.$notas.'"}';

	}
	public function update(){

		$id = $this->input->post('id');
		$data = array(
			'titulo' => $this->input->post('titulo'),
			'pajaro' => $this->input->post('pajaro'));

		

		$notas=$this->models_avistamientos->update($id,$data);

		

		echo '{"mensaje":"'.$notas.'"}';

	}

	public function add() {
		
		$data = array(
			'titulo' => $this->input->post('titulo'),
			'pajaro' => $this->input->post('pajaro'),
			'veces' => $this->input->post('veces'),
			'latitud' => $this->input->post('latitud'),
			'longitud' => $this->input->post('longitud'),
			'lastview' => $this->input->post('lastview'));
			$notas=$this->models_avistamientos->insertar($data);


			echo '{"mensaje":"'.$notas.'"}';


		}

		public function buscar() {


			$id = $this->input->get('id');
			$nota=$this->models_avistamientos->Buscar($id);

			echo json_encode($nota);

		}

		public function delete() {


			$id = $this->input->get('id');
			$nota=$this->models_avistamientos->eliminar($id);
			echo '{"mensaje":"'.$nota.'"}';


		}




	}
