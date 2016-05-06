<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_921fb491734661b1a80eab9f727c72dab90b47e15f075ef0fa622be050c92a6c extends Twig_Template
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
        $__internal_cc9b0ef51c68c50090ae17befaa44f7e6ded80a378ac4e66451a7f48cdafdf36 = $this->env->getExtension("native_profiler");
        $__internal_cc9b0ef51c68c50090ae17befaa44f7e6ded80a378ac4e66451a7f48cdafdf36->enter($__internal_cc9b0ef51c68c50090ae17befaa44f7e6ded80a378ac4e66451a7f48cdafdf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cc9b0ef51c68c50090ae17befaa44f7e6ded80a378ac4e66451a7f48cdafdf36->leave($__internal_cc9b0ef51c68c50090ae17befaa44f7e6ded80a378ac4e66451a7f48cdafdf36_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
