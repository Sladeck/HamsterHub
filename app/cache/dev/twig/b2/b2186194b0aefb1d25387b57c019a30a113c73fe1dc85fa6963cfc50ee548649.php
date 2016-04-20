<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_16e018b47723a3a8e75e655cbfbdd322c390f8efb1a34a223c34e7bf16a4848c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_dd898c4619a4ab661d51e36cae3083be3ce5f34d7d38d972ac7980982304a746 = $this->env->getExtension("native_profiler");
        $__internal_dd898c4619a4ab661d51e36cae3083be3ce5f34d7d38d972ac7980982304a746->enter($__internal_dd898c4619a4ab661d51e36cae3083be3ce5f34d7d38d972ac7980982304a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd898c4619a4ab661d51e36cae3083be3ce5f34d7d38d972ac7980982304a746->leave($__internal_dd898c4619a4ab661d51e36cae3083be3ce5f34d7d38d972ac7980982304a746_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6fb9222bd59bb292d011f38eea6dbd630f196abd15cad6e961d5f8bc22a6511b = $this->env->getExtension("native_profiler");
        $__internal_6fb9222bd59bb292d011f38eea6dbd630f196abd15cad6e961d5f8bc22a6511b->enter($__internal_6fb9222bd59bb292d011f38eea6dbd630f196abd15cad6e961d5f8bc22a6511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6fb9222bd59bb292d011f38eea6dbd630f196abd15cad6e961d5f8bc22a6511b->leave($__internal_6fb9222bd59bb292d011f38eea6dbd630f196abd15cad6e961d5f8bc22a6511b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0869e2ffe9827f899d4290bb796e7beb4ecc6b5a3ad00da205b5e3c2d3273227 = $this->env->getExtension("native_profiler");
        $__internal_0869e2ffe9827f899d4290bb796e7beb4ecc6b5a3ad00da205b5e3c2d3273227->enter($__internal_0869e2ffe9827f899d4290bb796e7beb4ecc6b5a3ad00da205b5e3c2d3273227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0869e2ffe9827f899d4290bb796e7beb4ecc6b5a3ad00da205b5e3c2d3273227->leave($__internal_0869e2ffe9827f899d4290bb796e7beb4ecc6b5a3ad00da205b5e3c2d3273227_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c66af3359a1cd65fdfd999328075e5b31b140b8f2f872689a6c7837d56da4635 = $this->env->getExtension("native_profiler");
        $__internal_c66af3359a1cd65fdfd999328075e5b31b140b8f2f872689a6c7837d56da4635->enter($__internal_c66af3359a1cd65fdfd999328075e5b31b140b8f2f872689a6c7837d56da4635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c66af3359a1cd65fdfd999328075e5b31b140b8f2f872689a6c7837d56da4635->leave($__internal_c66af3359a1cd65fdfd999328075e5b31b140b8f2f872689a6c7837d56da4635_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
