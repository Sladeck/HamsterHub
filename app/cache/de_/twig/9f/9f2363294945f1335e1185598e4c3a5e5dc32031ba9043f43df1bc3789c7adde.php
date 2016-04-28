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
        $__internal_fe5762d983403a8ad4f80592306215b8e344a6fcc42ca30f6734575e92a1db87 = $this->env->getExtension("native_profiler");
        $__internal_fe5762d983403a8ad4f80592306215b8e344a6fcc42ca30f6734575e92a1db87->enter($__internal_fe5762d983403a8ad4f80592306215b8e344a6fcc42ca30f6734575e92a1db87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe5762d983403a8ad4f80592306215b8e344a6fcc42ca30f6734575e92a1db87->leave($__internal_fe5762d983403a8ad4f80592306215b8e344a6fcc42ca30f6734575e92a1db87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a559955b4be372a535dbb9bf2eadae2ff54aae241547b0cba421e375a30a8084 = $this->env->getExtension("native_profiler");
        $__internal_a559955b4be372a535dbb9bf2eadae2ff54aae241547b0cba421e375a30a8084->enter($__internal_a559955b4be372a535dbb9bf2eadae2ff54aae241547b0cba421e375a30a8084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a559955b4be372a535dbb9bf2eadae2ff54aae241547b0cba421e375a30a8084->leave($__internal_a559955b4be372a535dbb9bf2eadae2ff54aae241547b0cba421e375a30a8084_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9124114df9b4bf169ef90e7687e81dd81dd01125e4f8f79cff493629401c1d2 = $this->env->getExtension("native_profiler");
        $__internal_e9124114df9b4bf169ef90e7687e81dd81dd01125e4f8f79cff493629401c1d2->enter($__internal_e9124114df9b4bf169ef90e7687e81dd81dd01125e4f8f79cff493629401c1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e9124114df9b4bf169ef90e7687e81dd81dd01125e4f8f79cff493629401c1d2->leave($__internal_e9124114df9b4bf169ef90e7687e81dd81dd01125e4f8f79cff493629401c1d2_prof);

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
