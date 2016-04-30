<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2c5b9e28a128b65e36e908a263419a1632a4c114f24fce5f5a60a5f8c1d4962f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cba1f59a304cec550c74acc1d0242939b55ceb3c8c74936fb585bbb3c0bef9bb = $this->env->getExtension("native_profiler");
        $__internal_cba1f59a304cec550c74acc1d0242939b55ceb3c8c74936fb585bbb3c0bef9bb->enter($__internal_cba1f59a304cec550c74acc1d0242939b55ceb3c8c74936fb585bbb3c0bef9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cba1f59a304cec550c74acc1d0242939b55ceb3c8c74936fb585bbb3c0bef9bb->leave($__internal_cba1f59a304cec550c74acc1d0242939b55ceb3c8c74936fb585bbb3c0bef9bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cddaaf9eb8a4ca940803256e294b5b756cf1189223f36b5e406ae2f74d7c748 = $this->env->getExtension("native_profiler");
        $__internal_3cddaaf9eb8a4ca940803256e294b5b756cf1189223f36b5e406ae2f74d7c748->enter($__internal_3cddaaf9eb8a4ca940803256e294b5b756cf1189223f36b5e406ae2f74d7c748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3cddaaf9eb8a4ca940803256e294b5b756cf1189223f36b5e406ae2f74d7c748->leave($__internal_3cddaaf9eb8a4ca940803256e294b5b756cf1189223f36b5e406ae2f74d7c748_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
