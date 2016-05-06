<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_aba1765ea06353e8a37a2517010ac64d25e16f6fa99a96bdacf2fa7338a20b0f extends Twig_Template
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
        $__internal_c28b6de54c855cd61f7de0c940edf796bc83cb6f3efa8694b6522f1da0e6896b = $this->env->getExtension("native_profiler");
        $__internal_c28b6de54c855cd61f7de0c940edf796bc83cb6f3efa8694b6522f1da0e6896b->enter($__internal_c28b6de54c855cd61f7de0c940edf796bc83cb6f3efa8694b6522f1da0e6896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_c28b6de54c855cd61f7de0c940edf796bc83cb6f3efa8694b6522f1da0e6896b->leave($__internal_c28b6de54c855cd61f7de0c940edf796bc83cb6f3efa8694b6522f1da0e6896b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
