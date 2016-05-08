<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_ab8f6eae840cf2c5abe94604041bf007c4d8587a36e48f338af553694636cff4 extends Twig_Template
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
        $__internal_33caa318f20c45d8991d77ac6e593c0bee87c42a81511b0d10a43f663946043c = $this->env->getExtension("native_profiler");
        $__internal_33caa318f20c45d8991d77ac6e593c0bee87c42a81511b0d10a43f663946043c->enter($__internal_33caa318f20c45d8991d77ac6e593c0bee87c42a81511b0d10a43f663946043c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_33caa318f20c45d8991d77ac6e593c0bee87c42a81511b0d10a43f663946043c->leave($__internal_33caa318f20c45d8991d77ac6e593c0bee87c42a81511b0d10a43f663946043c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
