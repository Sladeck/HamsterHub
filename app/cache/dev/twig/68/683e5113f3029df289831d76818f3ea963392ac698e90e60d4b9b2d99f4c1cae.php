<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cee9437118d9a1801e9a4fad092f67b55e92c699caf6b480da8b3c251be39f5d extends Twig_Template
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
        $__internal_7de4b986a79055077a4f1ed7f3d42d455451f025302ead62a2bdf284c0cf2258 = $this->env->getExtension("native_profiler");
        $__internal_7de4b986a79055077a4f1ed7f3d42d455451f025302ead62a2bdf284c0cf2258->enter($__internal_7de4b986a79055077a4f1ed7f3d42d455451f025302ead62a2bdf284c0cf2258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7de4b986a79055077a4f1ed7f3d42d455451f025302ead62a2bdf284c0cf2258->leave($__internal_7de4b986a79055077a4f1ed7f3d42d455451f025302ead62a2bdf284c0cf2258_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
