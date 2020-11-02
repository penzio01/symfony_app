<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController {

    /** 
     *  @Route("hello/{param}", requirements={"param"="\d+"})
     */
    // function helloNumber($param) {
    //     return new Response('Hello : number ' . $param);
    // }
    /** 
     *  @Route("hello/{param}")
     */
    // function helloDefault($param) {
    //     return new Response('Hello !' . $param);
    // }

    // // function hello() {
    // //     $title = "utilisateurs";
    // //     $users = ["Mickey", "Leo", "Donnie", "Raph"];
    // //     return $this->render('hello.html.twig', ['title' => $title, 'array' => $users]);
    // // }

    /** 
     *  @Route("hello")
     */
    // function hello(Request $request) {
    //     $params = $request->query->all();
    //     var_dump($params);die;
    //     $string = "Les paramètres sont : </br>";
    //     foreach($params as $key => $value) {
    //         $string = $string.'-'.$key.':'.$value.'</br>';
    //         return new Response($string);
    //     }
    // }

    /**
     *  @Route("hello")
     */
    function hello() {
        return $this->render('hello.html.twig');
    }

    /**
     * @Route("hello/{name}")
     */
    function helloWithName($name) {
        return new Response('Hello'.$name);
    }
}