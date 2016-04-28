<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b76b49bf4d47d3c8b4426342bd5cf9b7f9be52a345a7f2684d169b118f6ea436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_7a8f1c5e0e717e4ad10b94237f09c2ad628c2d69cea5e0a20aaa4c1e5e7e93ad = $this->env->getExtension("native_profiler");
        $__internal_7a8f1c5e0e717e4ad10b94237f09c2ad628c2d69cea5e0a20aaa4c1e5e7e93ad->enter($__internal_7a8f1c5e0e717e4ad10b94237f09c2ad628c2d69cea5e0a20aaa4c1e5e7e93ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8f1c5e0e717e4ad10b94237f09c2ad628c2d69cea5e0a20aaa4c1e5e7e93ad->leave($__internal_7a8f1c5e0e717e4ad10b94237f09c2ad628c2d69cea5e0a20aaa4c1e5e7e93ad_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc447b0b45a21dd9d8e8a2965d5e4d1ffd0eced17e19daa9a7a4b32cd9a22106 = $this->env->getExtension("native_profiler");
        $__internal_cc447b0b45a21dd9d8e8a2965d5e4d1ffd0eced17e19daa9a7a4b32cd9a22106->enter($__internal_cc447b0b45a21dd9d8e8a2965d5e4d1ffd0eced17e19daa9a7a4b32cd9a22106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_cc447b0b45a21dd9d8e8a2965d5e4d1ffd0eced17e19daa9a7a4b32cd9a22106->leave($__internal_cc447b0b45a21dd9d8e8a2965d5e4d1ffd0eced17e19daa9a7a4b32cd9a22106_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
