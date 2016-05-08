<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_97199d6a564c012918c3636ed7ab34633c3db2f70602df683e61b6edb236edc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_6eaa5b8207dcea76dd3bc5033b5d6bbbce22809291188d107ba59ef73e99cc59 = $this->env->getExtension("native_profiler");
        $__internal_6eaa5b8207dcea76dd3bc5033b5d6bbbce22809291188d107ba59ef73e99cc59->enter($__internal_6eaa5b8207dcea76dd3bc5033b5d6bbbce22809291188d107ba59ef73e99cc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eaa5b8207dcea76dd3bc5033b5d6bbbce22809291188d107ba59ef73e99cc59->leave($__internal_6eaa5b8207dcea76dd3bc5033b5d6bbbce22809291188d107ba59ef73e99cc59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8cbcc9c8c1cc620d2841935af6485eabf5192411a171c83057d6aa36d60e440 = $this->env->getExtension("native_profiler");
        $__internal_b8cbcc9c8c1cc620d2841935af6485eabf5192411a171c83057d6aa36d60e440->enter($__internal_b8cbcc9c8c1cc620d2841935af6485eabf5192411a171c83057d6aa36d60e440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_b8cbcc9c8c1cc620d2841935af6485eabf5192411a171c83057d6aa36d60e440->leave($__internal_b8cbcc9c8c1cc620d2841935af6485eabf5192411a171c83057d6aa36d60e440_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
