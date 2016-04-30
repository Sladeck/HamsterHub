<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9dc03192e3ad7573303750749edfb328d6e651102202caa77bdcd2b306e956ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_eedbb850241023ff9985848ab898d8b1dd4739e7c326ebbb4a06b036c223b7de = $this->env->getExtension("native_profiler");
        $__internal_eedbb850241023ff9985848ab898d8b1dd4739e7c326ebbb4a06b036c223b7de->enter($__internal_eedbb850241023ff9985848ab898d8b1dd4739e7c326ebbb4a06b036c223b7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eedbb850241023ff9985848ab898d8b1dd4739e7c326ebbb4a06b036c223b7de->leave($__internal_eedbb850241023ff9985848ab898d8b1dd4739e7c326ebbb4a06b036c223b7de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_529cc805522589787866d589097583df913f23039b5010480515064237aa7fcc = $this->env->getExtension("native_profiler");
        $__internal_529cc805522589787866d589097583df913f23039b5010480515064237aa7fcc->enter($__internal_529cc805522589787866d589097583df913f23039b5010480515064237aa7fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_529cc805522589787866d589097583df913f23039b5010480515064237aa7fcc->leave($__internal_529cc805522589787866d589097583df913f23039b5010480515064237aa7fcc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
