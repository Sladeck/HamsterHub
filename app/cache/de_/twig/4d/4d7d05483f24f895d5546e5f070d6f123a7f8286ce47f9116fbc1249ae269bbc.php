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
        $__internal_959e53fcf4829a4446a85b400e90ce12d0861851bdb0d4317bf8f21eb524a111 = $this->env->getExtension("native_profiler");
        $__internal_959e53fcf4829a4446a85b400e90ce12d0861851bdb0d4317bf8f21eb524a111->enter($__internal_959e53fcf4829a4446a85b400e90ce12d0861851bdb0d4317bf8f21eb524a111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_959e53fcf4829a4446a85b400e90ce12d0861851bdb0d4317bf8f21eb524a111->leave($__internal_959e53fcf4829a4446a85b400e90ce12d0861851bdb0d4317bf8f21eb524a111_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8474eacfed47ca26ad9084646e0443209e40cd9ed26d20d9bd56a10d520d59d6 = $this->env->getExtension("native_profiler");
        $__internal_8474eacfed47ca26ad9084646e0443209e40cd9ed26d20d9bd56a10d520d59d6->enter($__internal_8474eacfed47ca26ad9084646e0443209e40cd9ed26d20d9bd56a10d520d59d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8474eacfed47ca26ad9084646e0443209e40cd9ed26d20d9bd56a10d520d59d6->leave($__internal_8474eacfed47ca26ad9084646e0443209e40cd9ed26d20d9bd56a10d520d59d6_prof);

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
