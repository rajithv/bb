<?php

namespace Zhvillues\DatabaseTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function aboutAction()
    {
        return $this->render("ZhvilluesDatabaseTestBundle:Page:about.html.twig");
    }

    public function jokeAction()
    {
        return $this->render("ZhvilluesDatabaseTestBundle:Page:joke.html.twig");
    }

}
