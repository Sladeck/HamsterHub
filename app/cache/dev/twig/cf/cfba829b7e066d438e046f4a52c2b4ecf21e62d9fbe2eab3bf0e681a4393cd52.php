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
        $__internal_d83928a73dabd74642151d43fd966c700b9cbdd476991f6d93ddec4c97355a69 = $this->env->getExtension("native_profiler");
        $__internal_d83928a73dabd74642151d43fd966c700b9cbdd476991f6d93ddec4c97355a69->enter($__internal_d83928a73dabd74642151d43fd966c700b9cbdd476991f6d93ddec4c97355a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d83928a73dabd74642151d43fd966c700b9cbdd476991f6d93ddec4c97355a69->leave($__internal_d83928a73dabd74642151d43fd966c700b9cbdd476991f6d93ddec4c97355a69_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef17bb6f077de9785daf4a04e6b8ed4b436d4d744ed1d8dd08bc0191a357c872 = $this->env->getExtension("native_profiler");
        $__internal_ef17bb6f077de9785daf4a04e6b8ed4b436d4d744ed1d8dd08bc0191a357c872->enter($__internal_ef17bb6f077de9785daf4a04e6b8ed4b436d4d744ed1d8dd08bc0191a357c872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ef17bb6f077de9785daf4a04e6b8ed4b436d4d744ed1d8dd08bc0191a357c872->leave($__internal_ef17bb6f077de9785daf4a04e6b8ed4b436d4d744ed1d8dd08bc0191a357c872_prof);

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
