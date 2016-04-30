<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_fe0e006a3e0dfb7f3d9380939adad442a1f743f6f4efd2b0b9fb57854a79665b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_4a14039e31b3f4086168110a2718b156b6be515a5d44c663b74fac359878cce7 = $this->env->getExtension("native_profiler");
        $__internal_4a14039e31b3f4086168110a2718b156b6be515a5d44c663b74fac359878cce7->enter($__internal_4a14039e31b3f4086168110a2718b156b6be515a5d44c663b74fac359878cce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a14039e31b3f4086168110a2718b156b6be515a5d44c663b74fac359878cce7->leave($__internal_4a14039e31b3f4086168110a2718b156b6be515a5d44c663b74fac359878cce7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_402ecc65aced99a7ab8a0d5907e3882f513475a8d3a3e19fe1bf51ab2cf9114c = $this->env->getExtension("native_profiler");
        $__internal_402ecc65aced99a7ab8a0d5907e3882f513475a8d3a3e19fe1bf51ab2cf9114c->enter($__internal_402ecc65aced99a7ab8a0d5907e3882f513475a8d3a3e19fe1bf51ab2cf9114c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_402ecc65aced99a7ab8a0d5907e3882f513475a8d3a3e19fe1bf51ab2cf9114c->leave($__internal_402ecc65aced99a7ab8a0d5907e3882f513475a8d3a3e19fe1bf51ab2cf9114c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
