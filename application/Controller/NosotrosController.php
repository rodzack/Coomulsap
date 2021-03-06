<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

class NosotrosController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/nosotros/index.php';
        require APP . 'view/_templates/footer.php';
    }   
    
    public function historia()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/nosotros/historia.php';
        require APP . 'view/_templates/footer.php';
    }  

    public function nuestros_valores()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/nosotros/nuestros_valores.php';
        require APP . 'view/_templates/footer.php';
    } 

    public function responsabilidad_social()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/nosotros/responsabilidad_social.php';
        require APP . 'view/_templates/footer.php';
    } 
}
