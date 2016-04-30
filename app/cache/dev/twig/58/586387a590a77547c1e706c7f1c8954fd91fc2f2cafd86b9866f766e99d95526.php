<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a6147e9a7e45e40f5dfcb701f260b2145055b586ab7c197112ef997ba1e8984f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9184760b7bf4e18b8e8d2bffb098b71887daa8fdb83ec5f8bf4f9c3c0f10c70 = $this->env->getExtension("native_profiler");
        $__internal_a9184760b7bf4e18b8e8d2bffb098b71887daa8fdb83ec5f8bf4f9c3c0f10c70->enter($__internal_a9184760b7bf4e18b8e8d2bffb098b71887daa8fdb83ec5f8bf4f9c3c0f10c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9184760b7bf4e18b8e8d2bffb098b71887daa8fdb83ec5f8bf4f9c3c0f10c70->leave($__internal_a9184760b7bf4e18b8e8d2bffb098b71887daa8fdb83ec5f8bf4f9c3c0f10c70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab433d2dd20ad89a601009d14483b01a5e0acc0dc87deaa4691e6d5614448164 = $this->env->getExtension("native_profiler");
        $__internal_ab433d2dd20ad89a601009d14483b01a5e0acc0dc87deaa4691e6d5614448164->enter($__internal_ab433d2dd20ad89a601009d14483b01a5e0acc0dc87deaa4691e6d5614448164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ab433d2dd20ad89a601009d14483b01a5e0acc0dc87deaa4691e6d5614448164->leave($__internal_ab433d2dd20ad89a601009d14483b01a5e0acc0dc87deaa4691e6d5614448164_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7be9d6a01bc841d0297b73d220987bec1c1180d9874d6dd2ea520e9e90e19434 = $this->env->getExtension("native_profiler");
        $__internal_7be9d6a01bc841d0297b73d220987bec1c1180d9874d6dd2ea520e9e90e19434->enter($__internal_7be9d6a01bc841d0297b73d220987bec1c1180d9874d6dd2ea520e9e90e19434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7be9d6a01bc841d0297b73d220987bec1c1180d9874d6dd2ea520e9e90e19434->leave($__internal_7be9d6a01bc841d0297b73d220987bec1c1180d9874d6dd2ea520e9e90e19434_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b7cfc4fb4ad3586288d425570f1c0aedf87b3dd80c05ddc3a571877e43be2f = $this->env->getExtension("native_profiler");
        $__internal_b0b7cfc4fb4ad3586288d425570f1c0aedf87b3dd80c05ddc3a571877e43be2f->enter($__internal_b0b7cfc4fb4ad3586288d425570f1c0aedf87b3dd80c05ddc3a571877e43be2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b0b7cfc4fb4ad3586288d425570f1c0aedf87b3dd80c05ddc3a571877e43be2f->leave($__internal_b0b7cfc4fb4ad3586288d425570f1c0aedf87b3dd80c05ddc3a571877e43be2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
