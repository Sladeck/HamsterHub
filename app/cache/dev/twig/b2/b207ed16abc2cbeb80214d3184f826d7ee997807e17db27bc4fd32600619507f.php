<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_5b1271164f36550e1834267fb987c4f5f7a7886fc203dc4be49bfd8918703a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ada47265bb1fb42edbefe5c691a11986f89d0ba906a41fd76ff53fed1f54fe60 = $this->env->getExtension("native_profiler");
        $__internal_ada47265bb1fb42edbefe5c691a11986f89d0ba906a41fd76ff53fed1f54fe60->enter($__internal_ada47265bb1fb42edbefe5c691a11986f89d0ba906a41fd76ff53fed1f54fe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada47265bb1fb42edbefe5c691a11986f89d0ba906a41fd76ff53fed1f54fe60->leave($__internal_ada47265bb1fb42edbefe5c691a11986f89d0ba906a41fd76ff53fed1f54fe60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfe94918f98d3937cf65af27008e32a4b294f94e85cf5adb9e6d19f661afeb28 = $this->env->getExtension("native_profiler");
        $__internal_cfe94918f98d3937cf65af27008e32a4b294f94e85cf5adb9e6d19f661afeb28->enter($__internal_cfe94918f98d3937cf65af27008e32a4b294f94e85cf5adb9e6d19f661afeb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_cfe94918f98d3937cf65af27008e32a4b294f94e85cf5adb9e6d19f661afeb28->leave($__internal_cfe94918f98d3937cf65af27008e32a4b294f94e85cf5adb9e6d19f661afeb28_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
