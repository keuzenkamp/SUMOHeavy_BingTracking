<?php
/**
 * SUMOHeavy_BingTracking
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@sumoheavy.com so we can send you a copy immediately.
 *
 * @category   SUMOHeavy
 * @package    SUMOHeavy_BingTracking
 * @copyright  Copyright 2013 SUMO Heavy Industries, LLC
 * @license    http://opensource.org/licenses/osl-3.0.php
 * @author     Sean Kennedy <support@sumoheavy.com>
 */
class SUMOHeavy_BingTracking_Model_Observer
    extends Mage_Core_Model_Abstract
{
    public function customerSaveAfter($observer)
    {
        Mage::getSingleton('core/session')->setNewRegistrationBing(true);
        return $this;
    }
}
