<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_fe0e006a3e0dfb7f3d9380939adad442a1f743f6f4efd2b0b9fb57854a79665b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_726c1bf66d669ec1b2971d4c4807d10b0b86468dba9cd804af3f144b820630c6 = $this->env->getExtension("native_profiler");
        $__internal_726c1bf66d669ec1b2971d4c4807d10b0b86468dba9cd804af3f144b820630c6->enter($__internal_726c1bf66d669ec1b2971d4c4807d10b0b86468dba9cd804af3f144b820630c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_726c1bf66d669ec1b2971d4c4807d10b0b86468dba9cd804af3f144b820630c6->leave($__internal_726c1bf66d669ec1b2971d4c4807d10b0b86468dba9cd804af3f144b820630c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6dc17eb70cd7010178b9a1ff35c44f538359a2b4f7233537016015de82750638 = $this->env->getExtension("native_profiler");
        $__internal_6dc17eb70cd7010178b9a1ff35c44f538359a2b4f7233537016015de82750638->enter($__internal_6dc17eb70cd7010178b9a1ff35c44f538359a2b4f7233537016015de82750638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_6dc17eb70cd7010178b9a1ff35c44f538359a2b4f7233537016015de82750638->leave($__internal_6dc17eb70cd7010178b9a1ff35c44f538359a2b4f7233537016015de82750638_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
