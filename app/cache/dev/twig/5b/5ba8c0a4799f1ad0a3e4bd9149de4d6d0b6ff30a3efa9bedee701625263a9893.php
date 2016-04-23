<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_39073a1ddf3c0153af117eea8a3b3c9b761ca5be222c26e2659207a913685e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_17f58ebcb2803b046d4f8e9f70fa6b4848b3744ac88d21b4142c56026e043c00 = $this->env->getExtension("native_profiler");
        $__internal_17f58ebcb2803b046d4f8e9f70fa6b4848b3744ac88d21b4142c56026e043c00->enter($__internal_17f58ebcb2803b046d4f8e9f70fa6b4848b3744ac88d21b4142c56026e043c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17f58ebcb2803b046d4f8e9f70fa6b4848b3744ac88d21b4142c56026e043c00->leave($__internal_17f58ebcb2803b046d4f8e9f70fa6b4848b3744ac88d21b4142c56026e043c00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03416fe2e9641dca40d907f3a1542629d6cef95d06fa962b778cea2e884ddd70 = $this->env->getExtension("native_profiler");
        $__internal_03416fe2e9641dca40d907f3a1542629d6cef95d06fa962b778cea2e884ddd70->enter($__internal_03416fe2e9641dca40d907f3a1542629d6cef95d06fa962b778cea2e884ddd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_03416fe2e9641dca40d907f3a1542629d6cef95d06fa962b778cea2e884ddd70->leave($__internal_03416fe2e9641dca40d907f3a1542629d6cef95d06fa962b778cea2e884ddd70_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
