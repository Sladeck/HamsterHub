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
        $__internal_49b06524ce3ba6b496eab1cf777ed71eb3a36979743dfdb5211bf86d7f083e0e = $this->env->getExtension("native_profiler");
        $__internal_49b06524ce3ba6b496eab1cf777ed71eb3a36979743dfdb5211bf86d7f083e0e->enter($__internal_49b06524ce3ba6b496eab1cf777ed71eb3a36979743dfdb5211bf86d7f083e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_49b06524ce3ba6b496eab1cf777ed71eb3a36979743dfdb5211bf86d7f083e0e->leave($__internal_49b06524ce3ba6b496eab1cf777ed71eb3a36979743dfdb5211bf86d7f083e0e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_833fcb316e41723ff29747474988c12822a3ed2bac0bd9ea8e96425d1bc2b288 = $this->env->getExtension("native_profiler");
        $__internal_833fcb316e41723ff29747474988c12822a3ed2bac0bd9ea8e96425d1bc2b288->enter($__internal_833fcb316e41723ff29747474988c12822a3ed2bac0bd9ea8e96425d1bc2b288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_833fcb316e41723ff29747474988c12822a3ed2bac0bd9ea8e96425d1bc2b288->leave($__internal_833fcb316e41723ff29747474988c12822a3ed2bac0bd9ea8e96425d1bc2b288_prof);

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
