<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_18a472385364aa1871b0f3d6314da9a36b3a917d9756b1190f20b54117d33ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_594bcb55187361f8698a6e0c166d99d651a5d00b156d5dadcabcb49a75578a0b = $this->env->getExtension("native_profiler");
        $__internal_594bcb55187361f8698a6e0c166d99d651a5d00b156d5dadcabcb49a75578a0b->enter($__internal_594bcb55187361f8698a6e0c166d99d651a5d00b156d5dadcabcb49a75578a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594bcb55187361f8698a6e0c166d99d651a5d00b156d5dadcabcb49a75578a0b->leave($__internal_594bcb55187361f8698a6e0c166d99d651a5d00b156d5dadcabcb49a75578a0b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_505ca29d16dfb03dc2f87d6fb83a87a721ba8737d0277f4219d3275a7e878aa0 = $this->env->getExtension("native_profiler");
        $__internal_505ca29d16dfb03dc2f87d6fb83a87a721ba8737d0277f4219d3275a7e878aa0->enter($__internal_505ca29d16dfb03dc2f87d6fb83a87a721ba8737d0277f4219d3275a7e878aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_505ca29d16dfb03dc2f87d6fb83a87a721ba8737d0277f4219d3275a7e878aa0->leave($__internal_505ca29d16dfb03dc2f87d6fb83a87a721ba8737d0277f4219d3275a7e878aa0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
