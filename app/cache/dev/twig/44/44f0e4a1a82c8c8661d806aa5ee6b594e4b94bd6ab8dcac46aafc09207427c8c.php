<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_50e602516469f14c01291bc39bc961e8a79a23380a780a143fa9bd76d1917203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_865abefc693da9c73b94b61b2b35da42630d22eba4c03bc5cf8dd472d412711e = $this->env->getExtension("native_profiler");
        $__internal_865abefc693da9c73b94b61b2b35da42630d22eba4c03bc5cf8dd472d412711e->enter($__internal_865abefc693da9c73b94b61b2b35da42630d22eba4c03bc5cf8dd472d412711e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_865abefc693da9c73b94b61b2b35da42630d22eba4c03bc5cf8dd472d412711e->leave($__internal_865abefc693da9c73b94b61b2b35da42630d22eba4c03bc5cf8dd472d412711e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6674752db88ad460f0008bfd9cd35bf7f61dd7ba8e7a864b43da96ca4277fbf7 = $this->env->getExtension("native_profiler");
        $__internal_6674752db88ad460f0008bfd9cd35bf7f61dd7ba8e7a864b43da96ca4277fbf7->enter($__internal_6674752db88ad460f0008bfd9cd35bf7f61dd7ba8e7a864b43da96ca4277fbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_6674752db88ad460f0008bfd9cd35bf7f61dd7ba8e7a864b43da96ca4277fbf7->leave($__internal_6674752db88ad460f0008bfd9cd35bf7f61dd7ba8e7a864b43da96ca4277fbf7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
