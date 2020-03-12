<?php

class Main_model extends CI_Model
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

    public function add($data = array(),$tbName)
    {
        return $this->db->insert($tbName, $data);
    }

    public function update($where = array(), $data = array(),$tbName)
    {
        return $this->db->where($where)->update($tbName, $data);
    }

    public function delete($where = array(),$tbName)
    {
        return $this->db->where($where)->delete($tbName);
    }

}
