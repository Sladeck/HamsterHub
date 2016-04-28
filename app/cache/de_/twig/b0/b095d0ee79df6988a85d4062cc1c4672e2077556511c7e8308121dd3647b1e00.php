<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_733d4d923f95e1fb956edae21c887333c8340a3a0e599509f33e4b30a7b068c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e9272cda2ef8451a7374396e3dbb696c930db0f70a7c1b76dd53d2c5d6335d61 = $this->env->getExtension("native_profiler");
        $__internal_e9272cda2ef8451a7374396e3dbb696c930db0f70a7c1b76dd53d2c5d6335d61->enter($__internal_e9272cda2ef8451a7374396e3dbb696c930db0f70a7c1b76dd53d2c5d6335d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9272cda2ef8451a7374396e3dbb696c930db0f70a7c1b76dd53d2c5d6335d61->leave($__internal_e9272cda2ef8451a7374396e3dbb696c930db0f70a7c1b76dd53d2c5d6335d61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc8612fa05282ba894705c60637cb5fd51f0efb7186f48233c3d5b154aef45b6 = $this->env->getExtension("native_profiler");
        $__internal_fc8612fa05282ba894705c60637cb5fd51f0efb7186f48233c3d5b154aef45b6->enter($__internal_fc8612fa05282ba894705c60637cb5fd51f0efb7186f48233c3d5b154aef45b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_fc8612fa05282ba894705c60637cb5fd51f0efb7186f48233c3d5b154aef45b6->leave($__internal_fc8612fa05282ba894705c60637cb5fd51f0efb7186f48233c3d5b154aef45b6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
