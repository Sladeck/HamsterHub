<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3c67d418b8165c01e9319a9bcb3d006ee812659771e319104fe8824c5b919441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e3d4775a9e80c3fe0693d4640c92e0f9687cc08803472086493a50322e5e2bba = $this->env->getExtension("native_profiler");
        $__internal_e3d4775a9e80c3fe0693d4640c92e0f9687cc08803472086493a50322e5e2bba->enter($__internal_e3d4775a9e80c3fe0693d4640c92e0f9687cc08803472086493a50322e5e2bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d4775a9e80c3fe0693d4640c92e0f9687cc08803472086493a50322e5e2bba->leave($__internal_e3d4775a9e80c3fe0693d4640c92e0f9687cc08803472086493a50322e5e2bba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3aeea6ca18a610d7b0a1e20734abf0bd303cbb18aa5a0517b1b4e78fd0549a88 = $this->env->getExtension("native_profiler");
        $__internal_3aeea6ca18a610d7b0a1e20734abf0bd303cbb18aa5a0517b1b4e78fd0549a88->enter($__internal_3aeea6ca18a610d7b0a1e20734abf0bd303cbb18aa5a0517b1b4e78fd0549a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3aeea6ca18a610d7b0a1e20734abf0bd303cbb18aa5a0517b1b4e78fd0549a88->leave($__internal_3aeea6ca18a610d7b0a1e20734abf0bd303cbb18aa5a0517b1b4e78fd0549a88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
