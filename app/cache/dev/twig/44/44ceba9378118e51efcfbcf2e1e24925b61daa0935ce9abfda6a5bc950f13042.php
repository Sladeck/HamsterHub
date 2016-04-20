<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3408e39a64c93f2a7c464b182344b04f4eeddc7158d85322e4f1e2bd017dde62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9055a41b4b5f58dc1a680542e546de0cc64946963b1843724cf7d4b4b3a521aa = $this->env->getExtension("native_profiler");
        $__internal_9055a41b4b5f58dc1a680542e546de0cc64946963b1843724cf7d4b4b3a521aa->enter($__internal_9055a41b4b5f58dc1a680542e546de0cc64946963b1843724cf7d4b4b3a521aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9055a41b4b5f58dc1a680542e546de0cc64946963b1843724cf7d4b4b3a521aa->leave($__internal_9055a41b4b5f58dc1a680542e546de0cc64946963b1843724cf7d4b4b3a521aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b07c7d4bfc2aa60b31520066b8f5024caeb63e1eb7483ae30fd79998129764e = $this->env->getExtension("native_profiler");
        $__internal_6b07c7d4bfc2aa60b31520066b8f5024caeb63e1eb7483ae30fd79998129764e->enter($__internal_6b07c7d4bfc2aa60b31520066b8f5024caeb63e1eb7483ae30fd79998129764e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b07c7d4bfc2aa60b31520066b8f5024caeb63e1eb7483ae30fd79998129764e->leave($__internal_6b07c7d4bfc2aa60b31520066b8f5024caeb63e1eb7483ae30fd79998129764e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_974cc9dca166d862dfd8647d657a222572aa4ac34deb581959bf2e37641d66fb = $this->env->getExtension("native_profiler");
        $__internal_974cc9dca166d862dfd8647d657a222572aa4ac34deb581959bf2e37641d66fb->enter($__internal_974cc9dca166d862dfd8647d657a222572aa4ac34deb581959bf2e37641d66fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_974cc9dca166d862dfd8647d657a222572aa4ac34deb581959bf2e37641d66fb->leave($__internal_974cc9dca166d862dfd8647d657a222572aa4ac34deb581959bf2e37641d66fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfd99642ee0b2114d6d882488cbd575c501521ae7303c58944a26256bf135f65 = $this->env->getExtension("native_profiler");
        $__internal_bfd99642ee0b2114d6d882488cbd575c501521ae7303c58944a26256bf135f65->enter($__internal_bfd99642ee0b2114d6d882488cbd575c501521ae7303c58944a26256bf135f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bfd99642ee0b2114d6d882488cbd575c501521ae7303c58944a26256bf135f65->leave($__internal_bfd99642ee0b2114d6d882488cbd575c501521ae7303c58944a26256bf135f65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
