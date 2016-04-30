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
        $__internal_88eed4c8e5600b9753efb561de9ab8186763af14ea785a7bc00faafc6a37c221 = $this->env->getExtension("native_profiler");
        $__internal_88eed4c8e5600b9753efb561de9ab8186763af14ea785a7bc00faafc6a37c221->enter($__internal_88eed4c8e5600b9753efb561de9ab8186763af14ea785a7bc00faafc6a37c221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88eed4c8e5600b9753efb561de9ab8186763af14ea785a7bc00faafc6a37c221->leave($__internal_88eed4c8e5600b9753efb561de9ab8186763af14ea785a7bc00faafc6a37c221_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37c9cbd2f70912d1ed0e7a9a1f3b3eca986d5490e5d980d1eafeaa179f8efd55 = $this->env->getExtension("native_profiler");
        $__internal_37c9cbd2f70912d1ed0e7a9a1f3b3eca986d5490e5d980d1eafeaa179f8efd55->enter($__internal_37c9cbd2f70912d1ed0e7a9a1f3b3eca986d5490e5d980d1eafeaa179f8efd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37c9cbd2f70912d1ed0e7a9a1f3b3eca986d5490e5d980d1eafeaa179f8efd55->leave($__internal_37c9cbd2f70912d1ed0e7a9a1f3b3eca986d5490e5d980d1eafeaa179f8efd55_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3d85836fa565fd602d7c6c0caac7879350b3a5a39a62d673e7ac2e21a161bb1 = $this->env->getExtension("native_profiler");
        $__internal_d3d85836fa565fd602d7c6c0caac7879350b3a5a39a62d673e7ac2e21a161bb1->enter($__internal_d3d85836fa565fd602d7c6c0caac7879350b3a5a39a62d673e7ac2e21a161bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3d85836fa565fd602d7c6c0caac7879350b3a5a39a62d673e7ac2e21a161bb1->leave($__internal_d3d85836fa565fd602d7c6c0caac7879350b3a5a39a62d673e7ac2e21a161bb1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56a56ecf2398cb262c7ea0cb9393ccdca9453d2ebd833b021a8ca96eb0ab4218 = $this->env->getExtension("native_profiler");
        $__internal_56a56ecf2398cb262c7ea0cb9393ccdca9453d2ebd833b021a8ca96eb0ab4218->enter($__internal_56a56ecf2398cb262c7ea0cb9393ccdca9453d2ebd833b021a8ca96eb0ab4218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56a56ecf2398cb262c7ea0cb9393ccdca9453d2ebd833b021a8ca96eb0ab4218->leave($__internal_56a56ecf2398cb262c7ea0cb9393ccdca9453d2ebd833b021a8ca96eb0ab4218_prof);

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
