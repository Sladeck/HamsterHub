<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c5729bdfbedfc3c537e71a2d2b435826b76676e1d26beef7ba259e2fd74bfaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7e4f6990d4818eb518c6791455d878f33c50ab08e982ab33df85830907c2c085 = $this->env->getExtension("native_profiler");
        $__internal_7e4f6990d4818eb518c6791455d878f33c50ab08e982ab33df85830907c2c085->enter($__internal_7e4f6990d4818eb518c6791455d878f33c50ab08e982ab33df85830907c2c085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e4f6990d4818eb518c6791455d878f33c50ab08e982ab33df85830907c2c085->leave($__internal_7e4f6990d4818eb518c6791455d878f33c50ab08e982ab33df85830907c2c085_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03101b52d252d578340f9403891826139d467d79a2d15b43e6714befacc40ef3 = $this->env->getExtension("native_profiler");
        $__internal_03101b52d252d578340f9403891826139d467d79a2d15b43e6714befacc40ef3->enter($__internal_03101b52d252d578340f9403891826139d467d79a2d15b43e6714befacc40ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_03101b52d252d578340f9403891826139d467d79a2d15b43e6714befacc40ef3->leave($__internal_03101b52d252d578340f9403891826139d467d79a2d15b43e6714befacc40ef3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
