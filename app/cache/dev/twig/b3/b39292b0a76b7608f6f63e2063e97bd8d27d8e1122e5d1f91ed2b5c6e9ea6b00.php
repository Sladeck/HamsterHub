<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_00b63aec5ab124cbff7c6b1f3c17ec7c9f023e95ee7914d27ad6917901920638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b3b0ea7da7c1513fe5ba15f033c07c9cabaef6a4e5f4f9351bb8e9d2a0fb210e = $this->env->getExtension("native_profiler");
        $__internal_b3b0ea7da7c1513fe5ba15f033c07c9cabaef6a4e5f4f9351bb8e9d2a0fb210e->enter($__internal_b3b0ea7da7c1513fe5ba15f033c07c9cabaef6a4e5f4f9351bb8e9d2a0fb210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3b0ea7da7c1513fe5ba15f033c07c9cabaef6a4e5f4f9351bb8e9d2a0fb210e->leave($__internal_b3b0ea7da7c1513fe5ba15f033c07c9cabaef6a4e5f4f9351bb8e9d2a0fb210e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1ebe90c76f36ce1a050d93d17ba0427050465246c0fb1e9c78c1036bb689586 = $this->env->getExtension("native_profiler");
        $__internal_b1ebe90c76f36ce1a050d93d17ba0427050465246c0fb1e9c78c1036bb689586->enter($__internal_b1ebe90c76f36ce1a050d93d17ba0427050465246c0fb1e9c78c1036bb689586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b1ebe90c76f36ce1a050d93d17ba0427050465246c0fb1e9c78c1036bb689586->leave($__internal_b1ebe90c76f36ce1a050d93d17ba0427050465246c0fb1e9c78c1036bb689586_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
