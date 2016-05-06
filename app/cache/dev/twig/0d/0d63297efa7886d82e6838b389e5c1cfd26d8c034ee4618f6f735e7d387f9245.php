<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_1c7a1b56f55d2538425a1cdefeb3e4aa5661920a9b7fd9c4f34e9522d53ebf8c extends Twig_Template
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
        $__internal_0369aefcc3c6db034eefc33713e5986a2681b0a49bd6220cd86c3541f08a8ba8 = $this->env->getExtension("native_profiler");
        $__internal_0369aefcc3c6db034eefc33713e5986a2681b0a49bd6220cd86c3541f08a8ba8->enter($__internal_0369aefcc3c6db034eefc33713e5986a2681b0a49bd6220cd86c3541f08a8ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0369aefcc3c6db034eefc33713e5986a2681b0a49bd6220cd86c3541f08a8ba8->leave($__internal_0369aefcc3c6db034eefc33713e5986a2681b0a49bd6220cd86c3541f08a8ba8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
