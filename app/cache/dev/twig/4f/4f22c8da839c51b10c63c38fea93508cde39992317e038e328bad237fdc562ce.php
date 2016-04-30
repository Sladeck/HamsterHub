<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_145734006c3757945384176db882a062b5f79c12dec23a38e4ce9333a5bdf915 extends Twig_Template
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
        $__internal_8a02d65d29dd99e8b7076710a4b46ab32d10ce172cc8c64eb53bccfe0d500a56 = $this->env->getExtension("native_profiler");
        $__internal_8a02d65d29dd99e8b7076710a4b46ab32d10ce172cc8c64eb53bccfe0d500a56->enter($__internal_8a02d65d29dd99e8b7076710a4b46ab32d10ce172cc8c64eb53bccfe0d500a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8a02d65d29dd99e8b7076710a4b46ab32d10ce172cc8c64eb53bccfe0d500a56->leave($__internal_8a02d65d29dd99e8b7076710a4b46ab32d10ce172cc8c64eb53bccfe0d500a56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
