<?php 
class Asignatura_model extends CI_Model{
	public $_columns = array(
		"asi_id" => 0,
		"asi_nomnbre" => ''
	);
	private static $_table = 'Asignatura';
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
                return $this->_columns['asi_id'] == 0;
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
                $res    = $this->db->get_where(self::$_table, array('asi_id' => $id));
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
                $asignatu = new Asignatura_model();
                $asignatu->setColumns($row);
                return $asignatu;
        }

        public function save() {
                try {
                        $this->load->database();
                        if ($this->_columns['asi_id'] == 0 || is_null($this->_columns['asi_id'])) {
                                $this->db->insert(self::$_table, $this->_columns);
                                $this->_columns['asi_id'] = $this->db->insert_id();
                        } else {
                                $this->db->where('asi_id', $this->_columns['asi_id']);
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
}
 ?>
