<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bce0bdd62aaaecff4f8b89960348b1a1dd648fd20415fb650b99d848f23b1404 extends Twig_Template
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
        $__internal_9b772e7b7f2a36c091d64c0f4ff3343faf1f885cd767aae2e22668a28a6e7bb8 = $this->env->getExtension("native_profiler");
        $__internal_9b772e7b7f2a36c091d64c0f4ff3343faf1f885cd767aae2e22668a28a6e7bb8->enter($__internal_9b772e7b7f2a36c091d64c0f4ff3343faf1f885cd767aae2e22668a28a6e7bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9b772e7b7f2a36c091d64c0f4ff3343faf1f885cd767aae2e22668a28a6e7bb8->leave($__internal_9b772e7b7f2a36c091d64c0f4ff3343faf1f885cd767aae2e22668a28a6e7bb8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
