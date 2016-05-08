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
        $__internal_03c60c76089c19db3801d9a08fb87e7ca690843b80a424b33ac82b3ffadbb807 = $this->env->getExtension("native_profiler");
        $__internal_03c60c76089c19db3801d9a08fb87e7ca690843b80a424b33ac82b3ffadbb807->enter($__internal_03c60c76089c19db3801d9a08fb87e7ca690843b80a424b33ac82b3ffadbb807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c60c76089c19db3801d9a08fb87e7ca690843b80a424b33ac82b3ffadbb807->leave($__internal_03c60c76089c19db3801d9a08fb87e7ca690843b80a424b33ac82b3ffadbb807_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05b1525730ca1a3b22d9657ac79a3b3612ea34738ef258fa79da968675425664 = $this->env->getExtension("native_profiler");
        $__internal_05b1525730ca1a3b22d9657ac79a3b3612ea34738ef258fa79da968675425664->enter($__internal_05b1525730ca1a3b22d9657ac79a3b3612ea34738ef258fa79da968675425664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05b1525730ca1a3b22d9657ac79a3b3612ea34738ef258fa79da968675425664->leave($__internal_05b1525730ca1a3b22d9657ac79a3b3612ea34738ef258fa79da968675425664_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a11d167b7cbb73186f3db385e8d1da10f2dcbb547b4e30fe3d8a10aeddc9e9c = $this->env->getExtension("native_profiler");
        $__internal_9a11d167b7cbb73186f3db385e8d1da10f2dcbb547b4e30fe3d8a10aeddc9e9c->enter($__internal_9a11d167b7cbb73186f3db385e8d1da10f2dcbb547b4e30fe3d8a10aeddc9e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a11d167b7cbb73186f3db385e8d1da10f2dcbb547b4e30fe3d8a10aeddc9e9c->leave($__internal_9a11d167b7cbb73186f3db385e8d1da10f2dcbb547b4e30fe3d8a10aeddc9e9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3eb40e59fd69e987293dc3eb25dee9dd1855971880bc4692ac05eca24487cd5 = $this->env->getExtension("native_profiler");
        $__internal_a3eb40e59fd69e987293dc3eb25dee9dd1855971880bc4692ac05eca24487cd5->enter($__internal_a3eb40e59fd69e987293dc3eb25dee9dd1855971880bc4692ac05eca24487cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3eb40e59fd69e987293dc3eb25dee9dd1855971880bc4692ac05eca24487cd5->leave($__internal_a3eb40e59fd69e987293dc3eb25dee9dd1855971880bc4692ac05eca24487cd5_prof);

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
