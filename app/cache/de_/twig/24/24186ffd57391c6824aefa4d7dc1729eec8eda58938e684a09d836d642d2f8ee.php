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
        $__internal_80121dcee6dc9392136c67408efa463939645e794eb87af868586642c90c5acf = $this->env->getExtension("native_profiler");
        $__internal_80121dcee6dc9392136c67408efa463939645e794eb87af868586642c90c5acf->enter($__internal_80121dcee6dc9392136c67408efa463939645e794eb87af868586642c90c5acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80121dcee6dc9392136c67408efa463939645e794eb87af868586642c90c5acf->leave($__internal_80121dcee6dc9392136c67408efa463939645e794eb87af868586642c90c5acf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58a301f5dea7c70d2bcba5bf26b8a29cad604b7e89d72c9b7a459e5e36f6a581 = $this->env->getExtension("native_profiler");
        $__internal_58a301f5dea7c70d2bcba5bf26b8a29cad604b7e89d72c9b7a459e5e36f6a581->enter($__internal_58a301f5dea7c70d2bcba5bf26b8a29cad604b7e89d72c9b7a459e5e36f6a581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58a301f5dea7c70d2bcba5bf26b8a29cad604b7e89d72c9b7a459e5e36f6a581->leave($__internal_58a301f5dea7c70d2bcba5bf26b8a29cad604b7e89d72c9b7a459e5e36f6a581_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c424e681d5bacc4220b4dc61ec39420ff7ac317a8e2901f5a3ac5068f7fb394 = $this->env->getExtension("native_profiler");
        $__internal_6c424e681d5bacc4220b4dc61ec39420ff7ac317a8e2901f5a3ac5068f7fb394->enter($__internal_6c424e681d5bacc4220b4dc61ec39420ff7ac317a8e2901f5a3ac5068f7fb394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c424e681d5bacc4220b4dc61ec39420ff7ac317a8e2901f5a3ac5068f7fb394->leave($__internal_6c424e681d5bacc4220b4dc61ec39420ff7ac317a8e2901f5a3ac5068f7fb394_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3480a47705869155c051cb60e209d3e406e0953ef9eb6d68793f9c40ac5b92c = $this->env->getExtension("native_profiler");
        $__internal_f3480a47705869155c051cb60e209d3e406e0953ef9eb6d68793f9c40ac5b92c->enter($__internal_f3480a47705869155c051cb60e209d3e406e0953ef9eb6d68793f9c40ac5b92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f3480a47705869155c051cb60e209d3e406e0953ef9eb6d68793f9c40ac5b92c->leave($__internal_f3480a47705869155c051cb60e209d3e406e0953ef9eb6d68793f9c40ac5b92c_prof);

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
