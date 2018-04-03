<?php
/**
 * Textrixx Data
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * https://www.textrixx.com/license/mit.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@textrixx.com so we can send you a copy immediately.
 * 
 * @category	Zftools
 * @package		helper
 * @author		Marco Mertens
 * @copyright	Copyright (c) 2018 textrixx - netzloesungen & kommunikation
 * @license		http://www.margott.de/license/mit.txt MIT License
 * @version		1.0.0
 * 
 */
namespace Textrixx\Zftools;

use Zftools\Zftools;

class Data extends Zftools{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Get properties of given class
	 * 
	 * @param object $class Class for which properties should be determined
	 * @param constant $scope Scope for which to return properties
	 */
	public function getClassProperties($class,$scope = ReflectionProperty::IS_PUBLIC){
		$properties = array();
		$refl = new ReflectionObject($class);
		$prop = $refl->getProperties($scope);
		if(is_object($prop)){
			foreach($prop as $p){
				$properties[] = $prop->name;
			}
		}
		return $properties;
	}
	
	public static function getInstance()
	{
	    if(!isset(self::$instance) || !(self::$instance instanceof self)){
			$c = __CLASS__;
			self::$instance = new $c($fetchMode);
		}
		return self::$instance;
	}
}
