<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_50e602516469f14c01291bc39bc961e8a79a23380a780a143fa9bd76d1917203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_6b7a171940bcb9c885af1cf8b9f1f940b4b565be818250fd280dca0d0c5d1bb0 = $this->env->getExtension("native_profiler");
        $__internal_6b7a171940bcb9c885af1cf8b9f1f940b4b565be818250fd280dca0d0c5d1bb0->enter($__internal_6b7a171940bcb9c885af1cf8b9f1f940b4b565be818250fd280dca0d0c5d1bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b7a171940bcb9c885af1cf8b9f1f940b4b565be818250fd280dca0d0c5d1bb0->leave($__internal_6b7a171940bcb9c885af1cf8b9f1f940b4b565be818250fd280dca0d0c5d1bb0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c725bf2dbdd628d7c3384a895c02676f662694e371fc657399ad6bbeb032d191 = $this->env->getExtension("native_profiler");
        $__internal_c725bf2dbdd628d7c3384a895c02676f662694e371fc657399ad6bbeb032d191->enter($__internal_c725bf2dbdd628d7c3384a895c02676f662694e371fc657399ad6bbeb032d191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_c725bf2dbdd628d7c3384a895c02676f662694e371fc657399ad6bbeb032d191->leave($__internal_c725bf2dbdd628d7c3384a895c02676f662694e371fc657399ad6bbeb032d191_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
