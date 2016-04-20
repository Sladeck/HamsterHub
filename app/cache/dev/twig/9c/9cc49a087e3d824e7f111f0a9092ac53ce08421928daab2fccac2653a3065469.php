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
        $__internal_febf43b2a7bc59d024844146bc439dee72be080d0203f364089e9c935608cf5c = $this->env->getExtension("native_profiler");
        $__internal_febf43b2a7bc59d024844146bc439dee72be080d0203f364089e9c935608cf5c->enter($__internal_febf43b2a7bc59d024844146bc439dee72be080d0203f364089e9c935608cf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_febf43b2a7bc59d024844146bc439dee72be080d0203f364089e9c935608cf5c->leave($__internal_febf43b2a7bc59d024844146bc439dee72be080d0203f364089e9c935608cf5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7ad5d7c88c811bcaad67406004f70fa9c0ea01a4548783748cdd062b8abbb19 = $this->env->getExtension("native_profiler");
        $__internal_e7ad5d7c88c811bcaad67406004f70fa9c0ea01a4548783748cdd062b8abbb19->enter($__internal_e7ad5d7c88c811bcaad67406004f70fa9c0ea01a4548783748cdd062b8abbb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e7ad5d7c88c811bcaad67406004f70fa9c0ea01a4548783748cdd062b8abbb19->leave($__internal_e7ad5d7c88c811bcaad67406004f70fa9c0ea01a4548783748cdd062b8abbb19_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d213057d8dd5622d70d05841f89c48c73fb58802ba60a26e005f737ede5d25ab = $this->env->getExtension("native_profiler");
        $__internal_d213057d8dd5622d70d05841f89c48c73fb58802ba60a26e005f737ede5d25ab->enter($__internal_d213057d8dd5622d70d05841f89c48c73fb58802ba60a26e005f737ede5d25ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d213057d8dd5622d70d05841f89c48c73fb58802ba60a26e005f737ede5d25ab->leave($__internal_d213057d8dd5622d70d05841f89c48c73fb58802ba60a26e005f737ede5d25ab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a05e9f577ff5c39c77ef15a437ab08ace01cfaf60b885ddf1f07b49c47cff9d0 = $this->env->getExtension("native_profiler");
        $__internal_a05e9f577ff5c39c77ef15a437ab08ace01cfaf60b885ddf1f07b49c47cff9d0->enter($__internal_a05e9f577ff5c39c77ef15a437ab08ace01cfaf60b885ddf1f07b49c47cff9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a05e9f577ff5c39c77ef15a437ab08ace01cfaf60b885ddf1f07b49c47cff9d0->leave($__internal_a05e9f577ff5c39c77ef15a437ab08ace01cfaf60b885ddf1f07b49c47cff9d0_prof);

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
