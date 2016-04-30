<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_96570080c05fb6f793ef13cb901f4d24fbf56f4fa3ab2fc6116bf545ce398896 extends Twig_Template
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
        $__internal_63e185c81ba32507c29ba32cea5a4510298c1175c4a9fd6152a749011772b9f6 = $this->env->getExtension("native_profiler");
        $__internal_63e185c81ba32507c29ba32cea5a4510298c1175c4a9fd6152a749011772b9f6->enter($__internal_63e185c81ba32507c29ba32cea5a4510298c1175c4a9fd6152a749011772b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_63e185c81ba32507c29ba32cea5a4510298c1175c4a9fd6152a749011772b9f6->leave($__internal_63e185c81ba32507c29ba32cea5a4510298c1175c4a9fd6152a749011772b9f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
