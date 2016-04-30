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
        $__internal_4518283f9445b9ccd3711eb12fbeb3ce604dc04112e82f2b7350b5a6ba9f4a8f = $this->env->getExtension("native_profiler");
        $__internal_4518283f9445b9ccd3711eb12fbeb3ce604dc04112e82f2b7350b5a6ba9f4a8f->enter($__internal_4518283f9445b9ccd3711eb12fbeb3ce604dc04112e82f2b7350b5a6ba9f4a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4518283f9445b9ccd3711eb12fbeb3ce604dc04112e82f2b7350b5a6ba9f4a8f->leave($__internal_4518283f9445b9ccd3711eb12fbeb3ce604dc04112e82f2b7350b5a6ba9f4a8f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc01b54b385b9a54f9acfc66667245b3665c5535a92a7e6b8aa04ee14b55bb25 = $this->env->getExtension("native_profiler");
        $__internal_fc01b54b385b9a54f9acfc66667245b3665c5535a92a7e6b8aa04ee14b55bb25->enter($__internal_fc01b54b385b9a54f9acfc66667245b3665c5535a92a7e6b8aa04ee14b55bb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fc01b54b385b9a54f9acfc66667245b3665c5535a92a7e6b8aa04ee14b55bb25->leave($__internal_fc01b54b385b9a54f9acfc66667245b3665c5535a92a7e6b8aa04ee14b55bb25_prof);

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
