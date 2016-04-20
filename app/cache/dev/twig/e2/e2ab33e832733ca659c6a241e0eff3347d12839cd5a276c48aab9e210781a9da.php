<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f58f9b4319ea9317bf04b8e80c3b2481edb8083ec01d73455e533c13bc05ae81 extends Twig_Template
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
        $__internal_e6c284e0174464a33c1a9b94a4bd4dc216afe0cb337cad3391812f103f1ceb32 = $this->env->getExtension("native_profiler");
        $__internal_e6c284e0174464a33c1a9b94a4bd4dc216afe0cb337cad3391812f103f1ceb32->enter($__internal_e6c284e0174464a33c1a9b94a4bd4dc216afe0cb337cad3391812f103f1ceb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e6c284e0174464a33c1a9b94a4bd4dc216afe0cb337cad3391812f103f1ceb32->leave($__internal_e6c284e0174464a33c1a9b94a4bd4dc216afe0cb337cad3391812f103f1ceb32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
