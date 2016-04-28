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
        $__internal_2ab0653d78df64e6f28b751c712b7a646bf256cc88c5c1c73ae2ad2ce5167480 = $this->env->getExtension("native_profiler");
        $__internal_2ab0653d78df64e6f28b751c712b7a646bf256cc88c5c1c73ae2ad2ce5167480->enter($__internal_2ab0653d78df64e6f28b751c712b7a646bf256cc88c5c1c73ae2ad2ce5167480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab0653d78df64e6f28b751c712b7a646bf256cc88c5c1c73ae2ad2ce5167480->leave($__internal_2ab0653d78df64e6f28b751c712b7a646bf256cc88c5c1c73ae2ad2ce5167480_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d777f0b72cd42658b289d83385319daa9e5fdcd4706826307d141cc7d636a9dd = $this->env->getExtension("native_profiler");
        $__internal_d777f0b72cd42658b289d83385319daa9e5fdcd4706826307d141cc7d636a9dd->enter($__internal_d777f0b72cd42658b289d83385319daa9e5fdcd4706826307d141cc7d636a9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d777f0b72cd42658b289d83385319daa9e5fdcd4706826307d141cc7d636a9dd->leave($__internal_d777f0b72cd42658b289d83385319daa9e5fdcd4706826307d141cc7d636a9dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e5cf8dcf5ea26a8f01bc304fc10ed710a75a46a944af13eff0a507cb856029c = $this->env->getExtension("native_profiler");
        $__internal_8e5cf8dcf5ea26a8f01bc304fc10ed710a75a46a944af13eff0a507cb856029c->enter($__internal_8e5cf8dcf5ea26a8f01bc304fc10ed710a75a46a944af13eff0a507cb856029c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e5cf8dcf5ea26a8f01bc304fc10ed710a75a46a944af13eff0a507cb856029c->leave($__internal_8e5cf8dcf5ea26a8f01bc304fc10ed710a75a46a944af13eff0a507cb856029c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06e6bc5d038e9d1ad468a182b0db708b79c9d02b35311529beeaf674802972f7 = $this->env->getExtension("native_profiler");
        $__internal_06e6bc5d038e9d1ad468a182b0db708b79c9d02b35311529beeaf674802972f7->enter($__internal_06e6bc5d038e9d1ad468a182b0db708b79c9d02b35311529beeaf674802972f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06e6bc5d038e9d1ad468a182b0db708b79c9d02b35311529beeaf674802972f7->leave($__internal_06e6bc5d038e9d1ad468a182b0db708b79c9d02b35311529beeaf674802972f7_prof);

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
