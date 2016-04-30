<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9aa2424a33e72b30583714d48d37fc367a5315bbc943458661cf779e4672b8c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7c8c1d894858c8f13e5c374fa4af37d95b7022d04eb830c560722e39fe7ac8e = $this->env->getExtension("native_profiler");
        $__internal_c7c8c1d894858c8f13e5c374fa4af37d95b7022d04eb830c560722e39fe7ac8e->enter($__internal_c7c8c1d894858c8f13e5c374fa4af37d95b7022d04eb830c560722e39fe7ac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c7c8c1d894858c8f13e5c374fa4af37d95b7022d04eb830c560722e39fe7ac8e->leave($__internal_c7c8c1d894858c8f13e5c374fa4af37d95b7022d04eb830c560722e39fe7ac8e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bd13f0e8e393af19a59b141ce6b2fca7af365f773b1026fb30b231e2bc40feea = $this->env->getExtension("native_profiler");
        $__internal_bd13f0e8e393af19a59b141ce6b2fca7af365f773b1026fb30b231e2bc40feea->enter($__internal_bd13f0e8e393af19a59b141ce6b2fca7af365f773b1026fb30b231e2bc40feea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bd13f0e8e393af19a59b141ce6b2fca7af365f773b1026fb30b231e2bc40feea->leave($__internal_bd13f0e8e393af19a59b141ce6b2fca7af365f773b1026fb30b231e2bc40feea_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3c8b74207fd1d432a9a5ed89ae7d5fd114e487e361e5f754f9e5565fc2ff6c95 = $this->env->getExtension("native_profiler");
        $__internal_3c8b74207fd1d432a9a5ed89ae7d5fd114e487e361e5f754f9e5565fc2ff6c95->enter($__internal_3c8b74207fd1d432a9a5ed89ae7d5fd114e487e361e5f754f9e5565fc2ff6c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3c8b74207fd1d432a9a5ed89ae7d5fd114e487e361e5f754f9e5565fc2ff6c95->leave($__internal_3c8b74207fd1d432a9a5ed89ae7d5fd114e487e361e5f754f9e5565fc2ff6c95_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e412cd8ce731cbe0abf179393ecbcf93a10e0bc48a964522e791af92ab3fa538 = $this->env->getExtension("native_profiler");
        $__internal_e412cd8ce731cbe0abf179393ecbcf93a10e0bc48a964522e791af92ab3fa538->enter($__internal_e412cd8ce731cbe0abf179393ecbcf93a10e0bc48a964522e791af92ab3fa538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e412cd8ce731cbe0abf179393ecbcf93a10e0bc48a964522e791af92ab3fa538->leave($__internal_e412cd8ce731cbe0abf179393ecbcf93a10e0bc48a964522e791af92ab3fa538_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
