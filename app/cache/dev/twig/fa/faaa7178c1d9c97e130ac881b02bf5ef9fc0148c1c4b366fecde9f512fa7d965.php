<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_c0df9d2207c50fb195aa51bf6d79a979e69b5834cd9bbd25586b2f7a9e3558b4 extends Twig_Template
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
        $__internal_be3872b2821bae4d29b07f59631e4d20c0fa61dd89055655009102a0aea6c796 = $this->env->getExtension("native_profiler");
        $__internal_be3872b2821bae4d29b07f59631e4d20c0fa61dd89055655009102a0aea6c796->enter($__internal_be3872b2821bae4d29b07f59631e4d20c0fa61dd89055655009102a0aea6c796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_be3872b2821bae4d29b07f59631e4d20c0fa61dd89055655009102a0aea6c796->leave($__internal_be3872b2821bae4d29b07f59631e4d20c0fa61dd89055655009102a0aea6c796_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bb2081176ba100e48cf5acb58bc40d90469e4a73f7784dee9c074ef93a8e9ad9 = $this->env->getExtension("native_profiler");
        $__internal_bb2081176ba100e48cf5acb58bc40d90469e4a73f7784dee9c074ef93a8e9ad9->enter($__internal_bb2081176ba100e48cf5acb58bc40d90469e4a73f7784dee9c074ef93a8e9ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bb2081176ba100e48cf5acb58bc40d90469e4a73f7784dee9c074ef93a8e9ad9->leave($__internal_bb2081176ba100e48cf5acb58bc40d90469e4a73f7784dee9c074ef93a8e9ad9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e114788383a1b41c7d4e34a3c4d9ca04082fc22a83d787b07b1df57938a46faa = $this->env->getExtension("native_profiler");
        $__internal_e114788383a1b41c7d4e34a3c4d9ca04082fc22a83d787b07b1df57938a46faa->enter($__internal_e114788383a1b41c7d4e34a3c4d9ca04082fc22a83d787b07b1df57938a46faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e114788383a1b41c7d4e34a3c4d9ca04082fc22a83d787b07b1df57938a46faa->leave($__internal_e114788383a1b41c7d4e34a3c4d9ca04082fc22a83d787b07b1df57938a46faa_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0caafd475417865eca70496e4e1e1b302e7bc417527d7587891eba52f4678e8f = $this->env->getExtension("native_profiler");
        $__internal_0caafd475417865eca70496e4e1e1b302e7bc417527d7587891eba52f4678e8f->enter($__internal_0caafd475417865eca70496e4e1e1b302e7bc417527d7587891eba52f4678e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0caafd475417865eca70496e4e1e1b302e7bc417527d7587891eba52f4678e8f->leave($__internal_0caafd475417865eca70496e4e1e1b302e7bc417527d7587891eba52f4678e8f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
