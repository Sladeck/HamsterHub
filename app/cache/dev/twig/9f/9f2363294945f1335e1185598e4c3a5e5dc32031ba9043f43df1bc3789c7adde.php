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
        $__internal_7bd5363bd11849ccad518d6640ac007945e8f25607b72d2c5ef5ec0ce140373a = $this->env->getExtension("native_profiler");
        $__internal_7bd5363bd11849ccad518d6640ac007945e8f25607b72d2c5ef5ec0ce140373a->enter($__internal_7bd5363bd11849ccad518d6640ac007945e8f25607b72d2c5ef5ec0ce140373a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bd5363bd11849ccad518d6640ac007945e8f25607b72d2c5ef5ec0ce140373a->leave($__internal_7bd5363bd11849ccad518d6640ac007945e8f25607b72d2c5ef5ec0ce140373a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dec99e4236dca2225ec5398a4f74fde60bbe6cd65f2cf8f11d02442b70b160e = $this->env->getExtension("native_profiler");
        $__internal_8dec99e4236dca2225ec5398a4f74fde60bbe6cd65f2cf8f11d02442b70b160e->enter($__internal_8dec99e4236dca2225ec5398a4f74fde60bbe6cd65f2cf8f11d02442b70b160e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8dec99e4236dca2225ec5398a4f74fde60bbe6cd65f2cf8f11d02442b70b160e->leave($__internal_8dec99e4236dca2225ec5398a4f74fde60bbe6cd65f2cf8f11d02442b70b160e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f7af2e82ce771f563e297de0743e9c5dfabe9f85cd9d6f8e451b49541900f97 = $this->env->getExtension("native_profiler");
        $__internal_2f7af2e82ce771f563e297de0743e9c5dfabe9f85cd9d6f8e451b49541900f97->enter($__internal_2f7af2e82ce771f563e297de0743e9c5dfabe9f85cd9d6f8e451b49541900f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f7af2e82ce771f563e297de0743e9c5dfabe9f85cd9d6f8e451b49541900f97->leave($__internal_2f7af2e82ce771f563e297de0743e9c5dfabe9f85cd9d6f8e451b49541900f97_prof);

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
