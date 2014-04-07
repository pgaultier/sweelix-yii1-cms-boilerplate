<?php
/**
 * SiteController.php
 *
 * PHP version 5.4+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   1.0.0
 * @link      http://www.sweelix.net
 * @category  controllers
 * @package   application.controllers
 */

namespace application\controllers;
use sweelix\yii1\ext\db\CriteriaBuilder;
use CController as Controller;

/**
 * This is the basic app controller
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   1.0.0
 * @link      http://www.sweelix.net
 * @category  controllers
 * @package   application.controllers
 * @since     1.0.0
 */
class SiteController extends Controller {

	/**
	 * Default action
	 *
	 * @return void
	 * @since  1.0.0
	 */
	public function actionIndex() {
		$this->render('index');
	}
}
