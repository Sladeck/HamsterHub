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
        $__internal_bea41376d790e9b483485f7a6ee40cf764372a352d3d8fe9cbcedc882db479ea = $this->env->getExtension("native_profiler");
        $__internal_bea41376d790e9b483485f7a6ee40cf764372a352d3d8fe9cbcedc882db479ea->enter($__internal_bea41376d790e9b483485f7a6ee40cf764372a352d3d8fe9cbcedc882db479ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea41376d790e9b483485f7a6ee40cf764372a352d3d8fe9cbcedc882db479ea->leave($__internal_bea41376d790e9b483485f7a6ee40cf764372a352d3d8fe9cbcedc882db479ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5aefbfaf3b58dfaaf4e51102cada73388ada0e6d7560bb72f10121ca4e46cabc = $this->env->getExtension("native_profiler");
        $__internal_5aefbfaf3b58dfaaf4e51102cada73388ada0e6d7560bb72f10121ca4e46cabc->enter($__internal_5aefbfaf3b58dfaaf4e51102cada73388ada0e6d7560bb72f10121ca4e46cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5aefbfaf3b58dfaaf4e51102cada73388ada0e6d7560bb72f10121ca4e46cabc->leave($__internal_5aefbfaf3b58dfaaf4e51102cada73388ada0e6d7560bb72f10121ca4e46cabc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f316957b0c1deff36cea0019e651cc5c4ea079e65543301772f942a309a6895 = $this->env->getExtension("native_profiler");
        $__internal_3f316957b0c1deff36cea0019e651cc5c4ea079e65543301772f942a309a6895->enter($__internal_3f316957b0c1deff36cea0019e651cc5c4ea079e65543301772f942a309a6895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3f316957b0c1deff36cea0019e651cc5c4ea079e65543301772f942a309a6895->leave($__internal_3f316957b0c1deff36cea0019e651cc5c4ea079e65543301772f942a309a6895_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7eb4dc1733ba7a2fa84baa9bb15b828e0d267a3d63d8a3bd221fd429e6454cf = $this->env->getExtension("native_profiler");
        $__internal_c7eb4dc1733ba7a2fa84baa9bb15b828e0d267a3d63d8a3bd221fd429e6454cf->enter($__internal_c7eb4dc1733ba7a2fa84baa9bb15b828e0d267a3d63d8a3bd221fd429e6454cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c7eb4dc1733ba7a2fa84baa9bb15b828e0d267a3d63d8a3bd221fd429e6454cf->leave($__internal_c7eb4dc1733ba7a2fa84baa9bb15b828e0d267a3d63d8a3bd221fd429e6454cf_prof);

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
