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
        $__internal_f347213d4ddd2150544de379f3e2c2435204234532ce2b4c174ae2283b9a52a1 = $this->env->getExtension("native_profiler");
        $__internal_f347213d4ddd2150544de379f3e2c2435204234532ce2b4c174ae2283b9a52a1->enter($__internal_f347213d4ddd2150544de379f3e2c2435204234532ce2b4c174ae2283b9a52a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f347213d4ddd2150544de379f3e2c2435204234532ce2b4c174ae2283b9a52a1->leave($__internal_f347213d4ddd2150544de379f3e2c2435204234532ce2b4c174ae2283b9a52a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4692da32a40d6cc88356a148f8a35823c238a5d914cda191178198108d631bb3 = $this->env->getExtension("native_profiler");
        $__internal_4692da32a40d6cc88356a148f8a35823c238a5d914cda191178198108d631bb3->enter($__internal_4692da32a40d6cc88356a148f8a35823c238a5d914cda191178198108d631bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4692da32a40d6cc88356a148f8a35823c238a5d914cda191178198108d631bb3->leave($__internal_4692da32a40d6cc88356a148f8a35823c238a5d914cda191178198108d631bb3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bad11a63cf0a183e4938208e9475ab6fdbc026929aeb6f370e52aa561743177c = $this->env->getExtension("native_profiler");
        $__internal_bad11a63cf0a183e4938208e9475ab6fdbc026929aeb6f370e52aa561743177c->enter($__internal_bad11a63cf0a183e4938208e9475ab6fdbc026929aeb6f370e52aa561743177c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bad11a63cf0a183e4938208e9475ab6fdbc026929aeb6f370e52aa561743177c->leave($__internal_bad11a63cf0a183e4938208e9475ab6fdbc026929aeb6f370e52aa561743177c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_429c7682ce30e67d5f01defa4a3ff1e137676c0c0947a3f2f595f63f24d74656 = $this->env->getExtension("native_profiler");
        $__internal_429c7682ce30e67d5f01defa4a3ff1e137676c0c0947a3f2f595f63f24d74656->enter($__internal_429c7682ce30e67d5f01defa4a3ff1e137676c0c0947a3f2f595f63f24d74656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_429c7682ce30e67d5f01defa4a3ff1e137676c0c0947a3f2f595f63f24d74656->leave($__internal_429c7682ce30e67d5f01defa4a3ff1e137676c0c0947a3f2f595f63f24d74656_prof);

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
