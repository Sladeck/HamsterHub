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
        $__internal_c760a7f0df22232351397d9268ae1a7c18e7bd78937d237b6ca46b06f0c40700 = $this->env->getExtension("native_profiler");
        $__internal_c760a7f0df22232351397d9268ae1a7c18e7bd78937d237b6ca46b06f0c40700->enter($__internal_c760a7f0df22232351397d9268ae1a7c18e7bd78937d237b6ca46b06f0c40700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c760a7f0df22232351397d9268ae1a7c18e7bd78937d237b6ca46b06f0c40700->leave($__internal_c760a7f0df22232351397d9268ae1a7c18e7bd78937d237b6ca46b06f0c40700_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_112eb41aad2199b4b0d2639295c229949755905756e294fb9ef3d20edad7a2ba = $this->env->getExtension("native_profiler");
        $__internal_112eb41aad2199b4b0d2639295c229949755905756e294fb9ef3d20edad7a2ba->enter($__internal_112eb41aad2199b4b0d2639295c229949755905756e294fb9ef3d20edad7a2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_112eb41aad2199b4b0d2639295c229949755905756e294fb9ef3d20edad7a2ba->leave($__internal_112eb41aad2199b4b0d2639295c229949755905756e294fb9ef3d20edad7a2ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09eb095d1b5254adbb9f75dfe65a28311cccb2434540e18d7ea2dfb381f94325 = $this->env->getExtension("native_profiler");
        $__internal_09eb095d1b5254adbb9f75dfe65a28311cccb2434540e18d7ea2dfb381f94325->enter($__internal_09eb095d1b5254adbb9f75dfe65a28311cccb2434540e18d7ea2dfb381f94325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09eb095d1b5254adbb9f75dfe65a28311cccb2434540e18d7ea2dfb381f94325->leave($__internal_09eb095d1b5254adbb9f75dfe65a28311cccb2434540e18d7ea2dfb381f94325_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fe16f0436e4e0d797aa7c3fbf3f24f479cf7e44e2ed982ca3085107935199e7 = $this->env->getExtension("native_profiler");
        $__internal_0fe16f0436e4e0d797aa7c3fbf3f24f479cf7e44e2ed982ca3085107935199e7->enter($__internal_0fe16f0436e4e0d797aa7c3fbf3f24f479cf7e44e2ed982ca3085107935199e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0fe16f0436e4e0d797aa7c3fbf3f24f479cf7e44e2ed982ca3085107935199e7->leave($__internal_0fe16f0436e4e0d797aa7c3fbf3f24f479cf7e44e2ed982ca3085107935199e7_prof);

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
