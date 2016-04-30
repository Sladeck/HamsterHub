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
        $__internal_26bc1302ca7ab2f0acf35e85d5a7197c5393c16b0e8288c02a701082207e99e9 = $this->env->getExtension("native_profiler");
        $__internal_26bc1302ca7ab2f0acf35e85d5a7197c5393c16b0e8288c02a701082207e99e9->enter($__internal_26bc1302ca7ab2f0acf35e85d5a7197c5393c16b0e8288c02a701082207e99e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26bc1302ca7ab2f0acf35e85d5a7197c5393c16b0e8288c02a701082207e99e9->leave($__internal_26bc1302ca7ab2f0acf35e85d5a7197c5393c16b0e8288c02a701082207e99e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10bfd8565442c6ae395835a1c9023f0017763fc3f7197d47e4f4dd51c39ff75d = $this->env->getExtension("native_profiler");
        $__internal_10bfd8565442c6ae395835a1c9023f0017763fc3f7197d47e4f4dd51c39ff75d->enter($__internal_10bfd8565442c6ae395835a1c9023f0017763fc3f7197d47e4f4dd51c39ff75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_10bfd8565442c6ae395835a1c9023f0017763fc3f7197d47e4f4dd51c39ff75d->leave($__internal_10bfd8565442c6ae395835a1c9023f0017763fc3f7197d47e4f4dd51c39ff75d_prof);

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
