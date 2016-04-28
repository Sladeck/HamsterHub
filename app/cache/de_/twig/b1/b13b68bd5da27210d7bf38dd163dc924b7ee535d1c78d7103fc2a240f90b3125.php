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
        $__internal_913aa7ee80aa3ec43f421c352a3da6cfdc6bc410659b76ee58cf702c66132724 = $this->env->getExtension("native_profiler");
        $__internal_913aa7ee80aa3ec43f421c352a3da6cfdc6bc410659b76ee58cf702c66132724->enter($__internal_913aa7ee80aa3ec43f421c352a3da6cfdc6bc410659b76ee58cf702c66132724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_913aa7ee80aa3ec43f421c352a3da6cfdc6bc410659b76ee58cf702c66132724->leave($__internal_913aa7ee80aa3ec43f421c352a3da6cfdc6bc410659b76ee58cf702c66132724_prof);

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
