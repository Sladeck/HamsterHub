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
        $__internal_0a596364bd813545d9157df1ddf017ad9f6878d4493c49e072c987aac113da48 = $this->env->getExtension("native_profiler");
        $__internal_0a596364bd813545d9157df1ddf017ad9f6878d4493c49e072c987aac113da48->enter($__internal_0a596364bd813545d9157df1ddf017ad9f6878d4493c49e072c987aac113da48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0a596364bd813545d9157df1ddf017ad9f6878d4493c49e072c987aac113da48->leave($__internal_0a596364bd813545d9157df1ddf017ad9f6878d4493c49e072c987aac113da48_prof);

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
