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
        $__internal_8b999702caf510c752c3f0eaedab0335605828bec7c345b59de3f223a622db9a = $this->env->getExtension("native_profiler");
        $__internal_8b999702caf510c752c3f0eaedab0335605828bec7c345b59de3f223a622db9a->enter($__internal_8b999702caf510c752c3f0eaedab0335605828bec7c345b59de3f223a622db9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b999702caf510c752c3f0eaedab0335605828bec7c345b59de3f223a622db9a->leave($__internal_8b999702caf510c752c3f0eaedab0335605828bec7c345b59de3f223a622db9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccd90ed9879f2c5f8924143441dc3d3eee11ef02c0963ce9bae648555551e2be = $this->env->getExtension("native_profiler");
        $__internal_ccd90ed9879f2c5f8924143441dc3d3eee11ef02c0963ce9bae648555551e2be->enter($__internal_ccd90ed9879f2c5f8924143441dc3d3eee11ef02c0963ce9bae648555551e2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_ccd90ed9879f2c5f8924143441dc3d3eee11ef02c0963ce9bae648555551e2be->leave($__internal_ccd90ed9879f2c5f8924143441dc3d3eee11ef02c0963ce9bae648555551e2be_prof);

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
