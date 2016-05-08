<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fa2ea21a1bfb5d94eac89f8cc885b88d7e419798cf3c6812c8344619e7e2a1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f0b5dd8ea74ec45defba0039a12b66d40a25c448f88ea4d5a65695a44602fbc = $this->env->getExtension("native_profiler");
        $__internal_7f0b5dd8ea74ec45defba0039a12b66d40a25c448f88ea4d5a65695a44602fbc->enter($__internal_7f0b5dd8ea74ec45defba0039a12b66d40a25c448f88ea4d5a65695a44602fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f0b5dd8ea74ec45defba0039a12b66d40a25c448f88ea4d5a65695a44602fbc->leave($__internal_7f0b5dd8ea74ec45defba0039a12b66d40a25c448f88ea4d5a65695a44602fbc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b091067f7298574abd7c74a551e2374b6466b919d642562fae11787dedfbfc19 = $this->env->getExtension("native_profiler");
        $__internal_b091067f7298574abd7c74a551e2374b6466b919d642562fae11787dedfbfc19->enter($__internal_b091067f7298574abd7c74a551e2374b6466b919d642562fae11787dedfbfc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b091067f7298574abd7c74a551e2374b6466b919d642562fae11787dedfbfc19->leave($__internal_b091067f7298574abd7c74a551e2374b6466b919d642562fae11787dedfbfc19_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e39add7ad780f5abe226d50b0298c0ce802d7d9170deefd70bc9d6ef7c116ebf = $this->env->getExtension("native_profiler");
        $__internal_e39add7ad780f5abe226d50b0298c0ce802d7d9170deefd70bc9d6ef7c116ebf->enter($__internal_e39add7ad780f5abe226d50b0298c0ce802d7d9170deefd70bc9d6ef7c116ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e39add7ad780f5abe226d50b0298c0ce802d7d9170deefd70bc9d6ef7c116ebf->leave($__internal_e39add7ad780f5abe226d50b0298c0ce802d7d9170deefd70bc9d6ef7c116ebf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7c5fedc8124c239a1689bb29530d94c9d13c5ad5dd5fe5c13ad57dbcc874de1 = $this->env->getExtension("native_profiler");
        $__internal_d7c5fedc8124c239a1689bb29530d94c9d13c5ad5dd5fe5c13ad57dbcc874de1->enter($__internal_d7c5fedc8124c239a1689bb29530d94c9d13c5ad5dd5fe5c13ad57dbcc874de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7c5fedc8124c239a1689bb29530d94c9d13c5ad5dd5fe5c13ad57dbcc874de1->leave($__internal_d7c5fedc8124c239a1689bb29530d94c9d13c5ad5dd5fe5c13ad57dbcc874de1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
