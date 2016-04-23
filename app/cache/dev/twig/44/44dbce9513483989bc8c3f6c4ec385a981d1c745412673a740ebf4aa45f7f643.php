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
        $__internal_5dd2850c3a06bf89ffbf3e3612d1a2fdacd6735032477ade2c3f84e356bba72e = $this->env->getExtension("native_profiler");
        $__internal_5dd2850c3a06bf89ffbf3e3612d1a2fdacd6735032477ade2c3f84e356bba72e->enter($__internal_5dd2850c3a06bf89ffbf3e3612d1a2fdacd6735032477ade2c3f84e356bba72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5dd2850c3a06bf89ffbf3e3612d1a2fdacd6735032477ade2c3f84e356bba72e->leave($__internal_5dd2850c3a06bf89ffbf3e3612d1a2fdacd6735032477ade2c3f84e356bba72e_prof);

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
