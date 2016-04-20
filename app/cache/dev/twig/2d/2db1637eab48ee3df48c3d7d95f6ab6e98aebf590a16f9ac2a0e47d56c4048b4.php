<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_19dbb13eded035013a0cd4e0a09d58a6d53711b97542b996c88206d925394080 extends Twig_Template
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
        $__internal_0d0ef21793fbf9348e805c862d07adce3b87b4cea1ec38fb151be4e5bb1497b5 = $this->env->getExtension("native_profiler");
        $__internal_0d0ef21793fbf9348e805c862d07adce3b87b4cea1ec38fb151be4e5bb1497b5->enter($__internal_0d0ef21793fbf9348e805c862d07adce3b87b4cea1ec38fb151be4e5bb1497b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0d0ef21793fbf9348e805c862d07adce3b87b4cea1ec38fb151be4e5bb1497b5->leave($__internal_0d0ef21793fbf9348e805c862d07adce3b87b4cea1ec38fb151be4e5bb1497b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
