<?php
	// menu registratie
	register_nav_menu( "hoofdmenu", "Het hoofdmenu" );
	
	// sidebar registratie
	register_sidebar( array(
		'name' => 'Hoofd Sidebar',
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
?>