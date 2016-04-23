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
        $__internal_fd7d86038aa49b0708ffc0c9957c190c14108b44fc0a700093503409ea492726 = $this->env->getExtension("native_profiler");
        $__internal_fd7d86038aa49b0708ffc0c9957c190c14108b44fc0a700093503409ea492726->enter($__internal_fd7d86038aa49b0708ffc0c9957c190c14108b44fc0a700093503409ea492726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7d86038aa49b0708ffc0c9957c190c14108b44fc0a700093503409ea492726->leave($__internal_fd7d86038aa49b0708ffc0c9957c190c14108b44fc0a700093503409ea492726_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_326d04a4887890a3a6b2854f8308042926672560fc3aeb4c31c96acb25f17d88 = $this->env->getExtension("native_profiler");
        $__internal_326d04a4887890a3a6b2854f8308042926672560fc3aeb4c31c96acb25f17d88->enter($__internal_326d04a4887890a3a6b2854f8308042926672560fc3aeb4c31c96acb25f17d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_326d04a4887890a3a6b2854f8308042926672560fc3aeb4c31c96acb25f17d88->leave($__internal_326d04a4887890a3a6b2854f8308042926672560fc3aeb4c31c96acb25f17d88_prof);

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
