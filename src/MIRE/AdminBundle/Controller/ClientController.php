<?php
/**
 * Created by PhpStorm.
 * User: ando
 * Date: 11/07/2016
 * Time: 01:47
 */

namespace MIRE\AdminBundle\Controller;

use MIRE\AdminBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function indexAction()
    {
        return $this->render('MIREAdminBundle:Client:index.html.twig');
    }
    public function addAction()
    {
        return $this->render('MIREAdminBundle:Client:add.html.twig');
    }
    public function updateAction($id)
    {
        return $this->render('MIREAdminBundle:Client:update.html.twig', array('id' => $id ));
    }
    public function deleteAction($id)
    {
        return $this->render('MIREAdminBundle:Client:delete.html.twig', array('id' => $id ));
    }


}