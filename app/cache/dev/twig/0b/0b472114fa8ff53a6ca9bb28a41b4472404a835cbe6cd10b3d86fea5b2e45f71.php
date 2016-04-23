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
        $__internal_55a9e9f2e8cb5ebc6912b9e588d3bd96098307d36ac29dc790f6aee68a030276 = $this->env->getExtension("native_profiler");
        $__internal_55a9e9f2e8cb5ebc6912b9e588d3bd96098307d36ac29dc790f6aee68a030276->enter($__internal_55a9e9f2e8cb5ebc6912b9e588d3bd96098307d36ac29dc790f6aee68a030276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55a9e9f2e8cb5ebc6912b9e588d3bd96098307d36ac29dc790f6aee68a030276->leave($__internal_55a9e9f2e8cb5ebc6912b9e588d3bd96098307d36ac29dc790f6aee68a030276_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1451267a68818330bedf8cb70a015647265fe2d6104ca0a7043ea213e9c4ffb1 = $this->env->getExtension("native_profiler");
        $__internal_1451267a68818330bedf8cb70a015647265fe2d6104ca0a7043ea213e9c4ffb1->enter($__internal_1451267a68818330bedf8cb70a015647265fe2d6104ca0a7043ea213e9c4ffb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1451267a68818330bedf8cb70a015647265fe2d6104ca0a7043ea213e9c4ffb1->leave($__internal_1451267a68818330bedf8cb70a015647265fe2d6104ca0a7043ea213e9c4ffb1_prof);

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
