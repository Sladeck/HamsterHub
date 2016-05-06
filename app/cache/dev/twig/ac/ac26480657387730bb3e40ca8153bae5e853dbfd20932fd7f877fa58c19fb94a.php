<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_168c895fb90e6afd9ac38870bbef359314548532f993807c837f009dbd31c908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dda6c49833f2fb493febd93229a820da0b2647a819f25ec8b70b328a2f2191c9 = $this->env->getExtension("native_profiler");
        $__internal_dda6c49833f2fb493febd93229a820da0b2647a819f25ec8b70b328a2f2191c9->enter($__internal_dda6c49833f2fb493febd93229a820da0b2647a819f25ec8b70b328a2f2191c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_dda6c49833f2fb493febd93229a820da0b2647a819f25ec8b70b328a2f2191c9->leave($__internal_dda6c49833f2fb493febd93229a820da0b2647a819f25ec8b70b328a2f2191c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
