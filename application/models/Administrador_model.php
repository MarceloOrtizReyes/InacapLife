<?php 
class Administrador_model extends CI_Model{
	public $_columns = array(
		"adm_id" => 0,
		"adm_nombre" =>'',
		"adm_apellidoPaterno" =>'',
		"adm_apellidoMaterno" =>'',
		"adm_rut" =>0,
		"adm_dv" =>0,
		"adm_correo" =>'',
		"adm_clave" =>'',
	);
	private static $_table = 'Administrador';
	public function __construct(){

        }
        public function findAll($where = array()) {
                $this->load->database();
                $result = null;
                $res    = $this->db->get_where(self::$_table , $where);
                if ($res->num_rows() > 0) {
                        foreach ($res->result() as $value) {
                                $result[] = $this->create($value);
                        }
                }
                return $result;
        }
        public function getRequired() {
                $requiredFields = array(
                        // campos requeridos para insertar
                	// en la base de datos
                );
                return $requiredFields;
        }
        public function isNew() {
                return $this->_columns['adm_id'] == 0;
        }
        public function validate() {
                $emptyCollumn = array();
                foreach ($this->_columns as $key => $value) {
                        if ((is_null($value) || empty(str_replace(' ', "", $value))) && in_array($key, $this->getRequired())) {
                                $emptyCollumn[] = $key;
                        }
                }
                return $emptyCollumn;
        }
        public function setColumns($row = null) {
                foreach ($row as $key => $value) {
                        $this->_columns[$key] = $value;
                }
        }
        public function set($key, $value) {
                $this->_columns[$key] = $value;
        }
        public function findById($id = null) {
                $id = intval($id);
                $this->load->database();
                $res    = $this->db->get_where(self::$_table, array('adm_id' => $id));
                $result = null;
                if ($res->num_rows() == 1) {
                        $result = $this->create($res->row_object());
                }
                return $result;
        }
        public function get($attr) {
                return $this->_columns[$attr];
        }

        public function create($row) {
                $admin = new Administrador_model();
                $admin->setColumns($row);
                return $admin;
        }

        public function save() {
                try {
                        $this->load->database();
                        if ($this->_columns['adm_id'] == 0 || is_null($this->_columns['adm_id'])) {
                                $this->db->insert(self::$_table, $this->_columns);
                                $this->_columns['adm_id'] = $this->db->insert_id();
                        } else {
                                $this->db->where('adm_id', $this->_columns['adm_id']);
                                $this->db->update(self::$_table, $this->_columns);
                        }
                } catch (Exception $e) {
                        echo "se produjo una excepcion del tipo".$e->getMessage();
                }
        }
        public function delete(){
                
        }
        public function toArray() {
                return get_object_vars($this);
        }
        public function login($email , $pass) {
                $this->load->database();
                // $alumno = $this->db->where('alu_email', $email);
                // return $alumno;
                $query = $this->db->where('adm_correo',$email);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
                $query = $this->db->where('adm_clave',$pass);
                $query = $this->db->get('Administrador');
                if ($query->row() != null) {
                        return $query->row();
                }else{
                        $data['datosIncorrectos'] = 'Correo y/o contraseña incorrectos';
                }
                
    
        }
}
 ?>}
