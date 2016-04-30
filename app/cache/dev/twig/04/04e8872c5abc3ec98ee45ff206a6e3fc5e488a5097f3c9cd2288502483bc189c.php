<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_01b3364a3dc8f027a1200ad366c3216be4361a7a8d83f60fa3da503e20d59c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_fbff1c5310d22051790e21d5763c0383c9c9c8221e63aa1aa43647a9d946443e = $this->env->getExtension("native_profiler");
        $__internal_fbff1c5310d22051790e21d5763c0383c9c9c8221e63aa1aa43647a9d946443e->enter($__internal_fbff1c5310d22051790e21d5763c0383c9c9c8221e63aa1aa43647a9d946443e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbff1c5310d22051790e21d5763c0383c9c9c8221e63aa1aa43647a9d946443e->leave($__internal_fbff1c5310d22051790e21d5763c0383c9c9c8221e63aa1aa43647a9d946443e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62a0362df66fb06c7fc276d2462782fa7713c0a2abb128f9fa3ac922f9b09157 = $this->env->getExtension("native_profiler");
        $__internal_62a0362df66fb06c7fc276d2462782fa7713c0a2abb128f9fa3ac922f9b09157->enter($__internal_62a0362df66fb06c7fc276d2462782fa7713c0a2abb128f9fa3ac922f9b09157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_62a0362df66fb06c7fc276d2462782fa7713c0a2abb128f9fa3ac922f9b09157->leave($__internal_62a0362df66fb06c7fc276d2462782fa7713c0a2abb128f9fa3ac922f9b09157_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
