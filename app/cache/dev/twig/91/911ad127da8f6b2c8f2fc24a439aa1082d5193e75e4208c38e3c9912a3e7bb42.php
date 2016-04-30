<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_212534e80aa082735f7b8dfc42822df3ea634140faa0181e2a0535976f08e0fa extends Twig_Template
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
        $__internal_ad30aa9fd84e11edc9e6ff4afbf3c1096eb9bc9a9371bbc6fb09b18747fb3a8a = $this->env->getExtension("native_profiler");
        $__internal_ad30aa9fd84e11edc9e6ff4afbf3c1096eb9bc9a9371bbc6fb09b18747fb3a8a->enter($__internal_ad30aa9fd84e11edc9e6ff4afbf3c1096eb9bc9a9371bbc6fb09b18747fb3a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_ad30aa9fd84e11edc9e6ff4afbf3c1096eb9bc9a9371bbc6fb09b18747fb3a8a->leave($__internal_ad30aa9fd84e11edc9e6ff4afbf3c1096eb9bc9a9371bbc6fb09b18747fb3a8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
