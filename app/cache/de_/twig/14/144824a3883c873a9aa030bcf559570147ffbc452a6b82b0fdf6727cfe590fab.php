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
        $__internal_5b1d5d56a8d0abb15e46ef7509f5c55f78732874348c320fd2516a0919e6775e = $this->env->getExtension("native_profiler");
        $__internal_5b1d5d56a8d0abb15e46ef7509f5c55f78732874348c320fd2516a0919e6775e->enter($__internal_5b1d5d56a8d0abb15e46ef7509f5c55f78732874348c320fd2516a0919e6775e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b1d5d56a8d0abb15e46ef7509f5c55f78732874348c320fd2516a0919e6775e->leave($__internal_5b1d5d56a8d0abb15e46ef7509f5c55f78732874348c320fd2516a0919e6775e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_118cf8bb94f9439df4bfe2fb0e8fcdbd0da300fd072d058785014affec9b386a = $this->env->getExtension("native_profiler");
        $__internal_118cf8bb94f9439df4bfe2fb0e8fcdbd0da300fd072d058785014affec9b386a->enter($__internal_118cf8bb94f9439df4bfe2fb0e8fcdbd0da300fd072d058785014affec9b386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_118cf8bb94f9439df4bfe2fb0e8fcdbd0da300fd072d058785014affec9b386a->leave($__internal_118cf8bb94f9439df4bfe2fb0e8fcdbd0da300fd072d058785014affec9b386a_prof);

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
