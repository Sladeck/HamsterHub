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
        $__internal_d8434e0ecf4ec999ea377f6e28f306b12ef0626b13ea64cdbfd7b723e08ad562 = $this->env->getExtension("native_profiler");
        $__internal_d8434e0ecf4ec999ea377f6e28f306b12ef0626b13ea64cdbfd7b723e08ad562->enter($__internal_d8434e0ecf4ec999ea377f6e28f306b12ef0626b13ea64cdbfd7b723e08ad562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8434e0ecf4ec999ea377f6e28f306b12ef0626b13ea64cdbfd7b723e08ad562->leave($__internal_d8434e0ecf4ec999ea377f6e28f306b12ef0626b13ea64cdbfd7b723e08ad562_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9570c298cc4a4a1d37db4361a76064cc06d85f0bcc9dc867e299ba8bb0600213 = $this->env->getExtension("native_profiler");
        $__internal_9570c298cc4a4a1d37db4361a76064cc06d85f0bcc9dc867e299ba8bb0600213->enter($__internal_9570c298cc4a4a1d37db4361a76064cc06d85f0bcc9dc867e299ba8bb0600213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9570c298cc4a4a1d37db4361a76064cc06d85f0bcc9dc867e299ba8bb0600213->leave($__internal_9570c298cc4a4a1d37db4361a76064cc06d85f0bcc9dc867e299ba8bb0600213_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21c5b1cacfe3d64abc00467d8b9ee0e0ccca654b5f7add9ff2541df31389b795 = $this->env->getExtension("native_profiler");
        $__internal_21c5b1cacfe3d64abc00467d8b9ee0e0ccca654b5f7add9ff2541df31389b795->enter($__internal_21c5b1cacfe3d64abc00467d8b9ee0e0ccca654b5f7add9ff2541df31389b795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21c5b1cacfe3d64abc00467d8b9ee0e0ccca654b5f7add9ff2541df31389b795->leave($__internal_21c5b1cacfe3d64abc00467d8b9ee0e0ccca654b5f7add9ff2541df31389b795_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51e6dfb5fcef3ce85064f0be0fac6286d38784a32c28fa30ffd382a4f282c4f6 = $this->env->getExtension("native_profiler");
        $__internal_51e6dfb5fcef3ce85064f0be0fac6286d38784a32c28fa30ffd382a4f282c4f6->enter($__internal_51e6dfb5fcef3ce85064f0be0fac6286d38784a32c28fa30ffd382a4f282c4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51e6dfb5fcef3ce85064f0be0fac6286d38784a32c28fa30ffd382a4f282c4f6->leave($__internal_51e6dfb5fcef3ce85064f0be0fac6286d38784a32c28fa30ffd382a4f282c4f6_prof);

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
