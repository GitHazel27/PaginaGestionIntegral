<?php
defined ('BASEPATH')OR exit ('No direct script access allowed');

class Pagina_model extends CI_Model{
    function consultar_secciones_activas(){
       /* $this->db->select("Id, nombre_seccion, href, activo, registro");
        $this->db->from("cat_secciones");
        $this->db->where("activo","1");
        $query=$this->db->get();
        if ($query!=false){
            if($query->num_rows()>0){
            return $query->result();
             }else{
            return false;
        }
        }else{
            return false;
        }*/
        $query=$this->db->query("Call ObtenerSecciones()");
        if($query!=false){
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
