//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * 1.0.0 Upgrade Code
 */
class ips_plugins_setup_upg_10000
{
	/**
	 * Step 1
	 *
	 * @return true
	 */
	public function step1()
	{
		return true;
	}
}
