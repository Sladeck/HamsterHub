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
        $__internal_42b3dfc12a8f8a84f003533c84baf947980250c9f7add4a3cb1d6f27c19ffa5e = $this->env->getExtension("native_profiler");
        $__internal_42b3dfc12a8f8a84f003533c84baf947980250c9f7add4a3cb1d6f27c19ffa5e->enter($__internal_42b3dfc12a8f8a84f003533c84baf947980250c9f7add4a3cb1d6f27c19ffa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42b3dfc12a8f8a84f003533c84baf947980250c9f7add4a3cb1d6f27c19ffa5e->leave($__internal_42b3dfc12a8f8a84f003533c84baf947980250c9f7add4a3cb1d6f27c19ffa5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c1c92c5406564401d463c280d6c5bc6d10ee1c583c1a286a509b77a6a903062 = $this->env->getExtension("native_profiler");
        $__internal_2c1c92c5406564401d463c280d6c5bc6d10ee1c583c1a286a509b77a6a903062->enter($__internal_2c1c92c5406564401d463c280d6c5bc6d10ee1c583c1a286a509b77a6a903062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c1c92c5406564401d463c280d6c5bc6d10ee1c583c1a286a509b77a6a903062->leave($__internal_2c1c92c5406564401d463c280d6c5bc6d10ee1c583c1a286a509b77a6a903062_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c8dc7048fb75c9a33036e82751a007ee14e46ea6f9a95d02932f8290c727d76 = $this->env->getExtension("native_profiler");
        $__internal_6c8dc7048fb75c9a33036e82751a007ee14e46ea6f9a95d02932f8290c727d76->enter($__internal_6c8dc7048fb75c9a33036e82751a007ee14e46ea6f9a95d02932f8290c727d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c8dc7048fb75c9a33036e82751a007ee14e46ea6f9a95d02932f8290c727d76->leave($__internal_6c8dc7048fb75c9a33036e82751a007ee14e46ea6f9a95d02932f8290c727d76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb65f400cec98bb3cc433f04713c570c1528b67abfaae3ace5f3d88dab857629 = $this->env->getExtension("native_profiler");
        $__internal_bb65f400cec98bb3cc433f04713c570c1528b67abfaae3ace5f3d88dab857629->enter($__internal_bb65f400cec98bb3cc433f04713c570c1528b67abfaae3ace5f3d88dab857629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb65f400cec98bb3cc433f04713c570c1528b67abfaae3ace5f3d88dab857629->leave($__internal_bb65f400cec98bb3cc433f04713c570c1528b67abfaae3ace5f3d88dab857629_prof);

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
