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
        $__internal_f34557f7295480b6f36c5881321bddf77ea793cdecd05320bb0f8a3c1c0d0fb7 = $this->env->getExtension("native_profiler");
        $__internal_f34557f7295480b6f36c5881321bddf77ea793cdecd05320bb0f8a3c1c0d0fb7->enter($__internal_f34557f7295480b6f36c5881321bddf77ea793cdecd05320bb0f8a3c1c0d0fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f34557f7295480b6f36c5881321bddf77ea793cdecd05320bb0f8a3c1c0d0fb7->leave($__internal_f34557f7295480b6f36c5881321bddf77ea793cdecd05320bb0f8a3c1c0d0fb7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48d16bb95dd7f9d17a7b91e7964cc6225f74cdc7ce7d8617f488088056f04676 = $this->env->getExtension("native_profiler");
        $__internal_48d16bb95dd7f9d17a7b91e7964cc6225f74cdc7ce7d8617f488088056f04676->enter($__internal_48d16bb95dd7f9d17a7b91e7964cc6225f74cdc7ce7d8617f488088056f04676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_48d16bb95dd7f9d17a7b91e7964cc6225f74cdc7ce7d8617f488088056f04676->leave($__internal_48d16bb95dd7f9d17a7b91e7964cc6225f74cdc7ce7d8617f488088056f04676_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca64e53198366416c3e246a4821203aecd9501bdcf99f3a7d37e39da7d797a70 = $this->env->getExtension("native_profiler");
        $__internal_ca64e53198366416c3e246a4821203aecd9501bdcf99f3a7d37e39da7d797a70->enter($__internal_ca64e53198366416c3e246a4821203aecd9501bdcf99f3a7d37e39da7d797a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca64e53198366416c3e246a4821203aecd9501bdcf99f3a7d37e39da7d797a70->leave($__internal_ca64e53198366416c3e246a4821203aecd9501bdcf99f3a7d37e39da7d797a70_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_232f585b0287a700359b99e25259c80c4b296770d27d84ee459268ebaa093cbe = $this->env->getExtension("native_profiler");
        $__internal_232f585b0287a700359b99e25259c80c4b296770d27d84ee459268ebaa093cbe->enter($__internal_232f585b0287a700359b99e25259c80c4b296770d27d84ee459268ebaa093cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_232f585b0287a700359b99e25259c80c4b296770d27d84ee459268ebaa093cbe->leave($__internal_232f585b0287a700359b99e25259c80c4b296770d27d84ee459268ebaa093cbe_prof);

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
