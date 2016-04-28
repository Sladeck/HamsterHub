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
        $__internal_8a9f7ecc201b1124f121b08c010ae67e0c4b2f196619f196ebe0e2d8caebb054 = $this->env->getExtension("native_profiler");
        $__internal_8a9f7ecc201b1124f121b08c010ae67e0c4b2f196619f196ebe0e2d8caebb054->enter($__internal_8a9f7ecc201b1124f121b08c010ae67e0c4b2f196619f196ebe0e2d8caebb054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9f7ecc201b1124f121b08c010ae67e0c4b2f196619f196ebe0e2d8caebb054->leave($__internal_8a9f7ecc201b1124f121b08c010ae67e0c4b2f196619f196ebe0e2d8caebb054_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e32ea7f272f2027f41d8ddb2cb9c69c54b5bd8de8d3ba4044f49ba55a6142df = $this->env->getExtension("native_profiler");
        $__internal_3e32ea7f272f2027f41d8ddb2cb9c69c54b5bd8de8d3ba4044f49ba55a6142df->enter($__internal_3e32ea7f272f2027f41d8ddb2cb9c69c54b5bd8de8d3ba4044f49ba55a6142df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3e32ea7f272f2027f41d8ddb2cb9c69c54b5bd8de8d3ba4044f49ba55a6142df->leave($__internal_3e32ea7f272f2027f41d8ddb2cb9c69c54b5bd8de8d3ba4044f49ba55a6142df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2650eec2ccd248556c6582e5a26788b0e550ca74d9e72b802b03bfa8c51d3bb6 = $this->env->getExtension("native_profiler");
        $__internal_2650eec2ccd248556c6582e5a26788b0e550ca74d9e72b802b03bfa8c51d3bb6->enter($__internal_2650eec2ccd248556c6582e5a26788b0e550ca74d9e72b802b03bfa8c51d3bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2650eec2ccd248556c6582e5a26788b0e550ca74d9e72b802b03bfa8c51d3bb6->leave($__internal_2650eec2ccd248556c6582e5a26788b0e550ca74d9e72b802b03bfa8c51d3bb6_prof);

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
