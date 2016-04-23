<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c5729bdfbedfc3c537e71a2d2b435826b76676e1d26beef7ba259e2fd74bfaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_56b7b6d3aac1271be8325ae0d030b7e127eee2a65c802ec9aa91e55ffd9eb67e = $this->env->getExtension("native_profiler");
        $__internal_56b7b6d3aac1271be8325ae0d030b7e127eee2a65c802ec9aa91e55ffd9eb67e->enter($__internal_56b7b6d3aac1271be8325ae0d030b7e127eee2a65c802ec9aa91e55ffd9eb67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b7b6d3aac1271be8325ae0d030b7e127eee2a65c802ec9aa91e55ffd9eb67e->leave($__internal_56b7b6d3aac1271be8325ae0d030b7e127eee2a65c802ec9aa91e55ffd9eb67e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14c1f85d1f2690ec3459150a57922b586ebddc37099b263c670ed9e5a334be3d = $this->env->getExtension("native_profiler");
        $__internal_14c1f85d1f2690ec3459150a57922b586ebddc37099b263c670ed9e5a334be3d->enter($__internal_14c1f85d1f2690ec3459150a57922b586ebddc37099b263c670ed9e5a334be3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_14c1f85d1f2690ec3459150a57922b586ebddc37099b263c670ed9e5a334be3d->leave($__internal_14c1f85d1f2690ec3459150a57922b586ebddc37099b263c670ed9e5a334be3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
