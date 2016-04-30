<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c86da2c5d84dd9a3f191c6b70f934d2fe0f5b6dc39b026e795208561f5339730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4d82a2d7899ba9e487af91725048fdea145d9ae4b9f84913a0162075b4d8400b = $this->env->getExtension("native_profiler");
        $__internal_4d82a2d7899ba9e487af91725048fdea145d9ae4b9f84913a0162075b4d8400b->enter($__internal_4d82a2d7899ba9e487af91725048fdea145d9ae4b9f84913a0162075b4d8400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d82a2d7899ba9e487af91725048fdea145d9ae4b9f84913a0162075b4d8400b->leave($__internal_4d82a2d7899ba9e487af91725048fdea145d9ae4b9f84913a0162075b4d8400b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e14cb77d4883c9c2de6470e90a4b563d3b5b5a7d65a56b24146971f543d4c61c = $this->env->getExtension("native_profiler");
        $__internal_e14cb77d4883c9c2de6470e90a4b563d3b5b5a7d65a56b24146971f543d4c61c->enter($__internal_e14cb77d4883c9c2de6470e90a4b563d3b5b5a7d65a56b24146971f543d4c61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e14cb77d4883c9c2de6470e90a4b563d3b5b5a7d65a56b24146971f543d4c61c->leave($__internal_e14cb77d4883c9c2de6470e90a4b563d3b5b5a7d65a56b24146971f543d4c61c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
