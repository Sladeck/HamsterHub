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
        $__internal_559c7a3dbd29dd0187707b8121dff40af36e1f5b4a2ccdce7ddd17ac5167ee47 = $this->env->getExtension("native_profiler");
        $__internal_559c7a3dbd29dd0187707b8121dff40af36e1f5b4a2ccdce7ddd17ac5167ee47->enter($__internal_559c7a3dbd29dd0187707b8121dff40af36e1f5b4a2ccdce7ddd17ac5167ee47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_559c7a3dbd29dd0187707b8121dff40af36e1f5b4a2ccdce7ddd17ac5167ee47->leave($__internal_559c7a3dbd29dd0187707b8121dff40af36e1f5b4a2ccdce7ddd17ac5167ee47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6f63a0b97043d63e031435c142c49b256cb9bcdc8f6af0845772920ef858f45 = $this->env->getExtension("native_profiler");
        $__internal_a6f63a0b97043d63e031435c142c49b256cb9bcdc8f6af0845772920ef858f45->enter($__internal_a6f63a0b97043d63e031435c142c49b256cb9bcdc8f6af0845772920ef858f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a6f63a0b97043d63e031435c142c49b256cb9bcdc8f6af0845772920ef858f45->leave($__internal_a6f63a0b97043d63e031435c142c49b256cb9bcdc8f6af0845772920ef858f45_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d1192e727c2b447c87b7bc16e0d832e3074961582f415245df73eeb81f7bbe1 = $this->env->getExtension("native_profiler");
        $__internal_8d1192e727c2b447c87b7bc16e0d832e3074961582f415245df73eeb81f7bbe1->enter($__internal_8d1192e727c2b447c87b7bc16e0d832e3074961582f415245df73eeb81f7bbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8d1192e727c2b447c87b7bc16e0d832e3074961582f415245df73eeb81f7bbe1->leave($__internal_8d1192e727c2b447c87b7bc16e0d832e3074961582f415245df73eeb81f7bbe1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d61912f8663f3d446ac8a20576a9cf43c2f7d40d1b81bf36c1d96a3fb94acd0 = $this->env->getExtension("native_profiler");
        $__internal_5d61912f8663f3d446ac8a20576a9cf43c2f7d40d1b81bf36c1d96a3fb94acd0->enter($__internal_5d61912f8663f3d446ac8a20576a9cf43c2f7d40d1b81bf36c1d96a3fb94acd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5d61912f8663f3d446ac8a20576a9cf43c2f7d40d1b81bf36c1d96a3fb94acd0->leave($__internal_5d61912f8663f3d446ac8a20576a9cf43c2f7d40d1b81bf36c1d96a3fb94acd0_prof);

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
