<?phpuse Parse\ParseClient;use Parse\ParseObject;if (!defined('BASEPATH')) {    exit('No direct script access allowed');}class Inicio extends CI_Controller {    function __construct() {        ParseClient::initialize('Ah5AWLYZuB96XYs6WNBpPNKL5ZdxQHdRuOw6RvkQ', 'fHn41Sm6mHw9ntuinPcGuGl4VSvcbpIl2jCLyjF3', '4ts417GGJlx33dX974rZc5CViA39Eg8AWBCph7ss');        parent::__construct();        $this->load->helper('form');    }    function index() {        $this->load->view('header');        $this->load->view('carousel');        $this->load->view('inicio');        $this->load->view('footer');    }    function descargar_llamado_a_ponencias() {        $this->load->helper('download');        $data = file_get_contents(asset_url() . "docs/llamado-a-ponecias.pdf"); // Read the file's contents        $name = 'Llamado a ponencias.pdf';        force_download($name, $data);    }    function llamado_a_ponencias() {        $this->load->view('header');        $this->load->view('llamado_a_ponencias');        $this->load->view('footer');    }    function inscripciones() {        $this->load->view('header');        $this->load->view('inscripciones');        $this->load->view('footer');    }    function comite_organizador() {        $this->load->view('header');        $this->load->view('comite_organizador');        $this->load->view('footer');    }    function hotel_sede() {        $this->load->view('header');        $this->load->view('hotel_sede');        $this->load->view('footer');    }    function patrocinadores() {        $this->load->view('header');        $this->load->view('patrocinadores');        $this->load->view('footer');    }    function contacto() {        $this->load->view('header');        $this->load->view('contacto');        $this->load->view('footer');    }    function enviarFormulario() {        $data = $this->input->post();        $mensaje = new ParseObject("Consultas");        $mensaje->set("nombre", $data['nombre']);        $mensaje->set("correo", $data['correo']);        $mensaje->set("telefono", $data['telefono']);        $mensaje->set("asunto", $data['asunto']);        $mensaje->set("mensaje", $data['mensaje']);        try {            $mensaje->save();            $this->load->view('header');            $this->load->view('enviado_exito');            $this->load->view('contacto');            $this->load->view('footer');        } catch (ParseException $ex) {            $this->load->view('header');            $this->load->view('enviado_fallido');            $this->load->view('contacto');            $this->load->view('footer');        }    }    function enviarPreinscrip(){        $data = array(                'nombre'=> $this->input->post('nombre'),                'pais'=> $this->input->post('pais'),                'genero'=> $this->input->post('genero'),                'tipo_miembro'=> $this->input->post('tipo_miembro'),                'no_miembro'=> $this->input->post('no_miembro'),                'universidad'=> $this->input->post('universidad'),                'tipo_habita'=> $this->input->post('habitacion'),                'email'=> $this->input->post('email'),            )                try{        $this->db->set('reg_date','NOW()', FALSE);        $this->db->insert('preinscripciones',$data);        $this->load->view('header');        $this->load->view('preinscrip_exito');        $this->load->view('inscripciones');        $this->load->view('footer');        }        catch(ParseException $ex){        $this->load->view('header');        $this->load->view('enviado_fallido');        $this->load->view('inscripciones');        $this->load->view('footer');        }    }}