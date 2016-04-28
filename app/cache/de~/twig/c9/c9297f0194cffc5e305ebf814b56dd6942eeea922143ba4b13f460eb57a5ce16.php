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
        $__internal_b2064fc1ad7b6871272d87a16b23a94f290dfd47e36629d777b082c6493278be = $this->env->getExtension("native_profiler");
        $__internal_b2064fc1ad7b6871272d87a16b23a94f290dfd47e36629d777b082c6493278be->enter($__internal_b2064fc1ad7b6871272d87a16b23a94f290dfd47e36629d777b082c6493278be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b2064fc1ad7b6871272d87a16b23a94f290dfd47e36629d777b082c6493278be->leave($__internal_b2064fc1ad7b6871272d87a16b23a94f290dfd47e36629d777b082c6493278be_prof);

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
