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
        $__internal_0456fb91d74f553d0c87a9275580509c34a33d5fffab37c08e81d63c8ae2174a = $this->env->getExtension("native_profiler");
        $__internal_0456fb91d74f553d0c87a9275580509c34a33d5fffab37c08e81d63c8ae2174a->enter($__internal_0456fb91d74f553d0c87a9275580509c34a33d5fffab37c08e81d63c8ae2174a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0456fb91d74f553d0c87a9275580509c34a33d5fffab37c08e81d63c8ae2174a->leave($__internal_0456fb91d74f553d0c87a9275580509c34a33d5fffab37c08e81d63c8ae2174a_prof);

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
