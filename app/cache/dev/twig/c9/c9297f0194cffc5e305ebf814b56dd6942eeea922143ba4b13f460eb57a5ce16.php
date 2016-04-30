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
        $__internal_5523c6346907ab308d3b0b89e0c6ef9f80abd7a33fb7313e32655b944e644507 = $this->env->getExtension("native_profiler");
        $__internal_5523c6346907ab308d3b0b89e0c6ef9f80abd7a33fb7313e32655b944e644507->enter($__internal_5523c6346907ab308d3b0b89e0c6ef9f80abd7a33fb7313e32655b944e644507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5523c6346907ab308d3b0b89e0c6ef9f80abd7a33fb7313e32655b944e644507->leave($__internal_5523c6346907ab308d3b0b89e0c6ef9f80abd7a33fb7313e32655b944e644507_prof);

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
