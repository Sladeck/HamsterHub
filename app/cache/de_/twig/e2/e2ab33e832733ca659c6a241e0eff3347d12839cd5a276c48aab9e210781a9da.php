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
        $__internal_b4ca47eba4cbf209afd9223470240fd3bc90899e9b0ffb32c98a6fbdf4caa355 = $this->env->getExtension("native_profiler");
        $__internal_b4ca47eba4cbf209afd9223470240fd3bc90899e9b0ffb32c98a6fbdf4caa355->enter($__internal_b4ca47eba4cbf209afd9223470240fd3bc90899e9b0ffb32c98a6fbdf4caa355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b4ca47eba4cbf209afd9223470240fd3bc90899e9b0ffb32c98a6fbdf4caa355->leave($__internal_b4ca47eba4cbf209afd9223470240fd3bc90899e9b0ffb32c98a6fbdf4caa355_prof);

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
