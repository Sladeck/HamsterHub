<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c0e265a9a65ae5cc1def6b2fe33237441384f585d0753cd650206a754e638a9b extends Twig_Template
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
        $__internal_e5ba2b5956e0a0aa09280988c15bb05324b277c7010cf02ef718383b0bdfc119 = $this->env->getExtension("native_profiler");
        $__internal_e5ba2b5956e0a0aa09280988c15bb05324b277c7010cf02ef718383b0bdfc119->enter($__internal_e5ba2b5956e0a0aa09280988c15bb05324b277c7010cf02ef718383b0bdfc119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e5ba2b5956e0a0aa09280988c15bb05324b277c7010cf02ef718383b0bdfc119->leave($__internal_e5ba2b5956e0a0aa09280988c15bb05324b277c7010cf02ef718383b0bdfc119_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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