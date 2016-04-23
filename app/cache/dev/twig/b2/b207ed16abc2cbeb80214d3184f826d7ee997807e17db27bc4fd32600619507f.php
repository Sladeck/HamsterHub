<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_5b1271164f36550e1834267fb987c4f5f7a7886fc203dc4be49bfd8918703a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_81118007847585ebf8fca86584b1c66011328c455c27461ce702847bfa5712c4 = $this->env->getExtension("native_profiler");
        $__internal_81118007847585ebf8fca86584b1c66011328c455c27461ce702847bfa5712c4->enter($__internal_81118007847585ebf8fca86584b1c66011328c455c27461ce702847bfa5712c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81118007847585ebf8fca86584b1c66011328c455c27461ce702847bfa5712c4->leave($__internal_81118007847585ebf8fca86584b1c66011328c455c27461ce702847bfa5712c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00fd1c80271e4909db6fdeedf93c571207b2c8889e49b8a610a854d1566c2c0e = $this->env->getExtension("native_profiler");
        $__internal_00fd1c80271e4909db6fdeedf93c571207b2c8889e49b8a610a854d1566c2c0e->enter($__internal_00fd1c80271e4909db6fdeedf93c571207b2c8889e49b8a610a854d1566c2c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_00fd1c80271e4909db6fdeedf93c571207b2c8889e49b8a610a854d1566c2c0e->leave($__internal_00fd1c80271e4909db6fdeedf93c571207b2c8889e49b8a610a854d1566c2c0e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
