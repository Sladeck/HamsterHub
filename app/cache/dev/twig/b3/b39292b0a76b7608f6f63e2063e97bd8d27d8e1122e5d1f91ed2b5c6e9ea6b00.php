<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_00b63aec5ab124cbff7c6b1f3c17ec7c9f023e95ee7914d27ad6917901920638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_134d8d2d1cf02a34a811248fc1a4ec4e17c028b99e64678e5a8edadf14bc215d = $this->env->getExtension("native_profiler");
        $__internal_134d8d2d1cf02a34a811248fc1a4ec4e17c028b99e64678e5a8edadf14bc215d->enter($__internal_134d8d2d1cf02a34a811248fc1a4ec4e17c028b99e64678e5a8edadf14bc215d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134d8d2d1cf02a34a811248fc1a4ec4e17c028b99e64678e5a8edadf14bc215d->leave($__internal_134d8d2d1cf02a34a811248fc1a4ec4e17c028b99e64678e5a8edadf14bc215d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09434fa3571f25e92d664013ec49dac26d980654ae9b2ddec60f7690b7a54b9d = $this->env->getExtension("native_profiler");
        $__internal_09434fa3571f25e92d664013ec49dac26d980654ae9b2ddec60f7690b7a54b9d->enter($__internal_09434fa3571f25e92d664013ec49dac26d980654ae9b2ddec60f7690b7a54b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_09434fa3571f25e92d664013ec49dac26d980654ae9b2ddec60f7690b7a54b9d->leave($__internal_09434fa3571f25e92d664013ec49dac26d980654ae9b2ddec60f7690b7a54b9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
