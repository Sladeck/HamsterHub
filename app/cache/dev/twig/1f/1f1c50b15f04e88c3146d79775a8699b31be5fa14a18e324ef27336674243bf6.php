<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c5729bdfbedfc3c537e71a2d2b435826b76676e1d26beef7ba259e2fd74bfaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1918eef59e439543b708dc7f90e5df16b4ab23795aebacee343ec07ee21082a5 = $this->env->getExtension("native_profiler");
        $__internal_1918eef59e439543b708dc7f90e5df16b4ab23795aebacee343ec07ee21082a5->enter($__internal_1918eef59e439543b708dc7f90e5df16b4ab23795aebacee343ec07ee21082a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1918eef59e439543b708dc7f90e5df16b4ab23795aebacee343ec07ee21082a5->leave($__internal_1918eef59e439543b708dc7f90e5df16b4ab23795aebacee343ec07ee21082a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24bf045e60e8c4f10240d6c0a2308969ef55c533478853e4931bd27ba0cf7fa3 = $this->env->getExtension("native_profiler");
        $__internal_24bf045e60e8c4f10240d6c0a2308969ef55c533478853e4931bd27ba0cf7fa3->enter($__internal_24bf045e60e8c4f10240d6c0a2308969ef55c533478853e4931bd27ba0cf7fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_24bf045e60e8c4f10240d6c0a2308969ef55c533478853e4931bd27ba0cf7fa3->leave($__internal_24bf045e60e8c4f10240d6c0a2308969ef55c533478853e4931bd27ba0cf7fa3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
