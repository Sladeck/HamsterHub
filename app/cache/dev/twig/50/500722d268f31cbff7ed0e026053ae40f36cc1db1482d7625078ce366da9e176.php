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
        $__internal_a088531fbd34bdfff16aa5f5eafefcd3f6691ff01e0d60d7dc39e56b995ed88a = $this->env->getExtension("native_profiler");
        $__internal_a088531fbd34bdfff16aa5f5eafefcd3f6691ff01e0d60d7dc39e56b995ed88a->enter($__internal_a088531fbd34bdfff16aa5f5eafefcd3f6691ff01e0d60d7dc39e56b995ed88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a088531fbd34bdfff16aa5f5eafefcd3f6691ff01e0d60d7dc39e56b995ed88a->leave($__internal_a088531fbd34bdfff16aa5f5eafefcd3f6691ff01e0d60d7dc39e56b995ed88a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a26353268e9d824f468597a8f7afd41abc6dccc0745e480902bfa81370b3e9d4 = $this->env->getExtension("native_profiler");
        $__internal_a26353268e9d824f468597a8f7afd41abc6dccc0745e480902bfa81370b3e9d4->enter($__internal_a26353268e9d824f468597a8f7afd41abc6dccc0745e480902bfa81370b3e9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a26353268e9d824f468597a8f7afd41abc6dccc0745e480902bfa81370b3e9d4->leave($__internal_a26353268e9d824f468597a8f7afd41abc6dccc0745e480902bfa81370b3e9d4_prof);

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
