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
        $__internal_8e787d15349198c4ef2017a3e0fe406feabe87ef94c9e0381063c172fba4a92c = $this->env->getExtension("native_profiler");
        $__internal_8e787d15349198c4ef2017a3e0fe406feabe87ef94c9e0381063c172fba4a92c->enter($__internal_8e787d15349198c4ef2017a3e0fe406feabe87ef94c9e0381063c172fba4a92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8e787d15349198c4ef2017a3e0fe406feabe87ef94c9e0381063c172fba4a92c->leave($__internal_8e787d15349198c4ef2017a3e0fe406feabe87ef94c9e0381063c172fba4a92c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac492156d50491b12ae1ea1e1e4884fd521e7a7a736698a7ea1a122ba1bbe2da = $this->env->getExtension("native_profiler");
        $__internal_ac492156d50491b12ae1ea1e1e4884fd521e7a7a736698a7ea1a122ba1bbe2da->enter($__internal_ac492156d50491b12ae1ea1e1e4884fd521e7a7a736698a7ea1a122ba1bbe2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ac492156d50491b12ae1ea1e1e4884fd521e7a7a736698a7ea1a122ba1bbe2da->leave($__internal_ac492156d50491b12ae1ea1e1e4884fd521e7a7a736698a7ea1a122ba1bbe2da_prof);

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
