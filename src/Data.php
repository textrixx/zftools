<?php
/**
* Copyright 2018 Marco Mertens, textrixx - netzloesungen & kommunikation
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0

* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
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
