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
        $__internal_d9f13c4e26134b0ddbade71d56583cd96f74cb904f5f718ede390b00799e5ad0 = $this->env->getExtension("native_profiler");
        $__internal_d9f13c4e26134b0ddbade71d56583cd96f74cb904f5f718ede390b00799e5ad0->enter($__internal_d9f13c4e26134b0ddbade71d56583cd96f74cb904f5f718ede390b00799e5ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9f13c4e26134b0ddbade71d56583cd96f74cb904f5f718ede390b00799e5ad0->leave($__internal_d9f13c4e26134b0ddbade71d56583cd96f74cb904f5f718ede390b00799e5ad0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca5b18a62b018ad3c6a6b947cc960f78c9ed1716837c973393b1cff6a8e74533 = $this->env->getExtension("native_profiler");
        $__internal_ca5b18a62b018ad3c6a6b947cc960f78c9ed1716837c973393b1cff6a8e74533->enter($__internal_ca5b18a62b018ad3c6a6b947cc960f78c9ed1716837c973393b1cff6a8e74533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca5b18a62b018ad3c6a6b947cc960f78c9ed1716837c973393b1cff6a8e74533->leave($__internal_ca5b18a62b018ad3c6a6b947cc960f78c9ed1716837c973393b1cff6a8e74533_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d60c47093543f57f5992c67167cf2a5f9dca20644c1795b7a8ef30205d2fed0b = $this->env->getExtension("native_profiler");
        $__internal_d60c47093543f57f5992c67167cf2a5f9dca20644c1795b7a8ef30205d2fed0b->enter($__internal_d60c47093543f57f5992c67167cf2a5f9dca20644c1795b7a8ef30205d2fed0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d60c47093543f57f5992c67167cf2a5f9dca20644c1795b7a8ef30205d2fed0b->leave($__internal_d60c47093543f57f5992c67167cf2a5f9dca20644c1795b7a8ef30205d2fed0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b64f2559914fa7c4bc5dfd08d6c943c3d4b1bf57b611a08286f2783eb8728a9 = $this->env->getExtension("native_profiler");
        $__internal_9b64f2559914fa7c4bc5dfd08d6c943c3d4b1bf57b611a08286f2783eb8728a9->enter($__internal_9b64f2559914fa7c4bc5dfd08d6c943c3d4b1bf57b611a08286f2783eb8728a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b64f2559914fa7c4bc5dfd08d6c943c3d4b1bf57b611a08286f2783eb8728a9->leave($__internal_9b64f2559914fa7c4bc5dfd08d6c943c3d4b1bf57b611a08286f2783eb8728a9_prof);

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
