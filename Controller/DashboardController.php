<?php

/**
 * This file is part of the "NFQ Bundles" package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nfq\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DashboardController
 * @package Nfq\AdminBundle\Controller
 */
class DashboardController extends Controller
{
    /**
     * @Template()
     * @param Request $request
     * @return array
     */
    public function indexAction(Request $request)
    {
        return [];
    }
}
