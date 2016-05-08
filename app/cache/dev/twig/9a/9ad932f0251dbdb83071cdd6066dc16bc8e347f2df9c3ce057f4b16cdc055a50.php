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
        $__internal_424a1b5020c66b46aa888ddcc09ab4150f032f9b59810dfacd436f08f051f11e = $this->env->getExtension("native_profiler");
        $__internal_424a1b5020c66b46aa888ddcc09ab4150f032f9b59810dfacd436f08f051f11e->enter($__internal_424a1b5020c66b46aa888ddcc09ab4150f032f9b59810dfacd436f08f051f11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_424a1b5020c66b46aa888ddcc09ab4150f032f9b59810dfacd436f08f051f11e->leave($__internal_424a1b5020c66b46aa888ddcc09ab4150f032f9b59810dfacd436f08f051f11e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cd50bae48a783c924f1a7e80a06af490a8d1765b7b7a30a88b3c9831b9c600c = $this->env->getExtension("native_profiler");
        $__internal_3cd50bae48a783c924f1a7e80a06af490a8d1765b7b7a30a88b3c9831b9c600c->enter($__internal_3cd50bae48a783c924f1a7e80a06af490a8d1765b7b7a30a88b3c9831b9c600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3cd50bae48a783c924f1a7e80a06af490a8d1765b7b7a30a88b3c9831b9c600c->leave($__internal_3cd50bae48a783c924f1a7e80a06af490a8d1765b7b7a30a88b3c9831b9c600c_prof);

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
