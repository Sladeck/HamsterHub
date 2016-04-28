<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b6cab2a19ec9f477def4a4238caba94a275dd1086293046ac3507f3c7316f8f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_036f44cffc1cc0774a7b7d8a397e97fe3fa33b3b6fdbceecae10e7ed46213fca = $this->env->getExtension("native_profiler");
        $__internal_036f44cffc1cc0774a7b7d8a397e97fe3fa33b3b6fdbceecae10e7ed46213fca->enter($__internal_036f44cffc1cc0774a7b7d8a397e97fe3fa33b3b6fdbceecae10e7ed46213fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036f44cffc1cc0774a7b7d8a397e97fe3fa33b3b6fdbceecae10e7ed46213fca->leave($__internal_036f44cffc1cc0774a7b7d8a397e97fe3fa33b3b6fdbceecae10e7ed46213fca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_669320e425a98d936c8523035dd587719d4316d1a8bc669872815c22ed0e4356 = $this->env->getExtension("native_profiler");
        $__internal_669320e425a98d936c8523035dd587719d4316d1a8bc669872815c22ed0e4356->enter($__internal_669320e425a98d936c8523035dd587719d4316d1a8bc669872815c22ed0e4356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_669320e425a98d936c8523035dd587719d4316d1a8bc669872815c22ed0e4356->leave($__internal_669320e425a98d936c8523035dd587719d4316d1a8bc669872815c22ed0e4356_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
