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
        $__internal_081fb7be16e04a3a923cf4464d10dc3041266e2855033c190e2bf839f62417a0 = $this->env->getExtension("native_profiler");
        $__internal_081fb7be16e04a3a923cf4464d10dc3041266e2855033c190e2bf839f62417a0->enter($__internal_081fb7be16e04a3a923cf4464d10dc3041266e2855033c190e2bf839f62417a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_081fb7be16e04a3a923cf4464d10dc3041266e2855033c190e2bf839f62417a0->leave($__internal_081fb7be16e04a3a923cf4464d10dc3041266e2855033c190e2bf839f62417a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_089508dfcfe0164e61f9454ee3697da6812fa0c2018893a7556bdf4f55794e4f = $this->env->getExtension("native_profiler");
        $__internal_089508dfcfe0164e61f9454ee3697da6812fa0c2018893a7556bdf4f55794e4f->enter($__internal_089508dfcfe0164e61f9454ee3697da6812fa0c2018893a7556bdf4f55794e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_089508dfcfe0164e61f9454ee3697da6812fa0c2018893a7556bdf4f55794e4f->leave($__internal_089508dfcfe0164e61f9454ee3697da6812fa0c2018893a7556bdf4f55794e4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42a2bd556b7b98f63a2f24beef66e6cfa6bcce0e0230da0e82175608d0957707 = $this->env->getExtension("native_profiler");
        $__internal_42a2bd556b7b98f63a2f24beef66e6cfa6bcce0e0230da0e82175608d0957707->enter($__internal_42a2bd556b7b98f63a2f24beef66e6cfa6bcce0e0230da0e82175608d0957707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42a2bd556b7b98f63a2f24beef66e6cfa6bcce0e0230da0e82175608d0957707->leave($__internal_42a2bd556b7b98f63a2f24beef66e6cfa6bcce0e0230da0e82175608d0957707_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f943cdd391562be8541733e9398477cdd0d9e628124bca12d9baf59990b2f0f8 = $this->env->getExtension("native_profiler");
        $__internal_f943cdd391562be8541733e9398477cdd0d9e628124bca12d9baf59990b2f0f8->enter($__internal_f943cdd391562be8541733e9398477cdd0d9e628124bca12d9baf59990b2f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f943cdd391562be8541733e9398477cdd0d9e628124bca12d9baf59990b2f0f8->leave($__internal_f943cdd391562be8541733e9398477cdd0d9e628124bca12d9baf59990b2f0f8_prof);

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
