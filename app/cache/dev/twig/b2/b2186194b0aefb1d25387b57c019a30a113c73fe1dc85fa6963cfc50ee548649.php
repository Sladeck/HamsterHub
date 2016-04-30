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
        $__internal_c820679e4f7ae361f954bf3f3c012a46f436e45adf806b15914634df52624b8d = $this->env->getExtension("native_profiler");
        $__internal_c820679e4f7ae361f954bf3f3c012a46f436e45adf806b15914634df52624b8d->enter($__internal_c820679e4f7ae361f954bf3f3c012a46f436e45adf806b15914634df52624b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c820679e4f7ae361f954bf3f3c012a46f436e45adf806b15914634df52624b8d->leave($__internal_c820679e4f7ae361f954bf3f3c012a46f436e45adf806b15914634df52624b8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aee1d6606503c655f700a1ba3da1b9ff3c532557038443df505654110a03b943 = $this->env->getExtension("native_profiler");
        $__internal_aee1d6606503c655f700a1ba3da1b9ff3c532557038443df505654110a03b943->enter($__internal_aee1d6606503c655f700a1ba3da1b9ff3c532557038443df505654110a03b943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aee1d6606503c655f700a1ba3da1b9ff3c532557038443df505654110a03b943->leave($__internal_aee1d6606503c655f700a1ba3da1b9ff3c532557038443df505654110a03b943_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a84d91b3fd588914315483f78c3f3f5d17b8821a5e964e15a3210e1e01c6c9f = $this->env->getExtension("native_profiler");
        $__internal_7a84d91b3fd588914315483f78c3f3f5d17b8821a5e964e15a3210e1e01c6c9f->enter($__internal_7a84d91b3fd588914315483f78c3f3f5d17b8821a5e964e15a3210e1e01c6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7a84d91b3fd588914315483f78c3f3f5d17b8821a5e964e15a3210e1e01c6c9f->leave($__internal_7a84d91b3fd588914315483f78c3f3f5d17b8821a5e964e15a3210e1e01c6c9f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67cf96f5917f7c8d0eacfd3e0404962d1b38bb211ee91345aac35b7c5a7a79e6 = $this->env->getExtension("native_profiler");
        $__internal_67cf96f5917f7c8d0eacfd3e0404962d1b38bb211ee91345aac35b7c5a7a79e6->enter($__internal_67cf96f5917f7c8d0eacfd3e0404962d1b38bb211ee91345aac35b7c5a7a79e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_67cf96f5917f7c8d0eacfd3e0404962d1b38bb211ee91345aac35b7c5a7a79e6->leave($__internal_67cf96f5917f7c8d0eacfd3e0404962d1b38bb211ee91345aac35b7c5a7a79e6_prof);

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
