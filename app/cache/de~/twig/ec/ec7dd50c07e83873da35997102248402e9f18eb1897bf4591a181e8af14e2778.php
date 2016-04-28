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
        $__internal_30b091c99b0f750d04c59fec89c8e14b0d4c9f212d04d99b98abc0f994a9ea70 = $this->env->getExtension("native_profiler");
        $__internal_30b091c99b0f750d04c59fec89c8e14b0d4c9f212d04d99b98abc0f994a9ea70->enter($__internal_30b091c99b0f750d04c59fec89c8e14b0d4c9f212d04d99b98abc0f994a9ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b091c99b0f750d04c59fec89c8e14b0d4c9f212d04d99b98abc0f994a9ea70->leave($__internal_30b091c99b0f750d04c59fec89c8e14b0d4c9f212d04d99b98abc0f994a9ea70_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_471df0dc73bcaad828ed7bed69bac7539fb909170c772a2388e9eff65c440801 = $this->env->getExtension("native_profiler");
        $__internal_471df0dc73bcaad828ed7bed69bac7539fb909170c772a2388e9eff65c440801->enter($__internal_471df0dc73bcaad828ed7bed69bac7539fb909170c772a2388e9eff65c440801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_471df0dc73bcaad828ed7bed69bac7539fb909170c772a2388e9eff65c440801->leave($__internal_471df0dc73bcaad828ed7bed69bac7539fb909170c772a2388e9eff65c440801_prof);

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
