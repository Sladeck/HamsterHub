<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_69bfeea000e313d283276026edbdf2b7aa3abb53e89aa1dbeccc10aa69baa027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c295190ef926b1da9518213adda0b7b7fa31e70514fa7a9c607faa11ebd12a22 = $this->env->getExtension("native_profiler");
        $__internal_c295190ef926b1da9518213adda0b7b7fa31e70514fa7a9c607faa11ebd12a22->enter($__internal_c295190ef926b1da9518213adda0b7b7fa31e70514fa7a9c607faa11ebd12a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c295190ef926b1da9518213adda0b7b7fa31e70514fa7a9c607faa11ebd12a22->leave($__internal_c295190ef926b1da9518213adda0b7b7fa31e70514fa7a9c607faa11ebd12a22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d6d382eff9e02853473966a2ec50812d3cf8bf11637a8c9179644fb7759fc0f = $this->env->getExtension("native_profiler");
        $__internal_5d6d382eff9e02853473966a2ec50812d3cf8bf11637a8c9179644fb7759fc0f->enter($__internal_5d6d382eff9e02853473966a2ec50812d3cf8bf11637a8c9179644fb7759fc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5d6d382eff9e02853473966a2ec50812d3cf8bf11637a8c9179644fb7759fc0f->leave($__internal_5d6d382eff9e02853473966a2ec50812d3cf8bf11637a8c9179644fb7759fc0f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_55c35f5d003e5cb0e10fceedae563fe5c5dc3bd1faf894969ee0a446823a27f5 = $this->env->getExtension("native_profiler");
        $__internal_55c35f5d003e5cb0e10fceedae563fe5c5dc3bd1faf894969ee0a446823a27f5->enter($__internal_55c35f5d003e5cb0e10fceedae563fe5c5dc3bd1faf894969ee0a446823a27f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_55c35f5d003e5cb0e10fceedae563fe5c5dc3bd1faf894969ee0a446823a27f5->leave($__internal_55c35f5d003e5cb0e10fceedae563fe5c5dc3bd1faf894969ee0a446823a27f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
