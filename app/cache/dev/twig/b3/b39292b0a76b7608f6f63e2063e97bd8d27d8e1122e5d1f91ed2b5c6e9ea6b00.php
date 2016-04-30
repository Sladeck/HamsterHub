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
        $__internal_b325135e4a1d0e5beff22cb3486f1fadbc859b95c499f5b622a7dadc552fbc7b = $this->env->getExtension("native_profiler");
        $__internal_b325135e4a1d0e5beff22cb3486f1fadbc859b95c499f5b622a7dadc552fbc7b->enter($__internal_b325135e4a1d0e5beff22cb3486f1fadbc859b95c499f5b622a7dadc552fbc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b325135e4a1d0e5beff22cb3486f1fadbc859b95c499f5b622a7dadc552fbc7b->leave($__internal_b325135e4a1d0e5beff22cb3486f1fadbc859b95c499f5b622a7dadc552fbc7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac7f0914b7cdb2d4117ce4d0cd5a517309e5352f6401367710f1c83449cc9898 = $this->env->getExtension("native_profiler");
        $__internal_ac7f0914b7cdb2d4117ce4d0cd5a517309e5352f6401367710f1c83449cc9898->enter($__internal_ac7f0914b7cdb2d4117ce4d0cd5a517309e5352f6401367710f1c83449cc9898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ac7f0914b7cdb2d4117ce4d0cd5a517309e5352f6401367710f1c83449cc9898->leave($__internal_ac7f0914b7cdb2d4117ce4d0cd5a517309e5352f6401367710f1c83449cc9898_prof);

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
