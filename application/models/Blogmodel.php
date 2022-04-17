<?php
    class Blogmodel extends CI_Model{
        function tampilBlog(){
            return $this->db->get('tbl_blog')->result_array();
        }
            public function add_blog($tambah){
                return $this->db->insert('tbl_blog',$tambah);
        }
        public function getsingelBlog($field,$value){
            $this->db->where($field,$value);
            $query =$this->db->get('blog');
            return $query->row_array();
        }
    }
    ?>
                                                                  