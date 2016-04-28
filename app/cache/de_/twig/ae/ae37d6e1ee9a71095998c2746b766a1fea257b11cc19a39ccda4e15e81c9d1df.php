<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e6070da14b9595892785cf98184e4b7c18c4e4f9cac84b3ccfcbc5be29967448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d1ba5d1893338a1a2ae2b94be04d5c3a0305be1134d4cb2e161c38b35313dabc = $this->env->getExtension("native_profiler");
        $__internal_d1ba5d1893338a1a2ae2b94be04d5c3a0305be1134d4cb2e161c38b35313dabc->enter($__internal_d1ba5d1893338a1a2ae2b94be04d5c3a0305be1134d4cb2e161c38b35313dabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ba5d1893338a1a2ae2b94be04d5c3a0305be1134d4cb2e161c38b35313dabc->leave($__internal_d1ba5d1893338a1a2ae2b94be04d5c3a0305be1134d4cb2e161c38b35313dabc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19bcc07f2da20c9831e1e5c7ef86d5fd27eb83944d665cbe00baeec60579eca5 = $this->env->getExtension("native_profiler");
        $__internal_19bcc07f2da20c9831e1e5c7ef86d5fd27eb83944d665cbe00baeec60579eca5->enter($__internal_19bcc07f2da20c9831e1e5c7ef86d5fd27eb83944d665cbe00baeec60579eca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_19bcc07f2da20c9831e1e5c7ef86d5fd27eb83944d665cbe00baeec60579eca5->leave($__internal_19bcc07f2da20c9831e1e5c7ef86d5fd27eb83944d665cbe00baeec60579eca5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
