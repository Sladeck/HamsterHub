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
        $__internal_c719e21d56fbdc2401dfb5a9336694c41363a637e9204e5e26b7ca416aecc41f = $this->env->getExtension("native_profiler");
        $__internal_c719e21d56fbdc2401dfb5a9336694c41363a637e9204e5e26b7ca416aecc41f->enter($__internal_c719e21d56fbdc2401dfb5a9336694c41363a637e9204e5e26b7ca416aecc41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c719e21d56fbdc2401dfb5a9336694c41363a637e9204e5e26b7ca416aecc41f->leave($__internal_c719e21d56fbdc2401dfb5a9336694c41363a637e9204e5e26b7ca416aecc41f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f190ccd1523a5ba177e9a5d8278b0b09dd47a69b340fad829742c7f235c3ffa1 = $this->env->getExtension("native_profiler");
        $__internal_f190ccd1523a5ba177e9a5d8278b0b09dd47a69b340fad829742c7f235c3ffa1->enter($__internal_f190ccd1523a5ba177e9a5d8278b0b09dd47a69b340fad829742c7f235c3ffa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f190ccd1523a5ba177e9a5d8278b0b09dd47a69b340fad829742c7f235c3ffa1->leave($__internal_f190ccd1523a5ba177e9a5d8278b0b09dd47a69b340fad829742c7f235c3ffa1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6083a544e42e3fcfc484cdc915a65f140c34320a9ab05752478576bf12a7770 = $this->env->getExtension("native_profiler");
        $__internal_f6083a544e42e3fcfc484cdc915a65f140c34320a9ab05752478576bf12a7770->enter($__internal_f6083a544e42e3fcfc484cdc915a65f140c34320a9ab05752478576bf12a7770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f6083a544e42e3fcfc484cdc915a65f140c34320a9ab05752478576bf12a7770->leave($__internal_f6083a544e42e3fcfc484cdc915a65f140c34320a9ab05752478576bf12a7770_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ecc48a851978599a289cdcf528e0c318b646a7f1571f6a25a9bfa9cf4232d7f = $this->env->getExtension("native_profiler");
        $__internal_0ecc48a851978599a289cdcf528e0c318b646a7f1571f6a25a9bfa9cf4232d7f->enter($__internal_0ecc48a851978599a289cdcf528e0c318b646a7f1571f6a25a9bfa9cf4232d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0ecc48a851978599a289cdcf528e0c318b646a7f1571f6a25a9bfa9cf4232d7f->leave($__internal_0ecc48a851978599a289cdcf528e0c318b646a7f1571f6a25a9bfa9cf4232d7f_prof);

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
