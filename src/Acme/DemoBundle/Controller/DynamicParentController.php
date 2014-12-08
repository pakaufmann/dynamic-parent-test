<?php
/**
 * Created by PhpStorm.
 * User: edge5
 * Date: 08/12/14
 * Time: 15:49
 */

namespace Acme\DemoBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DynamicParentController extends Controller
{
    /**
     * @Route("/dynamic", name="_dynamicParent")
     * @Template()
     */
    public function indexAction()
    {
        $first = $this->get('templating')->render('AcmeDemoBundle:Parent:dynamic.html.twig', array(
            'number' => 'first'
        ));

        print_r($first);

        $second = $this->get('templating')->render('AcmeDemoBundle:Parent:dynamic.html.twig', array(
            'number' => 'second'
        ));

        print_r($second);

        return array();
    }
}