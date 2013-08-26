<?php

/**
 * @Entity("option")
 */
class Option extends Model
{
	/**
	 * @AutoGenerated()
	 * @Column(Type="Int",Key="Primary")
	 */
	public $Id;
	
	/**
	 * @Column(Type="String")
	 */
	public $Name;
	
	/**
	 * @Column(Type="String")
	 */
	public $Value;
	
	public static function get($name)
	{
		$db = Database::factory();
		return $db->Option->single('Name = ?', $name);
	}
	
	public static function set($name, $value)
	{
		$option = self::get($name);
		if($option == null)
			$option = new Option();
		$option->Name = $value;
		$option->save();
	}
}