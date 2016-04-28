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
        $__internal_680f1255c92d5458a57d50d012defba1081a054d5f83c58d56ddbb471aabcf53 = $this->env->getExtension("native_profiler");
        $__internal_680f1255c92d5458a57d50d012defba1081a054d5f83c58d56ddbb471aabcf53->enter($__internal_680f1255c92d5458a57d50d012defba1081a054d5f83c58d56ddbb471aabcf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680f1255c92d5458a57d50d012defba1081a054d5f83c58d56ddbb471aabcf53->leave($__internal_680f1255c92d5458a57d50d012defba1081a054d5f83c58d56ddbb471aabcf53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c99389441936bc482974f51fa1466bfabe81bbec451d1870bd7f0f8044276df = $this->env->getExtension("native_profiler");
        $__internal_6c99389441936bc482974f51fa1466bfabe81bbec451d1870bd7f0f8044276df->enter($__internal_6c99389441936bc482974f51fa1466bfabe81bbec451d1870bd7f0f8044276df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6c99389441936bc482974f51fa1466bfabe81bbec451d1870bd7f0f8044276df->leave($__internal_6c99389441936bc482974f51fa1466bfabe81bbec451d1870bd7f0f8044276df_prof);

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
