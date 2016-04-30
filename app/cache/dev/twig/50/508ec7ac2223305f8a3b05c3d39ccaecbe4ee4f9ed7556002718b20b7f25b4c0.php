<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c86da2c5d84dd9a3f191c6b70f934d2fe0f5b6dc39b026e795208561f5339730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_330c1f4344b671c8013dbf7722f76f3cbd27053538372760c64acb5c53ea0bd8 = $this->env->getExtension("native_profiler");
        $__internal_330c1f4344b671c8013dbf7722f76f3cbd27053538372760c64acb5c53ea0bd8->enter($__internal_330c1f4344b671c8013dbf7722f76f3cbd27053538372760c64acb5c53ea0bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330c1f4344b671c8013dbf7722f76f3cbd27053538372760c64acb5c53ea0bd8->leave($__internal_330c1f4344b671c8013dbf7722f76f3cbd27053538372760c64acb5c53ea0bd8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3b8fedeee481f56e9994f9f5be6402bf1255c0eeaae636b00adde4e60383c1d = $this->env->getExtension("native_profiler");
        $__internal_d3b8fedeee481f56e9994f9f5be6402bf1255c0eeaae636b00adde4e60383c1d->enter($__internal_d3b8fedeee481f56e9994f9f5be6402bf1255c0eeaae636b00adde4e60383c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d3b8fedeee481f56e9994f9f5be6402bf1255c0eeaae636b00adde4e60383c1d->leave($__internal_d3b8fedeee481f56e9994f9f5be6402bf1255c0eeaae636b00adde4e60383c1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
