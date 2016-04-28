<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2a08afdf2ccf9b76f7b849b4a2606cf0f33a6c35eabcfcfd2925c82fb351be11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70c8be02f32473e3719598ff829dfe05552addd8740c504babb0727de0834dd4 = $this->env->getExtension("native_profiler");
        $__internal_70c8be02f32473e3719598ff829dfe05552addd8740c504babb0727de0834dd4->enter($__internal_70c8be02f32473e3719598ff829dfe05552addd8740c504babb0727de0834dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70c8be02f32473e3719598ff829dfe05552addd8740c504babb0727de0834dd4->leave($__internal_70c8be02f32473e3719598ff829dfe05552addd8740c504babb0727de0834dd4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d2c579305c7d70954d14d8d377003867668aa3babfed4794341af0a74c1fd3e = $this->env->getExtension("native_profiler");
        $__internal_7d2c579305c7d70954d14d8d377003867668aa3babfed4794341af0a74c1fd3e->enter($__internal_7d2c579305c7d70954d14d8d377003867668aa3babfed4794341af0a74c1fd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7d2c579305c7d70954d14d8d377003867668aa3babfed4794341af0a74c1fd3e->leave($__internal_7d2c579305c7d70954d14d8d377003867668aa3babfed4794341af0a74c1fd3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
