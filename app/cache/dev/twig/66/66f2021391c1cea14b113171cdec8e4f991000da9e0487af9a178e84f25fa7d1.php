<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6dcdc7a7edb4f9880ec9e23aae2f6b6134fac8c6fb2954d454e1b6ced3cdc6f5 extends Twig_Template
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
        $__internal_7df83549b4e6d35a75ffb65b5258f00a7e049e4609565c0a8889f5026fcbd013 = $this->env->getExtension("native_profiler");
        $__internal_7df83549b4e6d35a75ffb65b5258f00a7e049e4609565c0a8889f5026fcbd013->enter($__internal_7df83549b4e6d35a75ffb65b5258f00a7e049e4609565c0a8889f5026fcbd013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7df83549b4e6d35a75ffb65b5258f00a7e049e4609565c0a8889f5026fcbd013->leave($__internal_7df83549b4e6d35a75ffb65b5258f00a7e049e4609565c0a8889f5026fcbd013_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
