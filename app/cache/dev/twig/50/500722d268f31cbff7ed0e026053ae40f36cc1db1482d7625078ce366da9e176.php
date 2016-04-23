<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_01fe45e0daf3fa9e8e730fb29f5ad2b0307574d7837ddd0d19caa18338ca5b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_f460ff8ede98be2aa884c0205646ac9ba58add6f3fe21c193f79483efbe4d795 = $this->env->getExtension("native_profiler");
        $__internal_f460ff8ede98be2aa884c0205646ac9ba58add6f3fe21c193f79483efbe4d795->enter($__internal_f460ff8ede98be2aa884c0205646ac9ba58add6f3fe21c193f79483efbe4d795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f460ff8ede98be2aa884c0205646ac9ba58add6f3fe21c193f79483efbe4d795->leave($__internal_f460ff8ede98be2aa884c0205646ac9ba58add6f3fe21c193f79483efbe4d795_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab7c989d637d625827bbd296b7225cb4cf70c37c04475370b9a7ff72cfa54076 = $this->env->getExtension("native_profiler");
        $__internal_ab7c989d637d625827bbd296b7225cb4cf70c37c04475370b9a7ff72cfa54076->enter($__internal_ab7c989d637d625827bbd296b7225cb4cf70c37c04475370b9a7ff72cfa54076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ab7c989d637d625827bbd296b7225cb4cf70c37c04475370b9a7ff72cfa54076->leave($__internal_ab7c989d637d625827bbd296b7225cb4cf70c37c04475370b9a7ff72cfa54076_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
