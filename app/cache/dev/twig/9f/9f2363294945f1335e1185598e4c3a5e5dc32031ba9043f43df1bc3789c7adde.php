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
        $__internal_5afa2da33822483d0902c7aea08306b91ed8a8f48519c0992b90ffaea7e490eb = $this->env->getExtension("native_profiler");
        $__internal_5afa2da33822483d0902c7aea08306b91ed8a8f48519c0992b90ffaea7e490eb->enter($__internal_5afa2da33822483d0902c7aea08306b91ed8a8f48519c0992b90ffaea7e490eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5afa2da33822483d0902c7aea08306b91ed8a8f48519c0992b90ffaea7e490eb->leave($__internal_5afa2da33822483d0902c7aea08306b91ed8a8f48519c0992b90ffaea7e490eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de68b7d699b88745c26d1667373cdfbf264b44206272fa9182ad6f5c604a6871 = $this->env->getExtension("native_profiler");
        $__internal_de68b7d699b88745c26d1667373cdfbf264b44206272fa9182ad6f5c604a6871->enter($__internal_de68b7d699b88745c26d1667373cdfbf264b44206272fa9182ad6f5c604a6871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_de68b7d699b88745c26d1667373cdfbf264b44206272fa9182ad6f5c604a6871->leave($__internal_de68b7d699b88745c26d1667373cdfbf264b44206272fa9182ad6f5c604a6871_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90751450f92c2ed27f65baa802fc48963ba739c400e1d1e34aee5d8e8f753b86 = $this->env->getExtension("native_profiler");
        $__internal_90751450f92c2ed27f65baa802fc48963ba739c400e1d1e34aee5d8e8f753b86->enter($__internal_90751450f92c2ed27f65baa802fc48963ba739c400e1d1e34aee5d8e8f753b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90751450f92c2ed27f65baa802fc48963ba739c400e1d1e34aee5d8e8f753b86->leave($__internal_90751450f92c2ed27f65baa802fc48963ba739c400e1d1e34aee5d8e8f753b86_prof);

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
