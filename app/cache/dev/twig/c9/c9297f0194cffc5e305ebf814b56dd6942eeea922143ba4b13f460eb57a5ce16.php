<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8e6abf5c2d24f97082171eac7782c8ceb478924c44af1048b4804ec54000176c extends Twig_Template
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
        $__internal_9c8c72e3e4a1e0d233a4fa5e046ab7ad21e467ce91eb2904352c6367acd16eff = $this->env->getExtension("native_profiler");
        $__internal_9c8c72e3e4a1e0d233a4fa5e046ab7ad21e467ce91eb2904352c6367acd16eff->enter($__internal_9c8c72e3e4a1e0d233a4fa5e046ab7ad21e467ce91eb2904352c6367acd16eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9c8c72e3e4a1e0d233a4fa5e046ab7ad21e467ce91eb2904352c6367acd16eff->leave($__internal_9c8c72e3e4a1e0d233a4fa5e046ab7ad21e467ce91eb2904352c6367acd16eff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
