<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9dc03192e3ad7573303750749edfb328d6e651102202caa77bdcd2b306e956ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_621a5ab9056278458ed53c7657c8cb4bd3c8e1f9115796901422be45e5598fdf = $this->env->getExtension("native_profiler");
        $__internal_621a5ab9056278458ed53c7657c8cb4bd3c8e1f9115796901422be45e5598fdf->enter($__internal_621a5ab9056278458ed53c7657c8cb4bd3c8e1f9115796901422be45e5598fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_621a5ab9056278458ed53c7657c8cb4bd3c8e1f9115796901422be45e5598fdf->leave($__internal_621a5ab9056278458ed53c7657c8cb4bd3c8e1f9115796901422be45e5598fdf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4dc08449b691cddc52e31f1a5d69c2c60a6ab19501af423d50dbb02ebad6bf2c = $this->env->getExtension("native_profiler");
        $__internal_4dc08449b691cddc52e31f1a5d69c2c60a6ab19501af423d50dbb02ebad6bf2c->enter($__internal_4dc08449b691cddc52e31f1a5d69c2c60a6ab19501af423d50dbb02ebad6bf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_4dc08449b691cddc52e31f1a5d69c2c60a6ab19501af423d50dbb02ebad6bf2c->leave($__internal_4dc08449b691cddc52e31f1a5d69c2c60a6ab19501af423d50dbb02ebad6bf2c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
