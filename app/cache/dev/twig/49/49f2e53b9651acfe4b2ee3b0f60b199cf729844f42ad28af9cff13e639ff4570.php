<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5dcf81d0bef057e2a33b744d0dfe48042ab7e067b6436301d5cd4aa7a9e83576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_413c2b4996976879a8095dc1fc67d6b36c2220a1ae12a1201ffbfb3e92b0f250 = $this->env->getExtension("native_profiler");
        $__internal_413c2b4996976879a8095dc1fc67d6b36c2220a1ae12a1201ffbfb3e92b0f250->enter($__internal_413c2b4996976879a8095dc1fc67d6b36c2220a1ae12a1201ffbfb3e92b0f250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413c2b4996976879a8095dc1fc67d6b36c2220a1ae12a1201ffbfb3e92b0f250->leave($__internal_413c2b4996976879a8095dc1fc67d6b36c2220a1ae12a1201ffbfb3e92b0f250_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03aeb50f5bdda1d779783b4b9fff70d046ba17989eecdd9d3c57a58123f48e93 = $this->env->getExtension("native_profiler");
        $__internal_03aeb50f5bdda1d779783b4b9fff70d046ba17989eecdd9d3c57a58123f48e93->enter($__internal_03aeb50f5bdda1d779783b4b9fff70d046ba17989eecdd9d3c57a58123f48e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_03aeb50f5bdda1d779783b4b9fff70d046ba17989eecdd9d3c57a58123f48e93->leave($__internal_03aeb50f5bdda1d779783b4b9fff70d046ba17989eecdd9d3c57a58123f48e93_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bff441a6095fb85c8819fe1b53abdd4063bc0c4bcb3180211dc349bbdebdcc95 = $this->env->getExtension("native_profiler");
        $__internal_bff441a6095fb85c8819fe1b53abdd4063bc0c4bcb3180211dc349bbdebdcc95->enter($__internal_bff441a6095fb85c8819fe1b53abdd4063bc0c4bcb3180211dc349bbdebdcc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bff441a6095fb85c8819fe1b53abdd4063bc0c4bcb3180211dc349bbdebdcc95->leave($__internal_bff441a6095fb85c8819fe1b53abdd4063bc0c4bcb3180211dc349bbdebdcc95_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b6465a27274945413c0489c1162c0cd7ab1b6c70e5f0dc2d0453506dded4541 = $this->env->getExtension("native_profiler");
        $__internal_3b6465a27274945413c0489c1162c0cd7ab1b6c70e5f0dc2d0453506dded4541->enter($__internal_3b6465a27274945413c0489c1162c0cd7ab1b6c70e5f0dc2d0453506dded4541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3b6465a27274945413c0489c1162c0cd7ab1b6c70e5f0dc2d0453506dded4541->leave($__internal_3b6465a27274945413c0489c1162c0cd7ab1b6c70e5f0dc2d0453506dded4541_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
