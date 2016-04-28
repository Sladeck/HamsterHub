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
        $__internal_699bcda8928651370a0722f1dab77157db0c583a02f1c7918904394f3d320715 = $this->env->getExtension("native_profiler");
        $__internal_699bcda8928651370a0722f1dab77157db0c583a02f1c7918904394f3d320715->enter($__internal_699bcda8928651370a0722f1dab77157db0c583a02f1c7918904394f3d320715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699bcda8928651370a0722f1dab77157db0c583a02f1c7918904394f3d320715->leave($__internal_699bcda8928651370a0722f1dab77157db0c583a02f1c7918904394f3d320715_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b73be5861e1c44a9c1341edc467e95288d01d76622480a53a359dc9b941808ae = $this->env->getExtension("native_profiler");
        $__internal_b73be5861e1c44a9c1341edc467e95288d01d76622480a53a359dc9b941808ae->enter($__internal_b73be5861e1c44a9c1341edc467e95288d01d76622480a53a359dc9b941808ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_b73be5861e1c44a9c1341edc467e95288d01d76622480a53a359dc9b941808ae->leave($__internal_b73be5861e1c44a9c1341edc467e95288d01d76622480a53a359dc9b941808ae_prof);

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
