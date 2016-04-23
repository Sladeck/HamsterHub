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
        $__internal_8f1b7542668471e6884d5540f29608adeb5f230496e53918b927f6441057391f = $this->env->getExtension("native_profiler");
        $__internal_8f1b7542668471e6884d5540f29608adeb5f230496e53918b927f6441057391f->enter($__internal_8f1b7542668471e6884d5540f29608adeb5f230496e53918b927f6441057391f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f1b7542668471e6884d5540f29608adeb5f230496e53918b927f6441057391f->leave($__internal_8f1b7542668471e6884d5540f29608adeb5f230496e53918b927f6441057391f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_600e2908b0ac66b414bae88d3cd2de4d47e9fdae40266389393c73a1b8f4d1f1 = $this->env->getExtension("native_profiler");
        $__internal_600e2908b0ac66b414bae88d3cd2de4d47e9fdae40266389393c73a1b8f4d1f1->enter($__internal_600e2908b0ac66b414bae88d3cd2de4d47e9fdae40266389393c73a1b8f4d1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_600e2908b0ac66b414bae88d3cd2de4d47e9fdae40266389393c73a1b8f4d1f1->leave($__internal_600e2908b0ac66b414bae88d3cd2de4d47e9fdae40266389393c73a1b8f4d1f1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d29e9d7099021a69846e7ba5ea8fd7b7d5d6dcdf34ed1a009f4e84e39dd3f7f0 = $this->env->getExtension("native_profiler");
        $__internal_d29e9d7099021a69846e7ba5ea8fd7b7d5d6dcdf34ed1a009f4e84e39dd3f7f0->enter($__internal_d29e9d7099021a69846e7ba5ea8fd7b7d5d6dcdf34ed1a009f4e84e39dd3f7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d29e9d7099021a69846e7ba5ea8fd7b7d5d6dcdf34ed1a009f4e84e39dd3f7f0->leave($__internal_d29e9d7099021a69846e7ba5ea8fd7b7d5d6dcdf34ed1a009f4e84e39dd3f7f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9813ced5d2c4fc7927d566b50ea978ccea43a69e00f03448455e025d460fc132 = $this->env->getExtension("native_profiler");
        $__internal_9813ced5d2c4fc7927d566b50ea978ccea43a69e00f03448455e025d460fc132->enter($__internal_9813ced5d2c4fc7927d566b50ea978ccea43a69e00f03448455e025d460fc132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9813ced5d2c4fc7927d566b50ea978ccea43a69e00f03448455e025d460fc132->leave($__internal_9813ced5d2c4fc7927d566b50ea978ccea43a69e00f03448455e025d460fc132_prof);

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
