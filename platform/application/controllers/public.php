<?php
/**
 * Part of the Platform application.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Platform
 * @version    1.0.1
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2012, Cartalyst LLC
 * @link       http://cartalyst.com
 */

class Public_Controller extends Base_Controller
{

	/**
	 * This function is called before the action is executed.
	 *
	 * @return  void
	 */
	public function before()
	{
		Theme::active('frontend'.DS.Platform::get('themes.theme.frontend'));
		Theme::fallback('frontend'.DS.'default');
	}

}
