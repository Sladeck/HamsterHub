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
        $__internal_c6cea0c3cc450b2d2d4faab1248e98e4b5e75193e654e53378ea3aa5fd27f7f9 = $this->env->getExtension("native_profiler");
        $__internal_c6cea0c3cc450b2d2d4faab1248e98e4b5e75193e654e53378ea3aa5fd27f7f9->enter($__internal_c6cea0c3cc450b2d2d4faab1248e98e4b5e75193e654e53378ea3aa5fd27f7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6cea0c3cc450b2d2d4faab1248e98e4b5e75193e654e53378ea3aa5fd27f7f9->leave($__internal_c6cea0c3cc450b2d2d4faab1248e98e4b5e75193e654e53378ea3aa5fd27f7f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0abbf29faed3ae16de2c7e14b15df8a0f7661266bb95e6037b2fb1b9baa3ebb5 = $this->env->getExtension("native_profiler");
        $__internal_0abbf29faed3ae16de2c7e14b15df8a0f7661266bb95e6037b2fb1b9baa3ebb5->enter($__internal_0abbf29faed3ae16de2c7e14b15df8a0f7661266bb95e6037b2fb1b9baa3ebb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0abbf29faed3ae16de2c7e14b15df8a0f7661266bb95e6037b2fb1b9baa3ebb5->leave($__internal_0abbf29faed3ae16de2c7e14b15df8a0f7661266bb95e6037b2fb1b9baa3ebb5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7de375bb157cd81aabf1bfccc1e2b0cea1932fe04e86bbbc66b820dcf4f5d3a = $this->env->getExtension("native_profiler");
        $__internal_e7de375bb157cd81aabf1bfccc1e2b0cea1932fe04e86bbbc66b820dcf4f5d3a->enter($__internal_e7de375bb157cd81aabf1bfccc1e2b0cea1932fe04e86bbbc66b820dcf4f5d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7de375bb157cd81aabf1bfccc1e2b0cea1932fe04e86bbbc66b820dcf4f5d3a->leave($__internal_e7de375bb157cd81aabf1bfccc1e2b0cea1932fe04e86bbbc66b820dcf4f5d3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_916547bc95fac1da1d37cac51d2bb37f71b905dcdc9d3895a49d59a76d365386 = $this->env->getExtension("native_profiler");
        $__internal_916547bc95fac1da1d37cac51d2bb37f71b905dcdc9d3895a49d59a76d365386->enter($__internal_916547bc95fac1da1d37cac51d2bb37f71b905dcdc9d3895a49d59a76d365386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_916547bc95fac1da1d37cac51d2bb37f71b905dcdc9d3895a49d59a76d365386->leave($__internal_916547bc95fac1da1d37cac51d2bb37f71b905dcdc9d3895a49d59a76d365386_prof);

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
