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
        $__internal_d1f3187d4ada73906670a1637296939f7e6e247938116df785e091d8ddac14d3 = $this->env->getExtension("native_profiler");
        $__internal_d1f3187d4ada73906670a1637296939f7e6e247938116df785e091d8ddac14d3->enter($__internal_d1f3187d4ada73906670a1637296939f7e6e247938116df785e091d8ddac14d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d1f3187d4ada73906670a1637296939f7e6e247938116df785e091d8ddac14d3->leave($__internal_d1f3187d4ada73906670a1637296939f7e6e247938116df785e091d8ddac14d3_prof);

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
