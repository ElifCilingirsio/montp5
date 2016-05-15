<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Articles_modele
 *
 * @author Elif
 */
class Articles_modele extends CI_Model {
    /**
     * Constructeur dans lequel nous faisons appel a la base de donnée
     */
    public function __construct(){
        $this->load->database();
    }
    /**
     * 
     * @param String $slug 
     * @return String 
     * recupère les articles ou le slug est le même que celle récupéré en parametre
     */
    public function get_articles($slug = FALSE){
        if ($slug === FALSE){
            //Pour récupérer tous les articles
            $query = $this->db->get('articles');
            return $query->result_array();
        }
    $query = $this->db->get_where('articles', array('slug' => $slug));
    return $query->row_array();
    }
    /**
     * 
     * @param int $idTheme
     * @return int
     * recupère l'id des themes de la table theme qui le même que celle en paramètre
     */
    public function get_theme($idTheme =FALSE){
        if($idTheme === FALSE){
            $query = $this->db->get('theme');
            return $query->result_array();
        }
        $query = $this->db->get_where('theme',array('idTheme' => $idTheme));
        return $query->row_array(); 
    }
    /**
     * 
     * @param int $id_utilisateur
     * @return int
     * recupère l'id des utilisateurs de la table utilisateurs qui le même que celle en paramètre
     */
    public function get_utilisateurs($id_utilisateur =FALSE){
        if($id_utilisateur === FALSE){
            $query = $this->db->get('utilisateurs');
            return $query->result_array();
        }
        $query = $this->db->get_where('utilisateurs',array('id_utilisateur' => $id_utilisateur));
        return $query->row_array(); 
    }
    /**
     * 
     * @param int $fk_theme
     * @return int
     * recupère les articles où l'id du theme dans la table articles est le même que celle récupéré en parametre
     */
    public function get_selectiontheme($fk_theme=FALSE){
        if($fk_theme === FALSE){
            $query = $this->db->get('articles');
            return $query->result_array();
        }
        $query = $this->db->get_where('articles',array('fk_theme' => $fk_theme));
        return $query->result_array();
    }
    /**
     * 
     * @param int $fk_utilisateur
     * @return int
     * recupère les articles où l'id de l'utilisateur est le même que celle récupéré
     */
    public function get_selectionutilisateur($fk_utilisateur){
        if($fk_utilisateur === FALSE){
            $query = $this->db->get('articles');
            return $query->result_array();
        }
        $query = $this->db->get_where('articles',array('fk_utilisateur' => $fk_utilisateur));
        return $query->result_array();
    }
}