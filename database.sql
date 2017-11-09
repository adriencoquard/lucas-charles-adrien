--
-- Dumping data for table `cms_configuration`
--

INSERT INTO `cms_configuration` (`id`, `name`, `value`, `date_add`, `date_upd`) VALUES
(1, 'MODULE_SETTINGS_GENERAL_MAINTENANCE', 's:0:"";', '2017-09-07 12:18:13', '2017-09-07 12:21:53');

--
-- Dumping data for table `cms_hook`
--

INSERT INTO `cms_hook` (`id`, `name`, `title`, `description`) VALUES
(1, 'header', 'Header informations', 'Header informations of the HTML pages such as stylesheets or meta'),
(2, 'displayHeader', 'Header page', 'Display the header of the page'),
(3, 'displayContentTop', 'Content Top', 'Display the top content block of the page'),
(4, 'displayContentMain', 'Main Content', 'Display the main content block of the page'),
(5, 'displayContentSidebar', 'Sidebar Content', 'Display the sidebar content block of the page'),
(6, 'displayContentBottom', 'Bottom Content', 'Display the bottom content block of the page'),
(7, 'displayFooter', 'Footer', 'Display the footer block of the page'),
(8, 'javascripts', 'Javascripts', 'Display javascript files and scripts'),
(9, 'displayNavigation', 'Navigation Menu', 'Display the navigation menu block of the page');

--
-- Dumping data for table `cms_hook_module`
--

INSERT INTO `cms_hook_module` (`id`, `id_module`, `id_hook`, `position`) VALUES
(1, 1, 4, 1),
(2, 2, 9, 1),
(4, 4, 3, 1),
(5, 5, 4, 2),
(6, 6, 4, 4),
(7, 7, 4, 3),
(8, 8, 4, 5),
(9, 9, 4, 6),
(13, 13, 4, 7),
(14, 14, 4, 8),
(15, 15, 4, 9),
(16, 16, 4, 10),
(17, 17, 4, 11),
(18, 18, 4, 12),
(19, 19, 4, 13),
(20, 20, 4, 14),
(21, 21, 2, 2),
(22, 22, 2, 1),
(23, 23, 4, 15),
(24, 24, 5, 16),
(25, 25, 7, 17),
(26, 26, 4, 18);

--
-- Dumping data for table `cms_module`
--

INSERT INTO `cms_module` (`id`, `name`, `active`, `version`) VALUES
(1, 'login', 1, '1.0.0'),
(2, 'admin_menu', 1, '1.0.0'),
(4, 'admin_top_bar', 1, '1.0.0'),
(5, 'admin_stats', 1, '1.0.0'),
(6, 'admin_stats_articles', 1, '1.0.0'),
(7, 'admin_stats_users', 1, '1.0.0'),
(8, 'admin_stats_categories', 1, '1.0.0'),
(9, 'admin_modules_manager', 1, '1.0.0'),
(13, 'homepage_recent_work', 1, '1.0.0'),
(14, 'admin_modules_configuration', 1, '1.0.0'),
(15, 'admin_users_manager', 1, '1.0.0'),
(16, 'admin_articles_manager', 1, '1.0.0'),
(17, 'admin_categories_manager', 1, '1.0.0'),
(18, 'admin_settings_general', 1, '1.0.0'),
(19, 'admin_settings_informations', 1, '1.0.0'),
(20, 'admin_settings_templates', 1, '1.0.0'),
(21, 'front_nav_bar', 1, '1.0.0'),
(22, 'front_top_bar', 1, '1.0.0'),
(23, 'front_content', 1, '1.0.0'),
(24, 'front_sidebar', 1, '1.0.0'),
(25, 'front_footer', 1, '1.0.0'),
(26, 'front_article', 1, '1.0.0');

--
-- Dumping data for table `cms_template`
--

INSERT INTO `cms_template` (`id`, `name`, `is_active`) VALUES
(1, 'default', 1);