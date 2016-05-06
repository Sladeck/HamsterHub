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
        $__internal_f241cb5901146bb69b67219d53ce4b111ac632ef317d65c9239bad3fc41cd404 = $this->env->getExtension("native_profiler");
        $__internal_f241cb5901146bb69b67219d53ce4b111ac632ef317d65c9239bad3fc41cd404->enter($__internal_f241cb5901146bb69b67219d53ce4b111ac632ef317d65c9239bad3fc41cd404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f241cb5901146bb69b67219d53ce4b111ac632ef317d65c9239bad3fc41cd404->leave($__internal_f241cb5901146bb69b67219d53ce4b111ac632ef317d65c9239bad3fc41cd404_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9a69a71eec3e23ffa19e8fe4e52141e0a2c5c23a8bb5cce83b51eb2734d7617 = $this->env->getExtension("native_profiler");
        $__internal_b9a69a71eec3e23ffa19e8fe4e52141e0a2c5c23a8bb5cce83b51eb2734d7617->enter($__internal_b9a69a71eec3e23ffa19e8fe4e52141e0a2c5c23a8bb5cce83b51eb2734d7617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b9a69a71eec3e23ffa19e8fe4e52141e0a2c5c23a8bb5cce83b51eb2734d7617->leave($__internal_b9a69a71eec3e23ffa19e8fe4e52141e0a2c5c23a8bb5cce83b51eb2734d7617_prof);

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
