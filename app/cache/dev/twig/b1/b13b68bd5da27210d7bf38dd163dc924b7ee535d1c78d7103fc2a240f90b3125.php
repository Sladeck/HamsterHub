<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f87718578e6bd0632dc62cd87af97cf82f262105a6811a0afbffcc223e86ea37 extends Twig_Template
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
        $__internal_9e11a1f89a2a5f5155d64bddbfd8e3b5833a3595eaf7f4973f3a813256424e3a = $this->env->getExtension("native_profiler");
        $__internal_9e11a1f89a2a5f5155d64bddbfd8e3b5833a3595eaf7f4973f3a813256424e3a->enter($__internal_9e11a1f89a2a5f5155d64bddbfd8e3b5833a3595eaf7f4973f3a813256424e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9e11a1f89a2a5f5155d64bddbfd8e3b5833a3595eaf7f4973f3a813256424e3a->leave($__internal_9e11a1f89a2a5f5155d64bddbfd8e3b5833a3595eaf7f4973f3a813256424e3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
