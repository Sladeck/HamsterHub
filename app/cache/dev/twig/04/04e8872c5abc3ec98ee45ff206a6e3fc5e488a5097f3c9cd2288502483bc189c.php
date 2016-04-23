<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_01b3364a3dc8f027a1200ad366c3216be4361a7a8d83f60fa3da503e20d59c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d03bebb1b777cc6bd3784cdbf26f2ad5f56685fb488a25694df0c58eb0a58570 = $this->env->getExtension("native_profiler");
        $__internal_d03bebb1b777cc6bd3784cdbf26f2ad5f56685fb488a25694df0c58eb0a58570->enter($__internal_d03bebb1b777cc6bd3784cdbf26f2ad5f56685fb488a25694df0c58eb0a58570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03bebb1b777cc6bd3784cdbf26f2ad5f56685fb488a25694df0c58eb0a58570->leave($__internal_d03bebb1b777cc6bd3784cdbf26f2ad5f56685fb488a25694df0c58eb0a58570_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b993d6e92db601bc7c9345ac522b634767988db634bd53cd70d8146907eccae2 = $this->env->getExtension("native_profiler");
        $__internal_b993d6e92db601bc7c9345ac522b634767988db634bd53cd70d8146907eccae2->enter($__internal_b993d6e92db601bc7c9345ac522b634767988db634bd53cd70d8146907eccae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b993d6e92db601bc7c9345ac522b634767988db634bd53cd70d8146907eccae2->leave($__internal_b993d6e92db601bc7c9345ac522b634767988db634bd53cd70d8146907eccae2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
