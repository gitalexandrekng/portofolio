<?php
function creations_posts_type(){
  $labels_creations_post_type_array = array(
            'name'                  =>  __('Creations', 'alexandrekong'),
            'singular_name'         =>  __('Comic', 'alexandrekong'),
            'add_new'               =>  __('Ajouter une création', 'alexandrekong'),
            'add_new_item'          =>  __('Ajouter une création', 'alexandrekong'),
            'edit_item'             =>  __('Editer l\'oeuvre', 'alexandrekong'),
            'new_item'              =>  __('Nouveau creations', 'alexandrekong'),
            'view_item'             =>  __('Visualiser l\'oeuvre', 'alexandrekong'),
            'search_items'          =>  __('Rechercher une oeuvre', 'alexandrekong'),
            'not_found'             =>  __('Aucun creations', 'alexandrekong'),
            'not_found_in_trash'    =>  __('Aucune oeuvre dans la corbeille', 'alexandrekong'),
            'parent_item_colon'     =>  __('--', 'alexandrekong'),
            'menu_name'             =>  __('Creations', 'alexandrekong')
        );
        $supports_creations_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt'
        );
        $rewrite_creations_post_type_array = array(
            'slug'          =>  _x('creations', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_creations_post_type_array = array(
            'labels'                =>  $labels_creations_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'alexandrekong'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  '',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_creations_post_type_array,
            'rewrite'               =>  $rewrite_creations_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        // POUR LES CATEGORIES

        $labels_serie = array(
        		'name'              => _x('Categorie', 'taxonomy general name'),
        		'singular_name'     => _x('Categorie', 'taxonomy singular name'),
        		'search_items'      => __('Rechercher une catégorie'),
        		'all_items'         => __('Toutes les catégories'),
        		'edit_item'         => __('Éditer une catégorie'),
        		'update_item'       => __('Mettre à jour une catégorie'),
        		'add_new_item'      => __('Ajouter une catégorie'),
        		'new_item_name'     => __('Nouvelle catégorie'),
        		'menu_name'         => __('Categorie'),
            	);
            	// register taxonomy
            	register_taxonomy( 'creations', 'creations', array(
            		'hierarchical' => true,
            		'labels' => $labels_serie,
            		'query_var' => true,
            		'show_admin_column' => true,
                    'rewrite' => 'slug'
            	) );

        register_post_type('creations', $args_creations_post_type_array);
      }

      add_action('init','creations_posts_type', 1);
