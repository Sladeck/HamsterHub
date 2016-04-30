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
        $__internal_0229e406c4a94d5e0f28545d75680776c36a61e1235dfaca4f7d6283c130de71 = $this->env->getExtension("native_profiler");
        $__internal_0229e406c4a94d5e0f28545d75680776c36a61e1235dfaca4f7d6283c130de71->enter($__internal_0229e406c4a94d5e0f28545d75680776c36a61e1235dfaca4f7d6283c130de71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0229e406c4a94d5e0f28545d75680776c36a61e1235dfaca4f7d6283c130de71->leave($__internal_0229e406c4a94d5e0f28545d75680776c36a61e1235dfaca4f7d6283c130de71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df8867a6481e1275f799ad11c00698d3d55e2c0f27234052e0f39d3754f2a6dd = $this->env->getExtension("native_profiler");
        $__internal_df8867a6481e1275f799ad11c00698d3d55e2c0f27234052e0f39d3754f2a6dd->enter($__internal_df8867a6481e1275f799ad11c00698d3d55e2c0f27234052e0f39d3754f2a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_df8867a6481e1275f799ad11c00698d3d55e2c0f27234052e0f39d3754f2a6dd->leave($__internal_df8867a6481e1275f799ad11c00698d3d55e2c0f27234052e0f39d3754f2a6dd_prof);

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
