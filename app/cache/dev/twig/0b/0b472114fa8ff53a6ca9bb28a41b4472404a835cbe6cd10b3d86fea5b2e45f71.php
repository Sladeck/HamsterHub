<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_aa1720b836b3b7bc412edd3cba82bff7dfb89dcc9b6cc48e0e41f81a02e12a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_895378e6b900190941e94c2a12bf8fee2c5b1fe877fbff562d3ee41aa8c34615 = $this->env->getExtension("native_profiler");
        $__internal_895378e6b900190941e94c2a12bf8fee2c5b1fe877fbff562d3ee41aa8c34615->enter($__internal_895378e6b900190941e94c2a12bf8fee2c5b1fe877fbff562d3ee41aa8c34615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895378e6b900190941e94c2a12bf8fee2c5b1fe877fbff562d3ee41aa8c34615->leave($__internal_895378e6b900190941e94c2a12bf8fee2c5b1fe877fbff562d3ee41aa8c34615_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67714b50d8681eeaa64967d19feba909cbac29f0ef006bffa9e27f98a35c80f4 = $this->env->getExtension("native_profiler");
        $__internal_67714b50d8681eeaa64967d19feba909cbac29f0ef006bffa9e27f98a35c80f4->enter($__internal_67714b50d8681eeaa64967d19feba909cbac29f0ef006bffa9e27f98a35c80f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_67714b50d8681eeaa64967d19feba909cbac29f0ef006bffa9e27f98a35c80f4->leave($__internal_67714b50d8681eeaa64967d19feba909cbac29f0ef006bffa9e27f98a35c80f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
