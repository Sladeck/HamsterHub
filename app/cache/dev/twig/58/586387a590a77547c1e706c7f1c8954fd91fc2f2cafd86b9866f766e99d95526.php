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
        $__internal_9910266fa8383e635f575aca96042f3e218047686aac2dc8e4790a9e1816de05 = $this->env->getExtension("native_profiler");
        $__internal_9910266fa8383e635f575aca96042f3e218047686aac2dc8e4790a9e1816de05->enter($__internal_9910266fa8383e635f575aca96042f3e218047686aac2dc8e4790a9e1816de05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9910266fa8383e635f575aca96042f3e218047686aac2dc8e4790a9e1816de05->leave($__internal_9910266fa8383e635f575aca96042f3e218047686aac2dc8e4790a9e1816de05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_538f66de6bc66b2a6c124d2f0b3a31b8cf8c04459dbac434b748ce059aec69d7 = $this->env->getExtension("native_profiler");
        $__internal_538f66de6bc66b2a6c124d2f0b3a31b8cf8c04459dbac434b748ce059aec69d7->enter($__internal_538f66de6bc66b2a6c124d2f0b3a31b8cf8c04459dbac434b748ce059aec69d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_538f66de6bc66b2a6c124d2f0b3a31b8cf8c04459dbac434b748ce059aec69d7->leave($__internal_538f66de6bc66b2a6c124d2f0b3a31b8cf8c04459dbac434b748ce059aec69d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01a018e0bc326721428230c5feaf3dd855beca5318036c9d516d2dc9f8c52752 = $this->env->getExtension("native_profiler");
        $__internal_01a018e0bc326721428230c5feaf3dd855beca5318036c9d516d2dc9f8c52752->enter($__internal_01a018e0bc326721428230c5feaf3dd855beca5318036c9d516d2dc9f8c52752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_01a018e0bc326721428230c5feaf3dd855beca5318036c9d516d2dc9f8c52752->leave($__internal_01a018e0bc326721428230c5feaf3dd855beca5318036c9d516d2dc9f8c52752_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48308dd033bfe621f9b6e8a37df7d25ce5df0e7ef67fbb68ab993732ea9eeb36 = $this->env->getExtension("native_profiler");
        $__internal_48308dd033bfe621f9b6e8a37df7d25ce5df0e7ef67fbb68ab993732ea9eeb36->enter($__internal_48308dd033bfe621f9b6e8a37df7d25ce5df0e7ef67fbb68ab993732ea9eeb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_48308dd033bfe621f9b6e8a37df7d25ce5df0e7ef67fbb68ab993732ea9eeb36->leave($__internal_48308dd033bfe621f9b6e8a37df7d25ce5df0e7ef67fbb68ab993732ea9eeb36_prof);

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
