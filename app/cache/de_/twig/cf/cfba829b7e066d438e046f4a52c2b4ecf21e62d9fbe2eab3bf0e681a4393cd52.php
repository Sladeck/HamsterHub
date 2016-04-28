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
        $__internal_af03153c7744a21079a5e14daf43f51a582dbe0d55480099251f90e157649170 = $this->env->getExtension("native_profiler");
        $__internal_af03153c7744a21079a5e14daf43f51a582dbe0d55480099251f90e157649170->enter($__internal_af03153c7744a21079a5e14daf43f51a582dbe0d55480099251f90e157649170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_af03153c7744a21079a5e14daf43f51a582dbe0d55480099251f90e157649170->leave($__internal_af03153c7744a21079a5e14daf43f51a582dbe0d55480099251f90e157649170_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_877c26ecf174ce6c6e43d783caf25d91fe29e37c90c8c537fef0618563c95a69 = $this->env->getExtension("native_profiler");
        $__internal_877c26ecf174ce6c6e43d783caf25d91fe29e37c90c8c537fef0618563c95a69->enter($__internal_877c26ecf174ce6c6e43d783caf25d91fe29e37c90c8c537fef0618563c95a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_877c26ecf174ce6c6e43d783caf25d91fe29e37c90c8c537fef0618563c95a69->leave($__internal_877c26ecf174ce6c6e43d783caf25d91fe29e37c90c8c537fef0618563c95a69_prof);

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
