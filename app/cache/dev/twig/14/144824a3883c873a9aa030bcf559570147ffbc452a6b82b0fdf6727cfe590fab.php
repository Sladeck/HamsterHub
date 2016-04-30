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
        $__internal_19a31706981796a90aa7f6ccf74de38a8f9dc4b8829d29e3c0ec92ff3d11818b = $this->env->getExtension("native_profiler");
        $__internal_19a31706981796a90aa7f6ccf74de38a8f9dc4b8829d29e3c0ec92ff3d11818b->enter($__internal_19a31706981796a90aa7f6ccf74de38a8f9dc4b8829d29e3c0ec92ff3d11818b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a31706981796a90aa7f6ccf74de38a8f9dc4b8829d29e3c0ec92ff3d11818b->leave($__internal_19a31706981796a90aa7f6ccf74de38a8f9dc4b8829d29e3c0ec92ff3d11818b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c3e945667e886ef024c8f04863e76ab14ab9ae0593f1961dc00fece95db704e = $this->env->getExtension("native_profiler");
        $__internal_9c3e945667e886ef024c8f04863e76ab14ab9ae0593f1961dc00fece95db704e->enter($__internal_9c3e945667e886ef024c8f04863e76ab14ab9ae0593f1961dc00fece95db704e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9c3e945667e886ef024c8f04863e76ab14ab9ae0593f1961dc00fece95db704e->leave($__internal_9c3e945667e886ef024c8f04863e76ab14ab9ae0593f1961dc00fece95db704e_prof);

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
