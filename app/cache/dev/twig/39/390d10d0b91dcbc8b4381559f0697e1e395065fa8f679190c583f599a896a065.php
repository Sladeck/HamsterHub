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
        $__internal_eb37a2bb1f12fcd80956cd02632f70d5b78a9c04c873980be49dc47f70ccb322 = $this->env->getExtension("native_profiler");
        $__internal_eb37a2bb1f12fcd80956cd02632f70d5b78a9c04c873980be49dc47f70ccb322->enter($__internal_eb37a2bb1f12fcd80956cd02632f70d5b78a9c04c873980be49dc47f70ccb322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb37a2bb1f12fcd80956cd02632f70d5b78a9c04c873980be49dc47f70ccb322->leave($__internal_eb37a2bb1f12fcd80956cd02632f70d5b78a9c04c873980be49dc47f70ccb322_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb90c2535a29dd0b7475545a1fb7a0551a739c572ba1861b3229f161dd7c0d0e = $this->env->getExtension("native_profiler");
        $__internal_eb90c2535a29dd0b7475545a1fb7a0551a739c572ba1861b3229f161dd7c0d0e->enter($__internal_eb90c2535a29dd0b7475545a1fb7a0551a739c572ba1861b3229f161dd7c0d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_eb90c2535a29dd0b7475545a1fb7a0551a739c572ba1861b3229f161dd7c0d0e->leave($__internal_eb90c2535a29dd0b7475545a1fb7a0551a739c572ba1861b3229f161dd7c0d0e_prof);

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
