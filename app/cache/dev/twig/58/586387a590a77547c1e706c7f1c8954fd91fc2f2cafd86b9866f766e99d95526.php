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
        $__internal_927396645d6a2612f9a3410d79182c597d729bd8e383b49f76b4698e8733570e = $this->env->getExtension("native_profiler");
        $__internal_927396645d6a2612f9a3410d79182c597d729bd8e383b49f76b4698e8733570e->enter($__internal_927396645d6a2612f9a3410d79182c597d729bd8e383b49f76b4698e8733570e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_927396645d6a2612f9a3410d79182c597d729bd8e383b49f76b4698e8733570e->leave($__internal_927396645d6a2612f9a3410d79182c597d729bd8e383b49f76b4698e8733570e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_409424a6d5346e822350ddc6611f24cc922b062c5b06715d575222e6924e0a03 = $this->env->getExtension("native_profiler");
        $__internal_409424a6d5346e822350ddc6611f24cc922b062c5b06715d575222e6924e0a03->enter($__internal_409424a6d5346e822350ddc6611f24cc922b062c5b06715d575222e6924e0a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_409424a6d5346e822350ddc6611f24cc922b062c5b06715d575222e6924e0a03->leave($__internal_409424a6d5346e822350ddc6611f24cc922b062c5b06715d575222e6924e0a03_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5045e13578a8ded46bd39750f75b770e90723bc4a2579b01b1a0e2c77b3562e0 = $this->env->getExtension("native_profiler");
        $__internal_5045e13578a8ded46bd39750f75b770e90723bc4a2579b01b1a0e2c77b3562e0->enter($__internal_5045e13578a8ded46bd39750f75b770e90723bc4a2579b01b1a0e2c77b3562e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5045e13578a8ded46bd39750f75b770e90723bc4a2579b01b1a0e2c77b3562e0->leave($__internal_5045e13578a8ded46bd39750f75b770e90723bc4a2579b01b1a0e2c77b3562e0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_078538ac60584d790eb52f47da56b1571a55d668b410c5276c385931e4fd0f38 = $this->env->getExtension("native_profiler");
        $__internal_078538ac60584d790eb52f47da56b1571a55d668b410c5276c385931e4fd0f38->enter($__internal_078538ac60584d790eb52f47da56b1571a55d668b410c5276c385931e4fd0f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_078538ac60584d790eb52f47da56b1571a55d668b410c5276c385931e4fd0f38->leave($__internal_078538ac60584d790eb52f47da56b1571a55d668b410c5276c385931e4fd0f38_prof);

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
