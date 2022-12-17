<?php
    # Disable Discussions
    $wgHooks['SkinTemplateNavigation'][] = 'replaceTabs';
    function replaceTabs( $skin, &$links) {  
            unset( $links['namespaces']['talk'] ); // Remove the talk action
            return true;
    }
 

    # Category Sidebar
    $wgCategoryTreeSidebarRoot = 'Category:DisplaySidebar';

    include 'grouprights.php';
?>