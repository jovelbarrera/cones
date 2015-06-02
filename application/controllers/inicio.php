<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Inicio extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('header');
        $this->load->view('carousel');
        $this->load->view('inicio');
        $this->load->view('footer');
    }

    function descargar_llamado_a_ponencias() {
        $this->load->helper('download');
        $data = file_get_contents(asset_url()."docs/llamado-a-ponecias.pdf"); // Read the file's contents
        $name = 'Llamado a ponencias.pdf';

        force_download($name, $data);
    }

    function llamado_a_ponencias() {
        $this->load->view('header');
        $this->load->view('llamado_a_ponencias');
        $this->load->view('footer');
    }

    function inscripciones() {
        $this->load->view('header');
        $this->load->view('inscripciones');
        $this->load->view('footer');
    }

    function comite_organizador() {
        $this->load->view('header');
        $this->load->view('comite_organizador');
        $this->load->view('footer');
    }
    
    function hotel_sede() {
        $this->load->view('header');
        $this->load->view('hotel_sede');
        $this->load->view('footer');
    }
    
    function patrocinadores() {
        $this->load->view('header');
        $this->load->view('patrocinadores');
        $this->load->view('footer');
    }

    function contacto() {
        $this->load->view('header');
        $this->load->view('contacto');
        $this->load->view('footer');
    }

}
