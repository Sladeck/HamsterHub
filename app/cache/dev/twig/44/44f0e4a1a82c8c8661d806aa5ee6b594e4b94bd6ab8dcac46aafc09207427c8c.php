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
        $__internal_80de026d716b84decc8aa35d8de9389318db75477cf3462ca65261bd485e05cd = $this->env->getExtension("native_profiler");
        $__internal_80de026d716b84decc8aa35d8de9389318db75477cf3462ca65261bd485e05cd->enter($__internal_80de026d716b84decc8aa35d8de9389318db75477cf3462ca65261bd485e05cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80de026d716b84decc8aa35d8de9389318db75477cf3462ca65261bd485e05cd->leave($__internal_80de026d716b84decc8aa35d8de9389318db75477cf3462ca65261bd485e05cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c15f64ce186f327abdd1981c7983e976469e5a40b36a49faceec39be0c13b22 = $this->env->getExtension("native_profiler");
        $__internal_4c15f64ce186f327abdd1981c7983e976469e5a40b36a49faceec39be0c13b22->enter($__internal_4c15f64ce186f327abdd1981c7983e976469e5a40b36a49faceec39be0c13b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4c15f64ce186f327abdd1981c7983e976469e5a40b36a49faceec39be0c13b22->leave($__internal_4c15f64ce186f327abdd1981c7983e976469e5a40b36a49faceec39be0c13b22_prof);

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
