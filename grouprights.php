<?php
    # Disable reading by anonymous users
    $wgGroupPermissions['*']['read'] = false;

    # Disable anonymous editing
    $wgGroupPermissions['*']['edit'] = false;

    # Prevent new user registrations except by sysops
    $wgGroupPermissions['*']['createaccount'] = false;
?>