<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9b3e353863fb9fb5e10df2f8eb522e34c76a7d1bad7974c9ec2bcb30877bf5cf extends Twig_Template
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
        $__internal_37b0594d6a893865cb2113551fbe21c9095a4630387b782cfe8d23a61d7a2fe6 = $this->env->getExtension("native_profiler");
        $__internal_37b0594d6a893865cb2113551fbe21c9095a4630387b782cfe8d23a61d7a2fe6->enter($__internal_37b0594d6a893865cb2113551fbe21c9095a4630387b782cfe8d23a61d7a2fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_37b0594d6a893865cb2113551fbe21c9095a4630387b782cfe8d23a61d7a2fe6->leave($__internal_37b0594d6a893865cb2113551fbe21c9095a4630387b782cfe8d23a61d7a2fe6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
