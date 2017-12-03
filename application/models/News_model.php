<?php
class News_model extends CI_Model {

    //构造函数每次都必须执行,CI框架保证
    public function __construct()
    {
        $this->load->database();
    }

    //给Controller提供的方法，用于查询表结构数据
    public function get_news()
    {
        $query = $this->db->get('phpdemo2');
        return $query->result_array();

    }
}