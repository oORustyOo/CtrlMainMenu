<?php

namespace srag\RemovePluginDataConfirm\CtrlMainMenu;

/**
 * Trait PluginUninstallTrait
 *
 * @package srag\RemovePluginDataConfirm\CtrlMainMenu
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait PluginUninstallTrait {

	use AbstractPluginUninstallTrait;


	/**
	 * @return bool
	 * @throws RemovePluginDataConfirmException
	 *
	 * @access namespace
	 */
	protected final function beforeUninstall()/*: bool*/ {
		return $this->pluginUninstall();
	}


	/**
	 * @access namespace
	 */
	protected final function afterUninstall()/*: void*/ {

	}
}
