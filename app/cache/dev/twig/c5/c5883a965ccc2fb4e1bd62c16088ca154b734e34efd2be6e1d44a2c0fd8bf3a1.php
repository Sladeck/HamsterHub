<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_850e68920d33fd61e0331aa24575aeda67db55c3b24d6df5818d2f7231d9d826 extends Twig_Template
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
        $__internal_6b22e1376244e5b81e5bfd669d663e17bb6a70a02fa48af11d52a767b1bb531c = $this->env->getExtension("native_profiler");
        $__internal_6b22e1376244e5b81e5bfd669d663e17bb6a70a02fa48af11d52a767b1bb531c->enter($__internal_6b22e1376244e5b81e5bfd669d663e17bb6a70a02fa48af11d52a767b1bb531c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6b22e1376244e5b81e5bfd669d663e17bb6a70a02fa48af11d52a767b1bb531c->leave($__internal_6b22e1376244e5b81e5bfd669d663e17bb6a70a02fa48af11d52a767b1bb531c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
