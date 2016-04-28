<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a6147e9a7e45e40f5dfcb701f260b2145055b586ab7c197112ef997ba1e8984f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24f41e774bf6fa24cff96bd20580ddf0f8f216198fe175dba5bb98ad9351562d = $this->env->getExtension("native_profiler");
        $__internal_24f41e774bf6fa24cff96bd20580ddf0f8f216198fe175dba5bb98ad9351562d->enter($__internal_24f41e774bf6fa24cff96bd20580ddf0f8f216198fe175dba5bb98ad9351562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f41e774bf6fa24cff96bd20580ddf0f8f216198fe175dba5bb98ad9351562d->leave($__internal_24f41e774bf6fa24cff96bd20580ddf0f8f216198fe175dba5bb98ad9351562d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0c031ba689516937d3011ff7505f6d56d442a81dce39afd5a48db9a363dc9f2 = $this->env->getExtension("native_profiler");
        $__internal_e0c031ba689516937d3011ff7505f6d56d442a81dce39afd5a48db9a363dc9f2->enter($__internal_e0c031ba689516937d3011ff7505f6d56d442a81dce39afd5a48db9a363dc9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e0c031ba689516937d3011ff7505f6d56d442a81dce39afd5a48db9a363dc9f2->leave($__internal_e0c031ba689516937d3011ff7505f6d56d442a81dce39afd5a48db9a363dc9f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_058e08e5b0a693ad8fd44f2fe5b11e9694fe63d500e27aca37405970f20a3245 = $this->env->getExtension("native_profiler");
        $__internal_058e08e5b0a693ad8fd44f2fe5b11e9694fe63d500e27aca37405970f20a3245->enter($__internal_058e08e5b0a693ad8fd44f2fe5b11e9694fe63d500e27aca37405970f20a3245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_058e08e5b0a693ad8fd44f2fe5b11e9694fe63d500e27aca37405970f20a3245->leave($__internal_058e08e5b0a693ad8fd44f2fe5b11e9694fe63d500e27aca37405970f20a3245_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e51452a11f923e2c14e2984928f555f81746ac02f8a6629d5322bfb2eea376f3 = $this->env->getExtension("native_profiler");
        $__internal_e51452a11f923e2c14e2984928f555f81746ac02f8a6629d5322bfb2eea376f3->enter($__internal_e51452a11f923e2c14e2984928f555f81746ac02f8a6629d5322bfb2eea376f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e51452a11f923e2c14e2984928f555f81746ac02f8a6629d5322bfb2eea376f3->leave($__internal_e51452a11f923e2c14e2984928f555f81746ac02f8a6629d5322bfb2eea376f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
