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
        $__internal_4c14b016b1f3602019b473c77d979f2f49bd9b35b5dc57c263725b9e85d4de11 = $this->env->getExtension("native_profiler");
        $__internal_4c14b016b1f3602019b473c77d979f2f49bd9b35b5dc57c263725b9e85d4de11->enter($__internal_4c14b016b1f3602019b473c77d979f2f49bd9b35b5dc57c263725b9e85d4de11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c14b016b1f3602019b473c77d979f2f49bd9b35b5dc57c263725b9e85d4de11->leave($__internal_4c14b016b1f3602019b473c77d979f2f49bd9b35b5dc57c263725b9e85d4de11_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46ee22d844bcf941624c975aa3bd827cd18d727404cae1a1aec788878614069c = $this->env->getExtension("native_profiler");
        $__internal_46ee22d844bcf941624c975aa3bd827cd18d727404cae1a1aec788878614069c->enter($__internal_46ee22d844bcf941624c975aa3bd827cd18d727404cae1a1aec788878614069c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_46ee22d844bcf941624c975aa3bd827cd18d727404cae1a1aec788878614069c->leave($__internal_46ee22d844bcf941624c975aa3bd827cd18d727404cae1a1aec788878614069c_prof);

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
