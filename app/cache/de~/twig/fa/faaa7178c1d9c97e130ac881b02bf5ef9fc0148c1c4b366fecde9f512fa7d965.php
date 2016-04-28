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
        $__internal_7f6e03c3bc98511d24586b4430cdc53bf5d75462289bfcd3c2aea15444b86671 = $this->env->getExtension("native_profiler");
        $__internal_7f6e03c3bc98511d24586b4430cdc53bf5d75462289bfcd3c2aea15444b86671->enter($__internal_7f6e03c3bc98511d24586b4430cdc53bf5d75462289bfcd3c2aea15444b86671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7f6e03c3bc98511d24586b4430cdc53bf5d75462289bfcd3c2aea15444b86671->leave($__internal_7f6e03c3bc98511d24586b4430cdc53bf5d75462289bfcd3c2aea15444b86671_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b3d7a210a4eb5801eca1948e76018813895d0e90fa7004f6233e6550a966b791 = $this->env->getExtension("native_profiler");
        $__internal_b3d7a210a4eb5801eca1948e76018813895d0e90fa7004f6233e6550a966b791->enter($__internal_b3d7a210a4eb5801eca1948e76018813895d0e90fa7004f6233e6550a966b791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b3d7a210a4eb5801eca1948e76018813895d0e90fa7004f6233e6550a966b791->leave($__internal_b3d7a210a4eb5801eca1948e76018813895d0e90fa7004f6233e6550a966b791_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_81e97745a0f1979adfea88e9fe00fa68124d9518b697abf2eb45c4ddef65d53b = $this->env->getExtension("native_profiler");
        $__internal_81e97745a0f1979adfea88e9fe00fa68124d9518b697abf2eb45c4ddef65d53b->enter($__internal_81e97745a0f1979adfea88e9fe00fa68124d9518b697abf2eb45c4ddef65d53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_81e97745a0f1979adfea88e9fe00fa68124d9518b697abf2eb45c4ddef65d53b->leave($__internal_81e97745a0f1979adfea88e9fe00fa68124d9518b697abf2eb45c4ddef65d53b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c9c6ed44a48ed9ca7b6db0f1d34f895b8f725f83047624522f739444ce5db22f = $this->env->getExtension("native_profiler");
        $__internal_c9c6ed44a48ed9ca7b6db0f1d34f895b8f725f83047624522f739444ce5db22f->enter($__internal_c9c6ed44a48ed9ca7b6db0f1d34f895b8f725f83047624522f739444ce5db22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c9c6ed44a48ed9ca7b6db0f1d34f895b8f725f83047624522f739444ce5db22f->leave($__internal_c9c6ed44a48ed9ca7b6db0f1d34f895b8f725f83047624522f739444ce5db22f_prof);

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
