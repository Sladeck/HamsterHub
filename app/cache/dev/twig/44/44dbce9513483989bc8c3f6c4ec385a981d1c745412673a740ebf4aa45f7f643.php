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
        $__internal_cd4aa1ca91a116990ad79e2f0df4f6eb54fc5155d400d7e390b4dc02ec058555 = $this->env->getExtension("native_profiler");
        $__internal_cd4aa1ca91a116990ad79e2f0df4f6eb54fc5155d400d7e390b4dc02ec058555->enter($__internal_cd4aa1ca91a116990ad79e2f0df4f6eb54fc5155d400d7e390b4dc02ec058555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cd4aa1ca91a116990ad79e2f0df4f6eb54fc5155d400d7e390b4dc02ec058555->leave($__internal_cd4aa1ca91a116990ad79e2f0df4f6eb54fc5155d400d7e390b4dc02ec058555_prof);

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
