<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_63fba53f2447a17c775be2f054247f85a5a21e2da9a41bae1a8aed1cd122f177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_5466106c389c9e958910a34619d9de5c2f4db27c1cd22c6d387e0b9ecca0230d = $this->env->getExtension("native_profiler");
        $__internal_5466106c389c9e958910a34619d9de5c2f4db27c1cd22c6d387e0b9ecca0230d->enter($__internal_5466106c389c9e958910a34619d9de5c2f4db27c1cd22c6d387e0b9ecca0230d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5466106c389c9e958910a34619d9de5c2f4db27c1cd22c6d387e0b9ecca0230d->leave($__internal_5466106c389c9e958910a34619d9de5c2f4db27c1cd22c6d387e0b9ecca0230d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48b4357f95c145467003f9f2a2abd548ddfd994cf4b75dcfbabe3f91b7a47788 = $this->env->getExtension("native_profiler");
        $__internal_48b4357f95c145467003f9f2a2abd548ddfd994cf4b75dcfbabe3f91b7a47788->enter($__internal_48b4357f95c145467003f9f2a2abd548ddfd994cf4b75dcfbabe3f91b7a47788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_48b4357f95c145467003f9f2a2abd548ddfd994cf4b75dcfbabe3f91b7a47788->leave($__internal_48b4357f95c145467003f9f2a2abd548ddfd994cf4b75dcfbabe3f91b7a47788_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
