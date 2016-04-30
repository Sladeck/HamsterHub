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
        $__internal_1e534a5ca8743ccf3d96ca2eb18822a73832d532ab8ff3a9a4455fc8200985bb = $this->env->getExtension("native_profiler");
        $__internal_1e534a5ca8743ccf3d96ca2eb18822a73832d532ab8ff3a9a4455fc8200985bb->enter($__internal_1e534a5ca8743ccf3d96ca2eb18822a73832d532ab8ff3a9a4455fc8200985bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e534a5ca8743ccf3d96ca2eb18822a73832d532ab8ff3a9a4455fc8200985bb->leave($__internal_1e534a5ca8743ccf3d96ca2eb18822a73832d532ab8ff3a9a4455fc8200985bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e082206e110ed91af6b458aa77d6eac8503874f45c9c8872c1eb399360f250e3 = $this->env->getExtension("native_profiler");
        $__internal_e082206e110ed91af6b458aa77d6eac8503874f45c9c8872c1eb399360f250e3->enter($__internal_e082206e110ed91af6b458aa77d6eac8503874f45c9c8872c1eb399360f250e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e082206e110ed91af6b458aa77d6eac8503874f45c9c8872c1eb399360f250e3->leave($__internal_e082206e110ed91af6b458aa77d6eac8503874f45c9c8872c1eb399360f250e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0bee6616e80d2f4c9510f6777a83189d85d62c6d264ef921877d6e68eb6cb274 = $this->env->getExtension("native_profiler");
        $__internal_0bee6616e80d2f4c9510f6777a83189d85d62c6d264ef921877d6e68eb6cb274->enter($__internal_0bee6616e80d2f4c9510f6777a83189d85d62c6d264ef921877d6e68eb6cb274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0bee6616e80d2f4c9510f6777a83189d85d62c6d264ef921877d6e68eb6cb274->leave($__internal_0bee6616e80d2f4c9510f6777a83189d85d62c6d264ef921877d6e68eb6cb274_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c369fdd487173271275035f1dd49fd56606cb77e03a2a477d213bc41bfb7cdf = $this->env->getExtension("native_profiler");
        $__internal_4c369fdd487173271275035f1dd49fd56606cb77e03a2a477d213bc41bfb7cdf->enter($__internal_4c369fdd487173271275035f1dd49fd56606cb77e03a2a477d213bc41bfb7cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c369fdd487173271275035f1dd49fd56606cb77e03a2a477d213bc41bfb7cdf->leave($__internal_4c369fdd487173271275035f1dd49fd56606cb77e03a2a477d213bc41bfb7cdf_prof);

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
