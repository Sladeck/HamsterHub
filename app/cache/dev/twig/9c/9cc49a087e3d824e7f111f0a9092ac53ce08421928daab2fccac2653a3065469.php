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
        $__internal_8efa2783452a97581e7af4673635de60d3fafe43b4ccbbcc85207c7111b4c48d = $this->env->getExtension("native_profiler");
        $__internal_8efa2783452a97581e7af4673635de60d3fafe43b4ccbbcc85207c7111b4c48d->enter($__internal_8efa2783452a97581e7af4673635de60d3fafe43b4ccbbcc85207c7111b4c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8efa2783452a97581e7af4673635de60d3fafe43b4ccbbcc85207c7111b4c48d->leave($__internal_8efa2783452a97581e7af4673635de60d3fafe43b4ccbbcc85207c7111b4c48d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_671c60d00216ae43a50fa48b911dbe2d8d1e9d0390dbcc18625c8fa9a4ca62ef = $this->env->getExtension("native_profiler");
        $__internal_671c60d00216ae43a50fa48b911dbe2d8d1e9d0390dbcc18625c8fa9a4ca62ef->enter($__internal_671c60d00216ae43a50fa48b911dbe2d8d1e9d0390dbcc18625c8fa9a4ca62ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_671c60d00216ae43a50fa48b911dbe2d8d1e9d0390dbcc18625c8fa9a4ca62ef->leave($__internal_671c60d00216ae43a50fa48b911dbe2d8d1e9d0390dbcc18625c8fa9a4ca62ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_887420ad2808653cc6c84d2674884f58b6ca54c9228d7c81c3c432e414aa9eb9 = $this->env->getExtension("native_profiler");
        $__internal_887420ad2808653cc6c84d2674884f58b6ca54c9228d7c81c3c432e414aa9eb9->enter($__internal_887420ad2808653cc6c84d2674884f58b6ca54c9228d7c81c3c432e414aa9eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_887420ad2808653cc6c84d2674884f58b6ca54c9228d7c81c3c432e414aa9eb9->leave($__internal_887420ad2808653cc6c84d2674884f58b6ca54c9228d7c81c3c432e414aa9eb9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bec580bf224184cc3af2c4b2c405f45ee3332aa136b31557033675e60ad4f84 = $this->env->getExtension("native_profiler");
        $__internal_8bec580bf224184cc3af2c4b2c405f45ee3332aa136b31557033675e60ad4f84->enter($__internal_8bec580bf224184cc3af2c4b2c405f45ee3332aa136b31557033675e60ad4f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8bec580bf224184cc3af2c4b2c405f45ee3332aa136b31557033675e60ad4f84->leave($__internal_8bec580bf224184cc3af2c4b2c405f45ee3332aa136b31557033675e60ad4f84_prof);

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
