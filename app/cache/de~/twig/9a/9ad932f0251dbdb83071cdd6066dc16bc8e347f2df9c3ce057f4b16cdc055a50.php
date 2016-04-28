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
        $__internal_5cd3f01206ce6e0a6d36b2a9205af9bc4b4994828f269b388b5bee1257d98304 = $this->env->getExtension("native_profiler");
        $__internal_5cd3f01206ce6e0a6d36b2a9205af9bc4b4994828f269b388b5bee1257d98304->enter($__internal_5cd3f01206ce6e0a6d36b2a9205af9bc4b4994828f269b388b5bee1257d98304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5cd3f01206ce6e0a6d36b2a9205af9bc4b4994828f269b388b5bee1257d98304->leave($__internal_5cd3f01206ce6e0a6d36b2a9205af9bc4b4994828f269b388b5bee1257d98304_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_80ae41c977649e76431d5d1947f6eafe07b28066c47604fa10481307314e3d80 = $this->env->getExtension("native_profiler");
        $__internal_80ae41c977649e76431d5d1947f6eafe07b28066c47604fa10481307314e3d80->enter($__internal_80ae41c977649e76431d5d1947f6eafe07b28066c47604fa10481307314e3d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_80ae41c977649e76431d5d1947f6eafe07b28066c47604fa10481307314e3d80->leave($__internal_80ae41c977649e76431d5d1947f6eafe07b28066c47604fa10481307314e3d80_prof);

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
