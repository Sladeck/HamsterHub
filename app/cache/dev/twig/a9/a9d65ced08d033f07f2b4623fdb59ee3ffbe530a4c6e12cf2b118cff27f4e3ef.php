<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ad9c445f77c255b6f7ae65c4da74316218979a6f11c9752efa8ba9f4affd789f extends Twig_Template
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
        $__internal_c5ba52e41cce5c4387a327b763e078989bdb24f6bdc5ebfe9933ca2e88207539 = $this->env->getExtension("native_profiler");
        $__internal_c5ba52e41cce5c4387a327b763e078989bdb24f6bdc5ebfe9933ca2e88207539->enter($__internal_c5ba52e41cce5c4387a327b763e078989bdb24f6bdc5ebfe9933ca2e88207539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c5ba52e41cce5c4387a327b763e078989bdb24f6bdc5ebfe9933ca2e88207539->leave($__internal_c5ba52e41cce5c4387a327b763e078989bdb24f6bdc5ebfe9933ca2e88207539_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
