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
        $__internal_986d5780f9263855342caa82e2e970eee82809586a4f081cfa807c526049f81c = $this->env->getExtension("native_profiler");
        $__internal_986d5780f9263855342caa82e2e970eee82809586a4f081cfa807c526049f81c->enter($__internal_986d5780f9263855342caa82e2e970eee82809586a4f081cfa807c526049f81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_986d5780f9263855342caa82e2e970eee82809586a4f081cfa807c526049f81c->leave($__internal_986d5780f9263855342caa82e2e970eee82809586a4f081cfa807c526049f81c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_af1aca4fb71a65c60a964c46845793b35605c1726067bc2d9a094248e6f094c5 = $this->env->getExtension("native_profiler");
        $__internal_af1aca4fb71a65c60a964c46845793b35605c1726067bc2d9a094248e6f094c5->enter($__internal_af1aca4fb71a65c60a964c46845793b35605c1726067bc2d9a094248e6f094c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_af1aca4fb71a65c60a964c46845793b35605c1726067bc2d9a094248e6f094c5->leave($__internal_af1aca4fb71a65c60a964c46845793b35605c1726067bc2d9a094248e6f094c5_prof);

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
