<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 13/05/2018
 * Time: 23:49
 */

class Recaptcha
{
	private $secret;

	function __construct($secret)
	{
		$this->secret=$secret;
	}

	function IsValid($code)
	{


	}

}