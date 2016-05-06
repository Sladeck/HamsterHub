<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_832726a63f86fd6af1a1aba33664b0b6d8e86ac09ea96bd45370e06f404e4314 extends Twig_Template
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
        $__internal_0ee4d58fefe67ab6c00a22ce0cdbe3521b590d8637b158da3354072f5d55315c = $this->env->getExtension("native_profiler");
        $__internal_0ee4d58fefe67ab6c00a22ce0cdbe3521b590d8637b158da3354072f5d55315c->enter($__internal_0ee4d58fefe67ab6c00a22ce0cdbe3521b590d8637b158da3354072f5d55315c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0ee4d58fefe67ab6c00a22ce0cdbe3521b590d8637b158da3354072f5d55315c->leave($__internal_0ee4d58fefe67ab6c00a22ce0cdbe3521b590d8637b158da3354072f5d55315c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
