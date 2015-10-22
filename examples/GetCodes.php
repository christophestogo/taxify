<?php
/**
 * Created by PhpStorm.
 * User: Tony DeStefano
 * Date: 10/22/15
 * Time: 2:13 PM
 */

require_once( 'config.php' );

try
{
	$taxify = new ZayconTaxify\Taxify( API_KEY, FALSE, TRUE );
	$account = new ZayconTaxify\Account( $taxify );
	$code_types = $account->getCodes( 'Item' );
	var_dump( $code_types );
}
catch ( ZayconTaxify\Exception $e )
{
	var_dump( $e );
}