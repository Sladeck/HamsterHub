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
        $__internal_73c2c3d44befc55d19238a43b54e74bd5c6e999e30ad462f19eafe9aebd56c6e = $this->env->getExtension("native_profiler");
        $__internal_73c2c3d44befc55d19238a43b54e74bd5c6e999e30ad462f19eafe9aebd56c6e->enter($__internal_73c2c3d44befc55d19238a43b54e74bd5c6e999e30ad462f19eafe9aebd56c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c2c3d44befc55d19238a43b54e74bd5c6e999e30ad462f19eafe9aebd56c6e->leave($__internal_73c2c3d44befc55d19238a43b54e74bd5c6e999e30ad462f19eafe9aebd56c6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b968ddc33cf9db4be2801527cd5fc852d383fc6cdc2c4a12e3edc5d9236c3a1d = $this->env->getExtension("native_profiler");
        $__internal_b968ddc33cf9db4be2801527cd5fc852d383fc6cdc2c4a12e3edc5d9236c3a1d->enter($__internal_b968ddc33cf9db4be2801527cd5fc852d383fc6cdc2c4a12e3edc5d9236c3a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b968ddc33cf9db4be2801527cd5fc852d383fc6cdc2c4a12e3edc5d9236c3a1d->leave($__internal_b968ddc33cf9db4be2801527cd5fc852d383fc6cdc2c4a12e3edc5d9236c3a1d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c424e35c738e1179db2da3eda39a7fb715eb6998a4876095f716af48bc79e625 = $this->env->getExtension("native_profiler");
        $__internal_c424e35c738e1179db2da3eda39a7fb715eb6998a4876095f716af48bc79e625->enter($__internal_c424e35c738e1179db2da3eda39a7fb715eb6998a4876095f716af48bc79e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c424e35c738e1179db2da3eda39a7fb715eb6998a4876095f716af48bc79e625->leave($__internal_c424e35c738e1179db2da3eda39a7fb715eb6998a4876095f716af48bc79e625_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07ceaa6b115b6db2669ab4bc9659bd75a7312f54d02b564f0d656d4fa735bf0f = $this->env->getExtension("native_profiler");
        $__internal_07ceaa6b115b6db2669ab4bc9659bd75a7312f54d02b564f0d656d4fa735bf0f->enter($__internal_07ceaa6b115b6db2669ab4bc9659bd75a7312f54d02b564f0d656d4fa735bf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07ceaa6b115b6db2669ab4bc9659bd75a7312f54d02b564f0d656d4fa735bf0f->leave($__internal_07ceaa6b115b6db2669ab4bc9659bd75a7312f54d02b564f0d656d4fa735bf0f_prof);

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
