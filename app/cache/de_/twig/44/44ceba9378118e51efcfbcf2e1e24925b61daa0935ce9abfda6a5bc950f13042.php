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
        $__internal_1e124e8ab35904220a32ca27197704b5417a267c058027fa7ba13493e8391cd9 = $this->env->getExtension("native_profiler");
        $__internal_1e124e8ab35904220a32ca27197704b5417a267c058027fa7ba13493e8391cd9->enter($__internal_1e124e8ab35904220a32ca27197704b5417a267c058027fa7ba13493e8391cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e124e8ab35904220a32ca27197704b5417a267c058027fa7ba13493e8391cd9->leave($__internal_1e124e8ab35904220a32ca27197704b5417a267c058027fa7ba13493e8391cd9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b4ec31518ea0b737080b97c7cf3e3bd3895d5d6da06bb1009215d81c2d77e4f = $this->env->getExtension("native_profiler");
        $__internal_7b4ec31518ea0b737080b97c7cf3e3bd3895d5d6da06bb1009215d81c2d77e4f->enter($__internal_7b4ec31518ea0b737080b97c7cf3e3bd3895d5d6da06bb1009215d81c2d77e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b4ec31518ea0b737080b97c7cf3e3bd3895d5d6da06bb1009215d81c2d77e4f->leave($__internal_7b4ec31518ea0b737080b97c7cf3e3bd3895d5d6da06bb1009215d81c2d77e4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20b151b59487b8abbba65567bfd431a57d643bcfdd40dc059a1760bed2751a6a = $this->env->getExtension("native_profiler");
        $__internal_20b151b59487b8abbba65567bfd431a57d643bcfdd40dc059a1760bed2751a6a->enter($__internal_20b151b59487b8abbba65567bfd431a57d643bcfdd40dc059a1760bed2751a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20b151b59487b8abbba65567bfd431a57d643bcfdd40dc059a1760bed2751a6a->leave($__internal_20b151b59487b8abbba65567bfd431a57d643bcfdd40dc059a1760bed2751a6a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8db243c7467864e72018a334e7a8360b784a2301c678c85a36a00c75da72f0d4 = $this->env->getExtension("native_profiler");
        $__internal_8db243c7467864e72018a334e7a8360b784a2301c678c85a36a00c75da72f0d4->enter($__internal_8db243c7467864e72018a334e7a8360b784a2301c678c85a36a00c75da72f0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8db243c7467864e72018a334e7a8360b784a2301c678c85a36a00c75da72f0d4->leave($__internal_8db243c7467864e72018a334e7a8360b784a2301c678c85a36a00c75da72f0d4_prof);

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
