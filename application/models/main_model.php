<?php

class main_model extends CI_Model
{

    public $tableName = "menu";

    public function __construct()
    {
        parent::__construct();

    }

    public function get($where = array(),$tabloAdi)
    {
        return $this->db->where($where)->get($tabloAdi)->row();
    }

    /** Tüm Kayıtları bana getirecek olan metot.. */
    public function get_all($where = array(), $order = "id ASC",$tbName)
    {
        return $this->db->where($where)->order_by($order)->get($tbName)->result();
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }

}
