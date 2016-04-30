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
        $__internal_add7818279b1fe242055163d2a97abdec27aeeea083dfb047776d4371cb68f82 = $this->env->getExtension("native_profiler");
        $__internal_add7818279b1fe242055163d2a97abdec27aeeea083dfb047776d4371cb68f82->enter($__internal_add7818279b1fe242055163d2a97abdec27aeeea083dfb047776d4371cb68f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_add7818279b1fe242055163d2a97abdec27aeeea083dfb047776d4371cb68f82->leave($__internal_add7818279b1fe242055163d2a97abdec27aeeea083dfb047776d4371cb68f82_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_44d55f5ddba09058b14327b76316ed47d13f4b913ed25a05b5472b65ca29f705 = $this->env->getExtension("native_profiler");
        $__internal_44d55f5ddba09058b14327b76316ed47d13f4b913ed25a05b5472b65ca29f705->enter($__internal_44d55f5ddba09058b14327b76316ed47d13f4b913ed25a05b5472b65ca29f705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_44d55f5ddba09058b14327b76316ed47d13f4b913ed25a05b5472b65ca29f705->leave($__internal_44d55f5ddba09058b14327b76316ed47d13f4b913ed25a05b5472b65ca29f705_prof);

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
