<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cc2683001290471fa73c36ab87ca2178cd1a5a1da28d5588a5c6979c7026469f extends Twig_Template
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
        $__internal_39a9f91d0d019d877caf55dacfe488a5b2c4ae0f7a73fa125195053efa5ecf62 = $this->env->getExtension("native_profiler");
        $__internal_39a9f91d0d019d877caf55dacfe488a5b2c4ae0f7a73fa125195053efa5ecf62->enter($__internal_39a9f91d0d019d877caf55dacfe488a5b2c4ae0f7a73fa125195053efa5ecf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_39a9f91d0d019d877caf55dacfe488a5b2c4ae0f7a73fa125195053efa5ecf62->leave($__internal_39a9f91d0d019d877caf55dacfe488a5b2c4ae0f7a73fa125195053efa5ecf62_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c77f475ea04a56eda0916aa420a4ef01edc786ec9b5192b7c388ab0398a1c7c0 = $this->env->getExtension("native_profiler");
        $__internal_c77f475ea04a56eda0916aa420a4ef01edc786ec9b5192b7c388ab0398a1c7c0->enter($__internal_c77f475ea04a56eda0916aa420a4ef01edc786ec9b5192b7c388ab0398a1c7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c77f475ea04a56eda0916aa420a4ef01edc786ec9b5192b7c388ab0398a1c7c0->leave($__internal_c77f475ea04a56eda0916aa420a4ef01edc786ec9b5192b7c388ab0398a1c7c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
