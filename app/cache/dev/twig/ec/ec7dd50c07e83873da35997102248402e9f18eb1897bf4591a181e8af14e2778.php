<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_12379b0991731d349094f9e9cb7c5e2d3122ada460b07fd8d1ae569093be81e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_fcd70e04855c00ee78f2be9625c3845309c735c432354b2225ffb529fa209f29 = $this->env->getExtension("native_profiler");
        $__internal_fcd70e04855c00ee78f2be9625c3845309c735c432354b2225ffb529fa209f29->enter($__internal_fcd70e04855c00ee78f2be9625c3845309c735c432354b2225ffb529fa209f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd70e04855c00ee78f2be9625c3845309c735c432354b2225ffb529fa209f29->leave($__internal_fcd70e04855c00ee78f2be9625c3845309c735c432354b2225ffb529fa209f29_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e61f8c31eed8e641f84fb4e337ed7fafa285b6da3327ce31edb5d1708d0eeb5b = $this->env->getExtension("native_profiler");
        $__internal_e61f8c31eed8e641f84fb4e337ed7fafa285b6da3327ce31edb5d1708d0eeb5b->enter($__internal_e61f8c31eed8e641f84fb4e337ed7fafa285b6da3327ce31edb5d1708d0eeb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e61f8c31eed8e641f84fb4e337ed7fafa285b6da3327ce31edb5d1708d0eeb5b->leave($__internal_e61f8c31eed8e641f84fb4e337ed7fafa285b6da3327ce31edb5d1708d0eeb5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
