<?php
# *** LICENSE ***
# This file is part of BlogoText.
# https://github.com/BoboTiG/blogotext/
#
# 2006      Frederic Nassar.
# 2010-2016 Timo Van Neerden.
# 2016-.... Mickaël Schoentgen and the community.
#
# BlogoText is free software.
# You can redistribute it under the terms of the MIT / X11 Licence.
# *** LICENSE ***

$GLOBALS['lang'] = array(
'id' => 'fr',
// Install
'install' => 'Installation',
'install_id' => 'Choisissez un identifiant : ',
'install_mdp' => 'Choisissez un mot de passe : ',
'install_remdp' => 'Confirmez votre mot de passe : ',
'install_choose_sgdb' => 'Choisissez votre SGDB : ',
'install_sqlite_no_more_todo' => 'Aucune configuration supplémentaire n’est nécessaire avec SQLite.',
'install_err_mysql_usr_empty' => 'L’utilisateur MySQL n’a pas été indiqué.',
'install_err_mysql_pss_empty' => 'Le mot de passe MySQL n’a pas été indiqué.',
'install_err_mysql_hst_empty' => 'Le « hostname » MySQL n’a pas été indiqué.',
'install_err_mysql_dba_empty' => 'Le nom de la base de donnée MySQL n’a pas été indiqué.',
'install_err_mysql_connect' => 'Échec lors de la connexion à MySQL avec ces informations.',
'first_titre' => 'Mon premier article',
'first_edit' => 'Éditez-moi',
// Navigation
'le' => 'le',
'remarque' => 'Remarque',
'preferences' => 'Préférences',
'connexion' => 'Connexion',
'enregistrer' => 'Enregistrer',
'valider' => 'Valider',
'annuler' => 'Annuler',
'envoyer' => 'Envoyer',
'preview' => 'Prévisualiser',
'editer' => 'Éditer',
'activer' => 'Activer',
'desactiver' => 'Désactiver',
'mesarticles' => 'Mes articles',
'mesmodules' => 'Mes modules',
'mesliens' => 'Mes liens',
'mesabonnements' => 'Mes abonnements',
'nouveau' => 'Nouvel article',
'supprimer' => 'Supprimer',
'voir' => 'Voir',
'telecharger' => 'Télécharger',
'partager' => 'Partager',
'infos' => 'Infos',
'deconnexion' => 'Déconnexion',
'rechercher' => 'Rechercher',
'filtrer' => 'Filtrer',
'oui' => 'Oui',
'non' => 'Non',
'ouverts' => 'Autorisés',
'fermes' => 'Interdits',
'repondre' => 'répondre',
'depuis' => 'depuis',
'sur' => 'sur',
'patientez' => 'patientez',
'secondes' => 'secondes',
'du' => 'du',
'et' => 'et',
'ou' => 'ou',
'par' => 'par',
'ajoute' => 'ajouté(s)',
'trouve' => 'trouvé(s)',
'voir_sur_le_blog' => 'Voir sur le blog',
'byte_symbol' => 'o',
'using' => 'avec',
'rendered' => 'généré en',
'recherche' => 'Les résultats de recherche pour',
// Boutons formatage commentaires
'bouton-gras' => 'gras',
'bouton-ital' => 'italique',
'bouton-soul' => 'souligné',
'bouton-barr' => 'barré',
'bouton-lien' => 'Insérer un lien',
'bouton-cita' => 'Insérer une citation',
'bouton-imag' => 'Insérer une image',
'bouton-code' => 'Insérer du code formaté',
'bouton-left' => 'Aligner le texte à gauche',
'bouton-center' => 'Aligner le texte au center',
'bouton-right' => 'Aligner le texte à droite',
'bouton-justify' => 'Justifier le texte (aligner des deux côtés)',
'bouton-liul' => 'Insérer une liste à puce',
'bouton-liol' => 'Insérer une liste numérotée',
// Modes
'ecrire' => 'Modifier l’article ',
'apercu' => 'Aperçu',
// Labels
'label_date' => 'Date',
'label_time' => 'Heure',
'label_titre' => 'Titre',
'label_chapo' => 'Chapô',
'label_contenu' => 'Contenu',
'label_description' => 'Description',
'label_motscles' => 'Mots clés',
'label_publie' => 'Publié',
'label_publies' => 'Publiés',
'label_invisible' => 'Invisible',
'label_invisibles' => 'Invisibles',
'label_all' => 'Tous',
'label_enabled' => 'Activé',
'label_disabled' => 'Désactivé',
'label_allowcomment' => 'Commentaires',
'label_image_ajout' => 'Ajouter une image',
'label_lien_ajout' => 'Ajouter un lien',
'label_fichier_ajout' => 'Ajouter un fichier',
'label_feed_ajout' => 'Ajouter un flux',
'label_feed_new' => 'Nouveau flux ',
'label_feed_yours' => 'Vos flux ',
'label_votre_image' => 'Votre image',
'label_votre_fichier' => 'Votre fichier',
'label_article_derniers' => 'Articles récents',
'label_comment_derniers' => 'Commentaires récents',
'label_link_derniers' => 'Liens récents',
'label_image_derniers' => 'Images récentes',
'label_fichier_derniers' => 'Fichiers récents',
'label_afficher' => 'Afficher',
'label_ok' => 'Ok',
'label_quote' => 'citation',
'label_code' => 'code',
'label_article' => 'article',
'label_articles' => 'articles',
'label_commentaire' => 'commentaire',
'label_commentaires' => 'commentaires',
'label_link' => 'lien',
'label_links' => 'liens',
'label_element' => 'élément',
'label_elements' => 'éléments',
'label_image' => 'image',
'label_images' => 'images',
'label_feeds' => 'flux RSS',
'label_feed_entry' => 'Entrée RSS',
'label_feed_entrys' => 'Entrées RSS',
'label_import-export' => 'Import/Export',
'label_fichier' => 'fichier',
'label_fichiers' => 'fichiers',
'label_module' => 'module',
'label_modules' => 'modules',
'label_note' => 'note',
'label_nouv_note' => 'Nouvelle note',
'label_categories' => 'Tags',
'label_nouv_lien' => 'Nouveau lien <span style="font-weight:normal;">(ou laissez vide)</span>',
'label_edit_lien' => 'Éditer le lien',
'label_lien_priv' => 'Le lien est privé ?',
'label_img_priv' => 'L’image est privée ?',
'label_file_priv' => 'Le fichier est privé ?',
'label_comm_priv' => 'Le commentaire est masqué ?',
'label_stay_logged' => 'Rester connecté ?',
'label_resume' => 'Résumé',
'label_type' => 'Type',
'label_extension' => 'Extention',
'label_taille_fichier' => 'Taille',
'label_precedent' => 'éléments plus récents',
'label_suivant' => 'éléments plus anciens',
'label_dl_fichier' => 'Également importer le fichier ? ',
'label_combien' => 'Combien ?',
'label_all_comm_by_author' => 'Tous les commentaires de cet auteur',
'label_owner_url' => 'Site web de l’auteur',
'label_code_theme' => 'Code d’intégration pour les thèmes',
'label_no_code_theme' => 'Ce module n’utilise pas de code d’intégration',
// Label avec " : "
'label_dp_lien' => 'Lien : ',
'label_dp_fichier' => 'Fichier : ',
'label_dp_url' => 'Url : ',
'label_dp_titre' => 'Titre : ',
'label_dp_description' => 'Description : ',
'label_dp_nom' => 'Nom : ',
'label_dp_type' => 'Type (extension) : ',
'label_dp_dossier' => 'Album : ',
'label_dp_tags' => 'Tags : ',
'label_dp_date' => 'Date : ',
'label_dp_dimensions' => 'Dimensions : ',
'label_dp_visibilite' => 'Visibilité : ',
'label_dp_etat' => 'État : ',
'label_dp_version' => 'Version : ',
'label_dp_commentaires' => 'Commentaires : ',
'label_dp_poids' => 'Poids du fichier : ',
'label_dp_checksum' => 'SHA-1 : ',
'label_dp_pseudo' => 'Pseudo : ',
'label_dp_webpage' => 'Site web (facultatif) : ',
'label_dp_captcha' => 'Somme de : ',
'label_dp_email' => 'E-mail (facultatif) : ',
'label_dp_email_required' => 'E-mail : ',
'label_dp_identifiant' => 'Identifiant : ',
'label_dp_motdepasse' => 'Mot de passe : ',
// Commentaire
'aucun' => 'aucun',
'comment_ajout' => 'Ajouter un commentaire',
'comment_cookie' => 'Retenir ces informations avec un cookie ? ',
'comment_subscribe' => 'Recevoir des notifications de nouveaux commentaires par email ? ',
'comment_not_allowed' => 'Les commentaires sont fermés pour cet article',
'no_comments' => 'Il n’y a aucun commentaire pour le moment.',
'comment_is_visible' => 'Le commentaire est visible',
'comment_is_invisible' => 'Le commentaire n’est pas visible',
'comment_need_validation' => 'Votre commentaire sera visible après validation par le webmaster.',
// links
'link_is_public' => 'Le lien est public',
'link_is_private' => 'Le lien est privée (invisible)',
// Titles - liens
'post_link' => 'Voir en ligne',
'post_share' => 'Partager',
'blog_link' => 'Voir le blog',
'go_to_pref' => 'Allez dans les préférences pour changer le titre.',
// Mois
'janvier' => 'janvier',
'fevrier' => 'février',
'mars' => 'mars',
'avril' => 'avril',
'mai' => 'mai',
'juin' => 'juin',
'juillet' => 'juillet',
'aout' => 'août',
'septembre' => 'septembre',
'octobre' => 'octobre',
'novembre' => 'novembre',
'decembre' => 'décembre',
'janv.' => 'janv.',
'fev.' => 'févr.',
'mars.' => 'mars',
'avr.' => 'avril',
'mai.' => 'mai',
'juin.' => 'juin',
'juil.' => 'juil.',
'aout.' => 'août',
'sept.' => 'sept.',
'oct.' => 'oct.',
'nov.' => 'nov.',
'dec.' => 'déc.',
// Jours
'lu' => 'Lu',
'ma' => 'Ma',
'me' => 'Me',
'je' => 'Je',
've' => 'Ve',
'sa' => 'Sa',
'di' => 'Di',
// Jours
'lundi' => 'lundi',
'mardi' => 'mardi',
'mercredi' => 'mercredi',
'jeudi' => 'jeudi',
'vendredi' => 'vendredi',
'samedi' => 'samedi',
'dimanche' => 'dimanche',
'aujourdhui' => 'aujourd’hui',
'hier' => 'hier',
// Erreurs
'erreurs' => 'Erreur(s)',
'err_titre' => 'Le titre est vide',
'err_contenu' => 'Le contenu est vide',
'err_annee' => 'L’année est incorrecte',
'err_mois' => 'Le mois est incorrect',
'err_jour' => 'Le jour est incorrect',
'err_heure' => 'L’heure est incorrecte',
'err_minutes' => 'Les minutes sont incorrectes',
'err_secondes' => 'Les secondes sont incorrectes',
'err_file_write' => 'Impossible de créer le fichier',
'err_theme_introuvable' => 'Le fichier thème est introuvable, incomplet ou illisible.',
'err_prefs_write' => 'Écriture impossible du fichier des préférences',
'err_prefs_auteur' => 'Le nom de l’auteur est vide',
'err_prefs_email' => 'L’adresse e-mail n’est pas valide',
'err_prefs_identifiant' => 'Le nom d’utilisateur est vide',
'err_prefs_id_mdp' => 'Pour définir un nouvel identifiant, vous devez saisir votre mot de passe',
'err_prefs_id_syntaxe' => 'Le nouvel identifiant ne peut pas comporter les caractères \', ", \\, | ou =.' ,
'err_prefs_oldmdp' => 'L’ancien mot de passe n’est pas valide',
'err_prefs_mdp_diff' => 'Les deux mots de passe ne correspondent pas',
'err_prefs_mdp' => 'Le mot de passe doit faire au moins 6 caractères',
'err_prefs_mdp_weak' => 'Le mot de passe est faible, continuer ?',
'err_prefs_newmdp' => 'Pour définir un nouveau mot de passe, vous devez saisir l’ancien',
'err_prefs_nbmax' => 'Le nombre d’articles n’est pas valide',
'err_prefs_racine' => 'Vous devez indiquer l’URL du blog',
'err_prefs_racine_http' => 'L’URL du blog doit commencer par "http://" ou "https://"',
'err_prefs_racine_slash' => 'L’URL du blog doit finir par un slash "/"',
'err_comm_auteur' => 'Le nom de l’auteur est vide',
'err_comm_email' => 'L’adresse e-mail n’est pas valide',
'err_comm_contenu' => 'Le commentaire est vide',
'err_comm_captcha' => 'La somme est incorrecte (utiliser des chiffres)',
'err_comm_webpage' => 'L’URL n’est pas valide',
'err_comm_article_id' => 'L’ID Article n’est pas valide',
'err_lien_vide' => 'L’URL est vide',
'err_wrong_token' => 'Le jeton de sécurité est expiré ou invalide.',
'err_wrong_id' => 'L’ID est invalide.',
'err_feed_exists' => 'Le flux existe déjà.',
'err_feed_wrong_param' => 'Mauvaise requête.',
'err_addon_name' => 'Nom du module invalide.',
'err_addon_status' => 'Statut du module non renseigné.',
'err_addon_enabled' => 'Impossible d\'activer le module "%s", vérifiez les droits du dossier "'.DIR_ADDONS.'" et de ses sous-dossiers.',
'err_addon_disabled' => 'Impossible de désactiver le module "%s", vérifiez les droits du dossier "'.DIR_ADDONS.'" et de ses sous-dossiers.',
// Questions
'question_suppr_article' => 'Cet article et ses commentaires seront définitivement supprimés !',
'question_suppr_image' => 'Cette image sera définitivement supprimée !',
'question_suppr_comment' => 'Ce commentaire sera définitivement supprimé !',
'question_suppr_fichier' => 'Ce fichier sera définitivement supprimé !',
'question_quit_page' => 'Vos modifications n’ont pas été enregistrées. Quitter la page provoquera la perte des données.',
'question_clean_rss' => 'Tous les articles lus seront supprimés de la BDD ?',
// Confirmations
'confirm_article_suppr' => 'L’article a été supprimé.',
'confirm_article_ajout' => 'L’article a été enregistré.',
'confirm_article_maj' => 'L’article a été mis à jour.',
'confirm_fichier_ajout' => 'Le fichier a été ajouté.',
'confirm_fichier_suppr' => 'Le fichier a été supprimé.',
'confirm_fichier_edit' => 'Les informations du fichier ont été éditées.',
'confirm_prefs_maj' => 'Vos préférences ont été enregistrées.',
'confirm_comment_ajout' => 'Votre commentaire a été ajouté.',
'confirm_comment_suppr' => 'Le commentaire a été supprimé.',
'confirm_comment_edit' => 'Le commentaire a été édité.',
'confirm_comment_valid' => 'Le statut du commentaire a été modifié.',
'confirm_link_ajout' => 'Le lien a été ajouté.',
'confirm_link_suppr' => 'Le lien a été supprimé.',
'confirm_link_edit' => 'Le lien a été édité.',
'confirm_feed_update' => 'Les flux ont été mis à jour ',
'confirm_feeds_edit' => 'Les flux ont été édités.',
'confirm_feed_ajout' => 'Le flux a été ajouté.',
'confirm_feed_clean' => 'Tous les anciens éléments ont été supprimés.',
// No-confirmation
'error_image_add' => 'Le fichier n’a pas pu être ajoutée',
'error_phpajax' => 'Une erreur PHP/Ajax s’est produite :',
'error_comment_suppr' => 'Le commentaire n’a pas été supprimé suite à une erreur.',
'error_comment_valid' => 'Le statut du commentaire n’a pas été modifié suite à une erreur.',
// Redirections
'retour_liste' => '« Liste des articles',
// Titres des pages
'bienvenue' => 'Bienvenue',
'titre_identification' => 'Veuillez vous identifier',
'titre_articles' => 'Vos articles',
'titre_ecrire' => 'Écrire un nouvel article',
'titre_maj' => 'Mise à jour d’un article',
'titre_commentaires' => 'Commentaires',
'titre_preferences' => 'Préférences',
'titre_fichier' => 'Fichiers',
'titre_maintenance' => 'Maintenance',
// modules / addons
'addons_buttons_action_legend' => 'Actions du module : ',
'addons_settings_legend' => 'Préférences du module : ',
'addons_settings_link_title' => 'Configuration',
'addons_settings_confirm_reset' => 'Êtes-vous sûr de vouloir effacer vos paramètres ?',
'addons_confirm_buttons_action' => 'Certaines actions peuvent prendre du temps à se terminer, veuillez ne pas fermer ou rafraîchir votre fenêtre jusqu\'au rechargement complet de la page.',
'addons_clean_cache_label' => 'Effacer le cache de ce module ?',
'addons_click_more' => 'Cliquez pour plus d\'informations sur le module',
'addons_insert_code' => 'Insérez ce code dans votre modèle : ',
// Preferences
'prefs_legend_utilisateur' => 'Utilisateur',
'prefs_legend_apparence' => 'Apparence',
'prefs_legend_securite' => 'Sécurité',
'prefs_legend_langdateheure' => 'Langue, date et heure',
'prefs_legend_configblog' => 'Blog et commentaires',
'prefs_legend_configlinx' => 'Liens',
'prefs_legend_configrss' => 'Flux RSS',
'prefs_legend_image' => 'Envoyer une image',
'pref_auteur' => 'Auteur : ',
'pref_email' => 'Adresse e-mail : ',
'pref_identifiant' => 'Identifiant : ',
'pref_mdp' => 'Mot de passe actuel : ',
'pref_mdp_nouv' => 'Nouveau mot de passe : ',
'pref_langue' => 'Langue : ',
'pref_nom_site' => 'Nom du site : ',
'pref_keywords' => 'Mots clés : ',
'pref_format_date' => 'Format de la date : ',
'pref_format_heure' => 'Format de l’heure : ',
'pref_racine' => 'URL du blog : ',
'pref_nb_maxi' => 'Nombre d’articles sur le blog : ',
'pref_nb_list' => 'Nombre d’articles liste admin : ',
'pref_nb_list_com' => 'Nombre de commentaires liste admin : ',
'pref_nb_list_linx' => 'Nombre de liens dans la liste admin : ',
'pref_fuseau_horaire' => 'Fuseau horaire : ',
'pref_comm_BoW_list' => 'Les commentaires sont visibles : ',
'pref_comm_white_list' => 'Après que vous les ayez validés.',
'pref_comm_black_list' => 'Dés qu’ils sont postés.',
'pref_automatic_keywords' => 'Mots-clés meta automatiques (META) : ',
'pref_force_email' => 'L’email est exigée pour commenter : ',
'pref_alert_author' => 'Recevoir un courriel lorsqu\'un commentaire est ajouté : ',
'pref_theme' => 'Thème du blog : ',
'pref_afficher_rss' => 'Afficher l’onglet des RSS :',
'pref_afficher_liens' => 'Afficher l’onglet des liens :',
'pref_categories' => 'Classement des billets par tags : ',
'pref_commentaires' => 'Utiliser les commentaires : ',
'pref_allow_global_coms' => 'Fermeture de tous les commentaires : ',
'pref_all' => 'Tout',
'pref_go_to_maintenance' => 'Accéder à la page de maintenance : ',
'pref_rss_go_to_imp-export' => 'Accéder à la page d’import/export OMPL : ',
'pref_label_bookmark_lien' => 'Bookmarklet pour partager des liens : ',
'pref_label_crontab_rss' => 'Ligne "crontab" pour MÀJ auto des flux : ',
'pref_alert_crontab_rss' => 'Copiez cette ligne dans votre Crontab :',
'pref_linx_dl_auto' => 'Importation automatique des fichiers partagés :',
'pref_ask_everytime' => 'Demander à chaque fois',
'pref_check_update' => 'Vérifier les mises à jour automatiquement',
'maintenance_optim' => 'Nettoyer la base de données',
// Notes
'note_no_article' => 'Aucun article',
'note_no_module' => 'Aucun module',
'note_no_commentaire' => 'Aucun commentaire',
'note_comment_closed' => 'Commentaires fermés',
'note_no_link' => 'Aucun lien',
'note_no_image' => 'Aucune image',
'note_no_fichier' => 'Aucun fichier',
'note_no_feed' => 'Aucun flux RSS',
'note_no_feed_entry' => 'Aucune entrée RSS',
// placeholders
'placeholder_search' => 'Rechercher',
'placeholder_nom_fichier' => 'nom',
'placeholder_description' => 'description',
'placeholder_titre' => 'titre',
'placeholder_chapo' => 'chapô',
'placeholder_notes' => 'notes',
'placeholder_contenu' => 'contenu',
'placeholder_motscle' => 'mots clés',
'placeholder_folder' => 'album',
'placeholder_tags' => 'tags',

//Formulaire Images
'label_jusqua' => 'Jusqu’à ',
'label_parfichier' => ' par fichier',
'label_codes' => 'Codes d’intégration :',
'img_upload' => 'Envoyer',
'img_specifier_url' => 'Spécifier une URL à la place',
'img_upload_un_fichier' => 'Envoyer un seul fichier',
'img_drop_files_here' => 'Déposez vos fichiers ici',
// page backup
'bak_succes_save' => 'Sauvegarde réussie',
'maintenance_ask_do_what' => 'Que voulez-vous faire ?',
'maintenance_export' => 'Exporter',
'maintenance_incl_quoi' => 'Que voulez vous dans votre sauvegarde ?',
'maintenance_import' => 'Importer',
'bak_chooseaction' => 'Que voulez-vous faire ?',
'bak_choosefile' => 'Choisir un fichier',
'bak_restor_done' => 'Restauration effectuée',
'bak_optim_done' => 'Nettoyage terminé',
'bak_articles_do' => 'Inclure les articles',
'bak_comments_do' => 'Inclure les commentaires des articles',
'bak_links_do' => 'Inclure les liens',
'bak_number_articles' => 'Nombre d’articles',
'bak_combien_images' => 'Combien d’images ?',
'bak_combien_linx' => 'Combien de liens ?',
'bak_import_btjson' => 'Importer un fichier JSON de BlogoText',
'bak_import_wordpress' => 'Importer un fichier XML de WordPress',
'bak_import_netscape' => 'Importer un fichier HTML de liens Netscape',
'bak_import_rssopml' => 'Importer un fichier OPML de liste de flux RSS',
'bak_export_json' => 'Exporter les données du blog au format JSON',
'bak_export_netscape' => 'Exporter les liens au format HTML/Marque-pages Netscape',
'bak_export_zip' => 'Exporter la base de données et des fichiers dans une archive zip',
'bak_export_opml' => 'Exporter la liste des flux RSS au format OPML',
'bak_incl_sqlit' => 'Inclure la base SQLite',
'bak_incl_confi' => 'Inclure les fichier de config',
'bak_incl_files' => 'Inclure les images et les fichiers',
'bak_incl_theme' => 'Inclure les fichiers de themes',
'bak_opti_miniature' => 'Recréer les miniatures des images',
'bak_opti_vacuum' => 'Reconstruire la base de donnée',
'bak_opti_recountcomm' => 'Reconstruire l’association articles/commentaires',
'bak_opti_supprreadrss' => 'Supprimer les entrées RSS lues',
'bak_dl_fichier' => 'Télécharger le fichier.',
// page RSS
'rss_label_all_feeds' => 'Tous les flux',
'rss_label_favs_feeds' => 'Favoris',
'rss_label_refresh' => 'Recharger',
'rss_label_markasread' => 'Marquer comme lu',
'rss_label_unfoldall' => 'Tout déplier',
'rss_label_addfeed' => 'Ajouter un flux',
'rss_label_clean' => 'Nettoyer',
'rss_label_unread' => 'Non lus',
'rss_label_titre_flux' => 'Titre du flux :',
'rss_label_url_flux' => 'Url du flux :',
'rss_label_dossier' => 'Dossier (optionnel)',
'rss_label_config' => 'Éditer la liste des flux',
'rss_nothing_here_note' => 'Rien ici ? Importez un fichier OPML en cliquant ici : ',
'rss_jsalert_new_link' => 'Url complète du flux RSS/Atom :',
'rss_jsalert_new_link_folder' => 'Dossier du flux (ou laisser vide) :',
'rss_raccourcis_clavier' => 'Ctrl+Haut = lire l’élément précédent, Ctrl+Bas = lire l’élément suivant.',
'rss_nouveau_flux' => 'nouveaux élements.',

// vérifier les mises à jours
'maint_chk_update' => 'Mises à jour',
'maint_update_youisgood' => 'BlogoText est à jour',
'maint_update_youisbad' => 'Une nouvelle version de BlogoText est disponible :',
'maint_update_go_dl_it' => 'Vous pouvez la télécharger à l’adresse :',

'succes' => 'Succès',
'echec' => 'Échec',
'previous_page' => 'Page précédente',
'next_page' => 'Page suivante',

// Chiffres 0 à 9 pour captcha
'0' => 'zéro',
'1' => 'un',
'2' => 'deux',
'3' => 'trois',
'4' => 'quatre',
'5' => 'cinq',
'6' => 'six',
'7' => 'sept',
'8' => 'huit',
'9' => 'neuf',

'derniere_connexion_le' => 'Dernière connexion depuis',
'cet_ordi' => 'cet ordinateur',
);
