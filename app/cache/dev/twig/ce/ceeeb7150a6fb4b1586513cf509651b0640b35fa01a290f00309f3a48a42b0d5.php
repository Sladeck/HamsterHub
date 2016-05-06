<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c5998c93a42f808df76cf9f5bee21f33e74206810ab73a6246ed24ac2f55f1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_e7695ff8d6800303066b816f9315b83c498cb32112cd071b283552757e4b2d18 = $this->env->getExtension("native_profiler");
        $__internal_e7695ff8d6800303066b816f9315b83c498cb32112cd071b283552757e4b2d18->enter($__internal_e7695ff8d6800303066b816f9315b83c498cb32112cd071b283552757e4b2d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7695ff8d6800303066b816f9315b83c498cb32112cd071b283552757e4b2d18->leave($__internal_e7695ff8d6800303066b816f9315b83c498cb32112cd071b283552757e4b2d18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11ad5801e39fc3b6b0bfac2d596e6f518d931a4a80b3ad7bc2f8fec2a8e6e38f = $this->env->getExtension("native_profiler");
        $__internal_11ad5801e39fc3b6b0bfac2d596e6f518d931a4a80b3ad7bc2f8fec2a8e6e38f->enter($__internal_11ad5801e39fc3b6b0bfac2d596e6f518d931a4a80b3ad7bc2f8fec2a8e6e38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_11ad5801e39fc3b6b0bfac2d596e6f518d931a4a80b3ad7bc2f8fec2a8e6e38f->leave($__internal_11ad5801e39fc3b6b0bfac2d596e6f518d931a4a80b3ad7bc2f8fec2a8e6e38f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
