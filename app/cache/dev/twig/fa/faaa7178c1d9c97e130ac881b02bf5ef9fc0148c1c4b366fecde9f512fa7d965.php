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
        $__internal_06d1ec8660a1c06ca3b5ed6018de10f3ff77b477fc1ce7474082ffa5ff0b83b6 = $this->env->getExtension("native_profiler");
        $__internal_06d1ec8660a1c06ca3b5ed6018de10f3ff77b477fc1ce7474082ffa5ff0b83b6->enter($__internal_06d1ec8660a1c06ca3b5ed6018de10f3ff77b477fc1ce7474082ffa5ff0b83b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_06d1ec8660a1c06ca3b5ed6018de10f3ff77b477fc1ce7474082ffa5ff0b83b6->leave($__internal_06d1ec8660a1c06ca3b5ed6018de10f3ff77b477fc1ce7474082ffa5ff0b83b6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5abc75c6e7e6db83f15415ec6c8aa15017610f44f1977ad0a95919e4dc6e56c8 = $this->env->getExtension("native_profiler");
        $__internal_5abc75c6e7e6db83f15415ec6c8aa15017610f44f1977ad0a95919e4dc6e56c8->enter($__internal_5abc75c6e7e6db83f15415ec6c8aa15017610f44f1977ad0a95919e4dc6e56c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5abc75c6e7e6db83f15415ec6c8aa15017610f44f1977ad0a95919e4dc6e56c8->leave($__internal_5abc75c6e7e6db83f15415ec6c8aa15017610f44f1977ad0a95919e4dc6e56c8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_71620d05581135a2290604864e01070892527afa5019bb570074fbcfae651672 = $this->env->getExtension("native_profiler");
        $__internal_71620d05581135a2290604864e01070892527afa5019bb570074fbcfae651672->enter($__internal_71620d05581135a2290604864e01070892527afa5019bb570074fbcfae651672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_71620d05581135a2290604864e01070892527afa5019bb570074fbcfae651672->leave($__internal_71620d05581135a2290604864e01070892527afa5019bb570074fbcfae651672_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_02aa4450c64e0ce74ca6a69484c8142cf63e4a20eadec7c77947842330c8ecec = $this->env->getExtension("native_profiler");
        $__internal_02aa4450c64e0ce74ca6a69484c8142cf63e4a20eadec7c77947842330c8ecec->enter($__internal_02aa4450c64e0ce74ca6a69484c8142cf63e4a20eadec7c77947842330c8ecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_02aa4450c64e0ce74ca6a69484c8142cf63e4a20eadec7c77947842330c8ecec->leave($__internal_02aa4450c64e0ce74ca6a69484c8142cf63e4a20eadec7c77947842330c8ecec_prof);

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
