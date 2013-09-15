<?php

namespace Zhvillues\DatabaseTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Zhvillues\DatabaseTestBundle\Entity\Test;
use Zhvillues\DatabaseTestBundle\Entity\Person;
use Symfony\Component\HttpFoundation\Response;


//buhahahahahaha

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        //return $this->render('ZhvilluesDatabaseTestBundle:Default:index.html.twig', array('name' => $name));
    
        //return $this->createAction($name); 
        
        //return $this->getData($name);
        
        return $this->createPersonAction($name);
    }
    
    public function createAction($name){
        $test = new TestObject();
        $test->setName($name);
        $test->setNumber(1);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($test);
        $em->flush();
        
        //return new Response('Created new test object with id'.$test->getId());
        
        return $this->render('ZhvilluesDatabaseTestBundle:Test:joke.html.twig', array('id' => $test->getId()));
    }
    
    public function createPersonAction($name){
            $person = new Person();
            $person->setName($name);
            $person->setAge(22);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();
            
            return $this->render('ZhvilluesDatabaseTestBundle:Default:index.html.twig', array('id' => $person->getId()));
    }
    
    public function getData($id){
        
        $test = $this->getDoctrine()->getRepository('ZhvilluesDatabaseTestBundle:Test\TestObject')->find($id);
        
        if((!$test)){
            return $this->render('ZhvilluesDatabaseTestBundle:Test:joke2.html.twig', array('name' => 'no where to be found'));
        }
        
        return $this->render('ZhvilluesDatabaseTestBundle:Test:joke2.html.twig', array('name' => $test->getName()));
    }
}
