<?php
# *** LICENSE ***
# This file is part of BlogoText.
# https://github.com/BlogoText/blogotext/
#
# 2006      Frederic Nassar.
# 2010-2016 Timo Van Neerden.
# 2016-.... Mickaël Schoentgen and the community.
#
# BlogoText is free software.
# You can redistribute it under the terms of the MIT / X11 Licence.
# *** LICENSE ***

$GLOBALS['lang'] = array(
'id' => 'en',
// Install
'install' => 'Installation',
'install_id' => 'Choose an username: ',
'install_mdp' => 'Choose a password: ',
'install_remdp' => 'Confirm your password: ',
'install_choose_sgdb' => 'Choose your DBMS: ',
'install_sqlite_no_more_todo' => 'No additionnal configuration is needed for SQLite.',
'install_err_mysql_usr_empty' => 'The MySQL Username is empty.',
'install_err_mysql_pss_empty' => 'The MySQL Password is empty.',
'install_err_mysql_hst_empty' => 'The MySQL Hostname is empty.',
'install_err_mysql_dba_empty' => 'The MySQL DB-name is empty',
'install_err_mysql_connect' => 'BlogoText is unable to connect to MySQL with those informations.',
'install_datas' => 'Add default data (article, links, comment ...)',
'first_titre' => 'My first Blogpost',
'first_edit' => 'Edit me',
// Navigation
'le' => 'the',
'remarque' => 'Notice',
'preferences' => 'Settings',
'connexion' => 'Connection',
'enregistrer' => 'Save',
'valider' => 'Submit',
'annuler' => 'Cancel',
'envoyer' => 'Send',
'preview' => 'Preview',
'editer' => 'Edit',
'activer' => 'Activate',
'desactiver' => 'Deactivate',
'mesarticles' => 'My articles',
'mesmodules' => 'My addons',
'mesliens' => 'My links',
'mesabonnements' => 'My subscriptions',
'nouveau' => 'New article',
'supprimer' => 'Delete',
'voir' => 'See',
'partager' => 'Share',
'telecharger' => 'Download',
'infos' => 'Infos',
'deconnexion' => 'Logout',
'rechercher' => 'Search',
'filtrer' => 'Filter',
'oui' => 'Yes',
'non' => 'No',
'ouverts' => 'Open',
'fermes' => 'Closed',
'repondre' => 'answer',
'depuis' => 'since',
'sur' => 'on',
'patientez' => 'wait',
'secondes' => 'seconds',
'du' => 'on',
'et' => 'and',
'ou' => 'or',
'par' => 'by',
'ajoute' => 'addded',
'trouve' => 'found',
'voir_sur_le_blog' => 'See online',
'byte_symbol' => 'B',
'using' => 'with',
'rendered' => 'generated in',
'recherche' => 'Search result for',
// Boutons formatage commentaires
'bouton-gras' => 'Bold',
'bouton-ital' => 'Italic',
'bouton-soul' => 'Underline',
'bouton-barr' => 'Line-through',
'bouton-lien' => 'Insert a link',
'bouton-cita' => 'Insert a quote',
'bouton-imag' => 'Insert an image',
'bouton-code' => 'Insert formated code',
'bouton-left' => 'Left aligned',
'bouton-center' => 'Centred',
'bouton-right' => 'Right aligned',
'bouton-justify' => 'Justify',
'bouton-liul' => 'Insert a list',
'bouton-liol' => 'Insert a ordered list',
// Modes
'ecrire' => 'Edit: ',
'apercu' => 'Preview',
// Labels
'label_date' => 'Date',
'label_time' => 'Hour',
'label_titre' => 'Title',
'label_chapo' => 'Head',
'label_contenu' => 'Content',
'label_description' => 'Description',
'label_motscles' => 'Keywords',
'label_publie' => 'Published',
'label_publies' => 'Published',
'label_invisible' => 'Invisible',
'label_invisibles' => 'Invisible',
'label_all' => 'All',
'label_enabled' => 'Enabled',
'label_disabled' => 'Disabled',
'label_allowcomment' => 'Comments',
'label_image_ajout' => 'Add an image',
'label_lien_ajout' => 'Add a link',
'label_fichier_ajout' => 'Add a file',
'label_votre_image' => 'Your image',
'label_feed_ajout' => 'Add a feed',
'label_feed_new' => 'New feed',
'label_feed_yours' => 'Your feeds',
'label_votre_fichier' => 'Your file',
'label_article_derniers' => 'Last articles',
'label_comment_derniers' => 'Last comments',
'label_link_derniers' => 'Last links',
'label_image_derniers' => 'Last images',
'label_fichier_derniers' => 'Last files',
'label_afficher' => 'Show',
'label_ok' => 'Ok',
'label_quote' => 'quote',
'label_code' => 'code',
'label_article' => 'article',
'label_articles' => 'articles',
'label_commentaire' => 'comment',
'label_commentaires' => 'comments',
'label_link' => 'link',
'label_links' => 'links',
'label_element' => 'element',
'label_elements' => 'elements',
'label_image' => 'image',
'label_images' => 'images',
'label_feeds' => 'feeds',
'label_feed_entry' => 'feed entry',
'label_feed_entrys' => 'feed entries',
'label_import-export' => 'Import/Export',
'label_fichier' => 'file',
'label_fichiers' => 'files',
'label_module' => 'addon',
'label_modules' => 'addons',
'label_note' => 'note',
'label_nouv_note' => 'New note',
'label_categories' => 'Tags',
'label_nouv_lien' => 'New link <span style="font-weight:normal;">(or leave empty for a note)</span>',
'label_edit_lien' => 'Edit link',
'label_lien_priv' => 'Link is private?',
'label_img_priv' => 'Image is private?',
'label_file_priv' => 'File is private?',
'label_comm_priv' => 'Comment is hidden?',
'label_stay_logged' => 'Stay connected?',
'label_resume' => 'Home',
'label_type' => 'Type',
'label_extension' => 'Extension',
'label_taille_fichier' => 'Size',
'label_precedent' => 'Newer entries',
'label_suivant' => 'Older entries',
'label_dl_fichier' => 'Also import file localy? ',
'label_combien' => 'How much?',
'label_all_comm_by_author' => 'All comments by this author',
'label_owner_url' => 'Author’s website',
'label_code_theme' => 'Themes integration code',
'label_no_code_theme' => 'This addon doesn’t use any integration code',
// Label avec ": "
'label_dp_lien' => 'Link: ',
'label_dp_fichier' => 'File: ',
'label_dp_url' => 'Url: ',
'label_dp_titre' => 'Title: ',
'label_dp_description' => 'Description: ',
'label_dp_nom' => 'Name: ',
'label_dp_type' => 'Type (extension): ',
'label_dp_dossier' => 'Directory: ',
'label_dp_tags' => 'Tags: ',
'label_dp_date' => 'Date: ',
'label_dp_dimensions' => 'Dimentions: ',
'label_dp_visibilite' => 'Visibility: ',
'label_dp_etat' => 'State: ',
'label_dp_commentaires' => 'Comments: ',
'label_dp_poids' => 'Filesize: ',
'label_dp_checksum' => 'SHA-1: ',
'label_dp_pseudo' => 'Pseudo: ',
'label_dp_webpage' => 'Website (optionnal): ',
'label_dp_captcha' => 'Sum of: ',
'label_dp_email' => 'E-mail (optionnal): ',
'label_dp_email_required' => 'E-mail: ',
'label_dp_identifiant' => 'Username: ',
'label_dp_motdepasse' => 'Password: ',
// Commentaire
'aucun' => 'no',
'comment_ajout' => 'Write a comment',
'comment_cookie' => 'Use a cookie to remember these informations? ',
'comment_subscribe' => 'Receive new message notifications by email? ',
'comment_not_allowed' => 'Comments are closed for this entry.',
'no_comments' => 'There are no comments for the moment.',
'comment_is_visible' => 'The comment is visible',
'comment_is_invisible' => 'The comment is hidden',
'comment_need_validation' => 'Your comment will be visible after approbation by the webmaster.',
// links
'link_is_public' => 'Link is public',
'link_is_private' => 'Link is private',
// Titles - liens
'post_link' => 'See online',
'post_share' => 'Share',
'blog_link' => 'See the blog',
'go_to_pref' => 'Go to the settings to change the description.',
// Mois
'janvier' => 'January',
'fevrier' => 'February',
'mars' => 'March',
'avril' => 'April',
'mai' => 'May',
'juin' => 'June',
'juillet' => 'July',
'aout' => 'August',
'septembre' => 'September',
'octobre' => 'October',
'novembre' => 'November',
'decembre' => 'December',
'janv.' => 'Jan.',
'fev.' => 'Feb.',
'mars.' => 'Mar.',
'avr.' => 'Apr.',
'mai.' => 'May.',
'juin.' => 'Jun.',
'juil.' => 'Jul.',
'aout.' => 'Aug.',
'sept.' => 'Sept.',
'oct.' => 'Oct.',
'nov.' => 'Nov.',
'dec.' => 'Dec.',
// Jours
'lu' => 'Mo',
'ma' => 'Tu',
'me' => 'We',
'je' => 'Th',
've' => 'Fr',
'sa' => 'Sa',
'di' => 'Su',
// Jours
'lundi' => 'Monday',
'mardi' => 'Tuesday',
'mercredi' => 'Wednesday',
'jeudi' => 'Thursday',
'vendredi' => 'Friday',
'samedi' => 'Saturday',
'dimanche' => 'Sunday',
'aujourdhui' => 'Today',
'hier' => 'Yesterday',
// Erreurs
'erreurs' => 'Error(s)',
'err_titre' => 'The title is empty',
'err_contenu' => 'There is no content',
'err_annee' => 'The year is incorrect',
'err_mois' => 'The month is incorrect',
'err_jour' => 'The day is incorrect',
'err_heure' => 'The hours are incorrect',
'err_minutes' => 'The minutes are incorrect',
'err_secondes' => 'The seconds are incorrect',
'err_file_write' => 'Unable to create the file',
'err_theme_introuvable' => 'The theme file is unreadable, non-existent or broken.',
'err_prefs_write' => 'Unable to write in the settings file',
'err_prefs_auteur' => 'The author’s name is empty',
'err_prefs_email' => 'The email is incorrect',
'err_prefs_identifiant' => 'The username is empty',
'err_prefs_id_mdp' => 'To change username, you have to type your password',
'err_prefs_id_syntaxe' => 'The new username can’t contain any \', ", \\, | or = characters.',
'err_prefs_oldmdp' => 'The old password is wrong',
'err_prefs_mdp_diff' => 'The two passwords do not match',
'err_prefs_mdp' => 'The password must be longer than 6 caracters',
'err_prefs_mdp_weak' => 'The password is weak, ok?',
'err_prefs_newmdp' => 'To change password, you have to type your old password',
'err_prefs_nbmax' => 'The amount of articles is wrong',
'err_prefs_racine' => 'You have to give an URL for the blog',
'err_prefs_racine_http' => 'URL has to begin with "http://" or "https://"',
'err_prefs_racine_slash' => 'URL must end with "/"',
'err_comm_auteur' => 'The author’s name is empty',
'err_comm_email' => 'The email is not correct',
'err_comm_contenu' => 'The comment is empty',
'err_comm_captcha' => 'The sum is wrong (use numbers)',
'err_comm_webpage' => 'The URL is wrong',
'err_comm_article_id' => 'The article’s ID is wrong',
'err_lien_vide' => 'The URL is empty',
'err_wrong_token' => 'The security coin is wrong.',
'err_wrong_id' => 'The ID is wrong.',
'err_feed_exists' => 'The feed alredy exists.',
'err_feed_wrong_param' => 'Wrong request.',
'err_addon_name' => 'Invalid addon name.',
'err_addon_status' => 'No addon status given.',
'err_addon_enabled' => 'Could not enable the addon "%s", please check the access rights of the "'.DIR_ADDONS.'" folder and its children.',
'err_addon_disabled' => 'Could not disable the addon "%s", please check the access rights of the "'.DIR_ADDONS.'" folder and its children.',
// Questions
'question_suppr_article' => 'This article and its comments will be deleted!',
'question_suppr_image' => 'This image will be deleted!',
'question_suppr_comment' => 'This comment will be deleted!',
'question_suppr_fichier' => 'This file will be deleted!',
'question_quit_page' => 'Your modifications have not been saved. Leaving this page will have your modifications lost. Ok?',
'question_clean_rss' => 'All the read items will be removed from database, OK?',
// Confirmations
'confirm_article_suppr' => 'The article has been deleted',
'confirm_article_ajout' => 'The article has been saved',
'confirm_article_maj' => 'The article has been updated',
'confirm_fichier_ajout' => 'The file has been added',
'confirm_fichier_suppr' => 'The file has been removed',
'confirm_fichier_edit' => 'The file’s infos have been edited',
'confirm_prefs_maj' => 'The settings have been saved',
'confirm_comment_ajout' => 'The comment has been added',
'confirm_comment_suppr' => 'The comment has been deleted',
'confirm_comment_edit' => 'The comment has been edited',
'confirm_comment_valid' => 'The comment status has been edited',
'confirm_link_ajout' => 'The link has been added',
'confirm_link_suppr' => 'The link has been removed',
'confirm_link_edit' => 'The link has been updated',
'confirm_feed_update' => 'The feeds have been updated',
'confirm_feeds_edit' => 'The feeds have been edited.',
'confirm_feed_ajout' => 'The feed has been added.',
'confirm_feed_clean' => 'All the old feeds have been removed.',
// No-confirmation
'error_image_add' => 'The file couldn’t be added',
'error_phpajax' => 'Some PHP/Ajax Error happened:',
'error_comment_suppr' => 'The comment has not been deleted since an error happened.',
'error_comment_valid' => 'The status has not been changed since an error happened.',
// Redirections
'retour_liste' => '« Articles list',
// Titres des pages
'bienvenue' => 'Welcome',
'titre_identification' => 'Identification',
'titre_articles' => 'Your articles',
'titre_ecrire' => 'Write a new article',
'titre_maj' => 'Update an article',
'titre_commentaires' => 'Comments',
'titre_preferences' => 'Seetings',
'titre_fichier' => 'Files',
'titre_maintenance' => 'Maintenance',
// module / addons
'addons_buttons_action_legend' => 'Actions for: ',
'addons_settings_legend' => 'Addon settings for: ',
'addons_settings_link_title' => 'Settings',
'addons_settings_confirm_reset' => 'Do you really want to delete your settings ?',
'addons_confirm_buttons_action' => 'This action can take some time, please, do not refresh or close your window before the end of the reload.',
'addons_clean_cache_label' => 'Clean the cache for this addon ?',
'addons_click_more' => 'Click for more infos',
'addons_insert_code' => 'Insert this code in your template: ',
// Preferences
'prefs_legend_utilisateur' => 'User',
'prefs_legend_apparence' => 'Appearance',
'prefs_legend_securite' => 'Security',
'prefs_legend_langdateheure' => 'Language, date &amp; time',
'prefs_legend_configblog' => 'Blog &amp; comments',
'prefs_legend_configlinx' => 'Links',
'prefs_legend_configrss' => 'RSS Feeds',
'prefs_legend_image' => 'Send an image',
'pref_auteur' => 'Author: ',
'pref_email' => 'E-mail address: ',
'pref_identifiant' => 'Login: ',
'pref_mdp' => 'Current password: ',
'pref_mdp_nouv' => 'New password: ',
'pref_langue' => 'Language: ',
'pref_nom_site' => 'Site’s name: ',
'pref_keywords' => 'Keywords: ',
'pref_format_date' => 'Date format: ',
'pref_format_heure' => 'Time format: ',
'pref_racine' => 'Blog’s URL: ',
'pref_nb_maxi' => 'Amount of articles on homepage: ',
'pref_nb_list' => 'Amount of articles on admin list: ',
'pref_nb_list_com' => 'Amount of comments on admin list: ',
'pref_nb_list_linx' => 'Amount of links on admin list: ',
'pref_fuseau_horaire' => 'Timezone: ',
'pref_comm_BoW_list' => 'Comments are visible: ',
'pref_comm_white_list' => 'Only after you approved them.',
'pref_comm_black_list' => 'As soon as they are submited.',
'pref_automatic_keywords' => 'Let BlogoText select keywords: ',
'pref_force_email' => 'Email is required to comment: ',
'pref_alert_author' => 'Send mail to author when someone write a new comment: ',
'pref_theme' => 'Theme: ',
'pref_afficher_rss' => 'Show RSS tabs:',
'pref_afficher_liens' => 'Show links tab:',
'pref_categories' => 'Use tags for articles: ',
'pref_commentaires' => 'Use comments: ',
'pref_allow_global_coms' => 'Close comments on every article: ',
'pref_all' => 'All',
'pref_go_to_maintenance' => 'Go to the maintenance page: ',
'pref_rss_go_to_imp-export' => 'Access OPML import/export utility: ',
'pref_label_bookmark_lien' => 'Links sharing bookmarklet: ',
'pref_label_crontab_rss' => '"Crontab" command for auto updates: ',
'pref_alert_crontab_rss' => 'Add this command to your crontab:',
'pref_linx_dl_auto' => 'Automaticaly import shared files?',
'pref_ask_everytime' => 'Ask each time',
'pref_check_update' => 'Check updates automatically',
'maintenance_optim' => 'Cleanup database',
// Notes
'note_no_article' => 'No articles',
'note_no_module' => 'No modules',
'note_no_commentaire' => 'No comments',
'note_comment_closed' => 'Comments are closed',
'note_no_link' => 'No links',
'note_no_image' => 'No images',
'note_no_fichier' => 'No files',
'note_no_feed' => 'No RSS feed',
'note_no_feed_entry' => 'No RSS entry',
// placeholders
'placeholder_search' => 'Search',
'placeholder_nom_fichier' => 'name',
'placeholder_description' => 'description',
'placeholder_titre' => 'title',
'placeholder_chapo' => 'abstract',
'placeholder_notes' => 'notes',
'placeholder_contenu' => 'content',
'placeholder_motscle' => 'keywords',
'placeholder_folder' => 'folder',
'placeholder_tags' => 'tags',

//Formulaire Images
'label_jusqua' => 'Up to',
'label_parfichier' => ' per file',
'label_codes' => 'Integration codes:',
'img_upload' => 'Sens',
'img_specifier_url' => 'From URL',
'img_upload_un_fichier' => 'Upload a file',
'img_drop_files_here' => 'Drop files here',
// page backup
'bak_succes_save' => 'Backup succeded',
'maintenance_ask_do_what' => 'What do you want to do?',
'maintenance_export' => 'Export',
'maintenance_incl_quoi' => 'What do you want in your backup?',
'maintenance_import' => 'Import',
'bak_chooseaction' => 'What do you want to do?',
'bak_choosefile' => 'Choose a file',
'bak_restor_done' => 'Restoration done',
'bak_optim_done' => 'Cleaning done',
'bak_articles_do' => 'Include articles',
'bak_comments_do' => 'Include comments from articles',
'bak_links_do' => 'Include links',
'bak_number_articles' => 'How many articles?',
'bak_combien_images' => 'How many files?',
'bak_combien_linx' => 'How many links?',
'bak_import_btjson' => 'Import a JSON backup from BlogoText',
'bak_import_wordpress' => 'Import an XML backup from WordPress',
'bak_import_netscape' => 'Import links from a Netscape file',
'bak_import_rssopml' => 'Import an OPML RSS feeds list',
'bak_export_json' => 'Export various data in a JSON file',
'bak_export_netscape' => 'Export your links in a HTML bookmark file',
'bak_export_zip' => 'Export your database &amp; other files in a zip-file',
'bak_export_opml' => 'EXPORT your RSS feeds in an OPML file',
'bak_incl_sqlit' => 'Include SQLite file',
'bak_incl_confi' => 'Include configuration files',
'bak_incl_files' => 'Include images and files',
'bak_incl_theme' => 'Include theme files',
'bak_opti_miniature' => 'Recreate image thumbnails',
'bak_opti_vacuum' => 'Rebuilt/Clean up database',
'bak_opti_recountcomm' => 'Rebuilt/Recount articles comments',
'bak_opti_supprreadrss' => 'Remove read RSS items',
'bak_dl_fichier' => 'Download file.',
// page RSS
'rss_label_all_feeds' => 'All feeds',
'rss_label_favs_feeds' => 'Bookmarks',
'rss_label_refresh' => 'Refresh',
'rss_label_markasread' => 'Mark as read',
'rss_label_unfoldall' => 'Unfold all',
'rss_label_addfeed' => 'Add a feed',
'rss_label_clean' => 'Clean',
'rss_label_unread' => 'Unread',
'rss_label_titre_flux' => 'Feed Title:',
'rss_label_url_flux' => 'Feed Link:',
'rss_label_dossier' => 'Folder (optional) :',
'rss_label_config' => 'Edit feed list',
'rss_nothing_here_note' => 'Nothing here? Import an OPML file here: ',
'rss_jsalert_new_link' => 'RSS/Atom complete link:',
'rss_jsalert_new_link_folder' => 'Put feed in folder (or leave empty):',
'rss_raccourcis_clavier' => 'Ctrl+Up = Read previous entry, Ctrl+Down = Read next entry.',
'rss_nouveau_flux' => 'new entries.',

// vérifier les mises à jours
'maint_chk_update' => 'Updates',
'maint_update_youisgood' => 'BlogoText is up to date',
'maint_update_youisbad' => 'A new version of BlogoText is available:',
'maint_update_go_dl_it' => 'You can download it at:',

'succes' => 'Success',
'echec' => 'Fail',
'previous_page' => 'Previous page',
'next_page' => 'Next page',

// Chiffres 0 à 9 pour captcha
'0' => 'zero',
'1' => 'one',
'2' => 'two',
'3' => 'three',
'4' => 'four',
'5' => 'five',
'6' => 'six',
'7' => 'seven',
'8' => 'eight',
'9' => 'nine',

'derniere_connexion_le' => 'Last connection from',
'cet_ordi' => 'this computer',

// Grab menu
'grab_menu_open' => 'Open the menu',
'grab_menu_close' => 'Close the menu',
'apply' => 'Apply',

// Mail Notification 
'mail_subject' => 'New comment on "',
'mail_message1' => 'The author',
'mail_message2' => ' replied to a comment on ',
'mail_message3' => ' from ',
'mail_see' => 'You can see it by following ',
'mail_link' => 'this link',
'mail_unsub' => 'To unsubscribe from the comments on that post, you can follow this link: ',
'mail_unsuball' => 'To unsubscribe from the comments on all the posts, follow this link: ',
'mail_end' => 'Also, do not reply to this email, since it is an automatic generated email.',
'mail_regards' => 'Regards',
);
