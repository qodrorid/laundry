<?php
$result = add_role( 
		'pekerja', 
		__('Pekerja' ),
			array(
				'read' => true, // true allows this capability
				)
);


$role =& get_role('pekerja');
if ( ! empty($role) ) {
    $role->add_cap( 'list_users' );
    $role->add_cap( 'remove_users' );
    $role->add_cap( 'create_users' );
    $role->add_cap( 'edit_users' );

    // Never used, will be removed. create_users or
    // promote_users is the capability you're looking for.
    $role->add_cap( 'add_users' );

    $role->add_cap( 'promote_users' );
    $role->add_cap( 'edit_theme_options' );
    $role->add_cap( 'delete_themes' );
    $role->add_cap( 'export' );
    $role->add_cap( 'edit_plugins' );
    $role->add_cap( 'activate_plugins' );
    $role->add_cap( 'install_plugins' );
}

$result = add_role( 
		'customer', 
		__('Customer' ),
			array(
				'read' => true, // true allows this capability
				)
);

