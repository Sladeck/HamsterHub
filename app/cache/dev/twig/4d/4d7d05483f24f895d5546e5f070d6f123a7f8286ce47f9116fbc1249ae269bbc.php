<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_c45e53598f54438925a7a713bade72fae3746f5a9fd8d01eb16aa8d3cdca9f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_84e2b6b772e5c02b5d47458e6c9839f3c7710a40b6b229505092362e1d3c2191 = $this->env->getExtension("native_profiler");
        $__internal_84e2b6b772e5c02b5d47458e6c9839f3c7710a40b6b229505092362e1d3c2191->enter($__internal_84e2b6b772e5c02b5d47458e6c9839f3c7710a40b6b229505092362e1d3c2191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e2b6b772e5c02b5d47458e6c9839f3c7710a40b6b229505092362e1d3c2191->leave($__internal_84e2b6b772e5c02b5d47458e6c9839f3c7710a40b6b229505092362e1d3c2191_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_128f0f68487ba6b72a7de5aec3d23d16e433160cb59f51ad32a8d05920ca9474 = $this->env->getExtension("native_profiler");
        $__internal_128f0f68487ba6b72a7de5aec3d23d16e433160cb59f51ad32a8d05920ca9474->enter($__internal_128f0f68487ba6b72a7de5aec3d23d16e433160cb59f51ad32a8d05920ca9474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_128f0f68487ba6b72a7de5aec3d23d16e433160cb59f51ad32a8d05920ca9474->leave($__internal_128f0f68487ba6b72a7de5aec3d23d16e433160cb59f51ad32a8d05920ca9474_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
