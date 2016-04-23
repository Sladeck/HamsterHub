<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_11d8e63dcd5465d5297b89ed9592823a9d74a1ee1651fea55f9254070c72f8a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_9e490eb32e56d918d78473dabbaf2b78848c04f8a5b23342d290c7d3f6c003d7 = $this->env->getExtension("native_profiler");
        $__internal_9e490eb32e56d918d78473dabbaf2b78848c04f8a5b23342d290c7d3f6c003d7->enter($__internal_9e490eb32e56d918d78473dabbaf2b78848c04f8a5b23342d290c7d3f6c003d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e490eb32e56d918d78473dabbaf2b78848c04f8a5b23342d290c7d3f6c003d7->leave($__internal_9e490eb32e56d918d78473dabbaf2b78848c04f8a5b23342d290c7d3f6c003d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_290305f0740062f2adb4a65178ccb1274c58cfea938f3825c3ae868102a500cb = $this->env->getExtension("native_profiler");
        $__internal_290305f0740062f2adb4a65178ccb1274c58cfea938f3825c3ae868102a500cb->enter($__internal_290305f0740062f2adb4a65178ccb1274c58cfea938f3825c3ae868102a500cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_290305f0740062f2adb4a65178ccb1274c58cfea938f3825c3ae868102a500cb->leave($__internal_290305f0740062f2adb4a65178ccb1274c58cfea938f3825c3ae868102a500cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7399198972d172db98565543cfbc9874ea03b92617fca77df860e6506a18870a = $this->env->getExtension("native_profiler");
        $__internal_7399198972d172db98565543cfbc9874ea03b92617fca77df860e6506a18870a->enter($__internal_7399198972d172db98565543cfbc9874ea03b92617fca77df860e6506a18870a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7399198972d172db98565543cfbc9874ea03b92617fca77df860e6506a18870a->leave($__internal_7399198972d172db98565543cfbc9874ea03b92617fca77df860e6506a18870a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6567cfbeca9d76cdcc538d1582b3c3f6fc7825aff336cb6b987c1059883304aa = $this->env->getExtension("native_profiler");
        $__internal_6567cfbeca9d76cdcc538d1582b3c3f6fc7825aff336cb6b987c1059883304aa->enter($__internal_6567cfbeca9d76cdcc538d1582b3c3f6fc7825aff336cb6b987c1059883304aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6567cfbeca9d76cdcc538d1582b3c3f6fc7825aff336cb6b987c1059883304aa->leave($__internal_6567cfbeca9d76cdcc538d1582b3c3f6fc7825aff336cb6b987c1059883304aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
