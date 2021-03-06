<?php 
class Alumno_model extends CI_Model{
	private $_columns = array(
		"alu_id"=>0,
                "alu_nombre"=>'',
		"alu_apellidoPaterno"=>'',
		"alu_apellidoMaterno"=>'',
		"alu_rut"=>0,
		"alu_dv"=>0,
		"alu_email"=>'',
		"alu_pass"=>'',
		"alu_tipo"=>1,
		"alu_car_id"=>0,
		"alu_sed_id"=>0,
		"alu_estado"=>1,
	);
	protected static $_table = 'Alumno';

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
                return $this->_columns['alu_id'] == 0;
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
                $res    = $this->db->get_where(self::$_table, array('alu_id' => $id));
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
                $alum = new Alumno_model();
                $alum->setColumns($row);
                return $alum;
        }

        public function save() {
                try {
                        $this->load->database();
                        if ($this->_columns['alu_id'] == 0 || is_null($this->_columns['alu_id'])) {
                                $this->db->insert(self::$_table, $this->_columns);
                                $this->_columns['alu_id'] = $this->db->insert_id();
                        } else {
                                $this->db->where('alu_id', $this->_columns['alu_id']);
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
                $query = $this->db->where('alu_email',$email);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
                $query = $this->db->where('alu_pass',$pass);
                $query = $this->db->get('Alumno');
                if ($query->row() != null) {
                        return $query->row();
                }else{
                        $data['datosIncorrectos'] = 'Correo y/o contraseña incorrectos';
                }
                
    
        }
}
 ?>
