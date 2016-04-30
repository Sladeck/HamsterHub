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
        $__internal_8e09aca9d4aea6902858a4a341b981de9c2a05dad44674c3871b4c4e607bef31 = $this->env->getExtension("native_profiler");
        $__internal_8e09aca9d4aea6902858a4a341b981de9c2a05dad44674c3871b4c4e607bef31->enter($__internal_8e09aca9d4aea6902858a4a341b981de9c2a05dad44674c3871b4c4e607bef31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8e09aca9d4aea6902858a4a341b981de9c2a05dad44674c3871b4c4e607bef31->leave($__internal_8e09aca9d4aea6902858a4a341b981de9c2a05dad44674c3871b4c4e607bef31_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2240f088153ff703ddd27cd6ea08e025426b3901cadb7719a6162f01b40ebb6c = $this->env->getExtension("native_profiler");
        $__internal_2240f088153ff703ddd27cd6ea08e025426b3901cadb7719a6162f01b40ebb6c->enter($__internal_2240f088153ff703ddd27cd6ea08e025426b3901cadb7719a6162f01b40ebb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2240f088153ff703ddd27cd6ea08e025426b3901cadb7719a6162f01b40ebb6c->leave($__internal_2240f088153ff703ddd27cd6ea08e025426b3901cadb7719a6162f01b40ebb6c_prof);

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
