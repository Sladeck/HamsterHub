<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c8ab36ec038cb0bdb1ccc02bb4f0885936034d9c0b00166bbdf24a158143a078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a2ffc08ad161769e8d1da5714d2c2a6907992ff0755c4c2d63ea1b8a4008b9 = $this->env->getExtension("native_profiler");
        $__internal_09a2ffc08ad161769e8d1da5714d2c2a6907992ff0755c4c2d63ea1b8a4008b9->enter($__internal_09a2ffc08ad161769e8d1da5714d2c2a6907992ff0755c4c2d63ea1b8a4008b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a2ffc08ad161769e8d1da5714d2c2a6907992ff0755c4c2d63ea1b8a4008b9->leave($__internal_09a2ffc08ad161769e8d1da5714d2c2a6907992ff0755c4c2d63ea1b8a4008b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0cd7b61de3dbfe2390e1ad2fca00f4302bedfa3e0c1fb487d18d6125297158f = $this->env->getExtension("native_profiler");
        $__internal_e0cd7b61de3dbfe2390e1ad2fca00f4302bedfa3e0c1fb487d18d6125297158f->enter($__internal_e0cd7b61de3dbfe2390e1ad2fca00f4302bedfa3e0c1fb487d18d6125297158f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e0cd7b61de3dbfe2390e1ad2fca00f4302bedfa3e0c1fb487d18d6125297158f->leave($__internal_e0cd7b61de3dbfe2390e1ad2fca00f4302bedfa3e0c1fb487d18d6125297158f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */