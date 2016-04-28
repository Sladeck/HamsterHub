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
        $__internal_912219ba498c7e31a43edf2978a2ac98ba7848421754b01c082ddefe260b54c4 = $this->env->getExtension("native_profiler");
        $__internal_912219ba498c7e31a43edf2978a2ac98ba7848421754b01c082ddefe260b54c4->enter($__internal_912219ba498c7e31a43edf2978a2ac98ba7848421754b01c082ddefe260b54c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_912219ba498c7e31a43edf2978a2ac98ba7848421754b01c082ddefe260b54c4->leave($__internal_912219ba498c7e31a43edf2978a2ac98ba7848421754b01c082ddefe260b54c4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_162cb147a99995729dedeba88a87dc10c9000af1da4c0c937c94ff6d432e5723 = $this->env->getExtension("native_profiler");
        $__internal_162cb147a99995729dedeba88a87dc10c9000af1da4c0c937c94ff6d432e5723->enter($__internal_162cb147a99995729dedeba88a87dc10c9000af1da4c0c937c94ff6d432e5723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_162cb147a99995729dedeba88a87dc10c9000af1da4c0c937c94ff6d432e5723->leave($__internal_162cb147a99995729dedeba88a87dc10c9000af1da4c0c937c94ff6d432e5723_prof);

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
