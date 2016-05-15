<?php
 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Articles
 *
 * @author Elif
 */
class Articles extends CI_Controller {
    /**
     * Dans le constructeur nous appelons le modèle que nous avons créer soit articles_modele
     */
    public function __construct(){
        parent::__construct();
        $this->load->model('articles_modele');
        
    }
    /**
     * Nous avons une fonction index qui fait appelle au fonction get_theme() et 
     * get_utilisateurs() qui se trouve dans articles_modele
     * puis nous faisons appelle a la vue
     */
    public function index(){
        $data['theme'] = $this->articles_modele->get_theme();
        $data['utilisateurs'] = $this->articles_modele->get_utilisateurs();
        $data['nom'] = 'Liste des articles';
        $this->load->view('articles/index', $data);
    }
    /**
     * 
     * @param int $fk_theme qui recupère l'id du theme 
     * on fais appel a la fonction get_selctiontheme qui se trouve dans articles_modele
     * puis on appel la vue articles/view
     * 
     */
    public function view($fk_theme)
{
         $data['articles'] = $this->articles_modele->get_selectiontheme($fk_theme);
        if (empty($data['articles']))
        {
                show_404();
        }
        $this->load->view('articles/view', $data);
}
/**
 * 
 * @param int $fk_utilisateur qui récupère l'id de l'auteur
 * on fais appel a la fonction get_selctionutilisateur qui se trouve dans articles_modele
 * puis on appel la vue articles/view
 */
        public function vue($fk_utilisateur){
        $data['articles'] = $this->articles_modele->get_selectionutilisateur($fk_utilisateur);
        if (empty($data['articles']))
        {
                show_404();
        }
        $this->load->view('articles/view', $data);
        }
}

