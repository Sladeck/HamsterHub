<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7b7bb8a3abb6ff886ffc4a6dce9f0bcb8db1226aaf344a52687ad44b36055f9e extends Twig_Template
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
        $__internal_1abbb63fb7bb7b79105f582acc96bede8a6998dad4946b6996bd4241b3a9bb5b = $this->env->getExtension("native_profiler");
        $__internal_1abbb63fb7bb7b79105f582acc96bede8a6998dad4946b6996bd4241b3a9bb5b->enter($__internal_1abbb63fb7bb7b79105f582acc96bede8a6998dad4946b6996bd4241b3a9bb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1abbb63fb7bb7b79105f582acc96bede8a6998dad4946b6996bd4241b3a9bb5b->leave($__internal_1abbb63fb7bb7b79105f582acc96bede8a6998dad4946b6996bd4241b3a9bb5b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e406efbe007b28d142e11309d96d4b96e2516a2f1ab568e25346393ac3657d0e = $this->env->getExtension("native_profiler");
        $__internal_e406efbe007b28d142e11309d96d4b96e2516a2f1ab568e25346393ac3657d0e->enter($__internal_e406efbe007b28d142e11309d96d4b96e2516a2f1ab568e25346393ac3657d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e406efbe007b28d142e11309d96d4b96e2516a2f1ab568e25346393ac3657d0e->leave($__internal_e406efbe007b28d142e11309d96d4b96e2516a2f1ab568e25346393ac3657d0e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_15fad385d8ba816a04e4048e6b803255658e5043e822f2c60e2beb0b29cb5a42 = $this->env->getExtension("native_profiler");
        $__internal_15fad385d8ba816a04e4048e6b803255658e5043e822f2c60e2beb0b29cb5a42->enter($__internal_15fad385d8ba816a04e4048e6b803255658e5043e822f2c60e2beb0b29cb5a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_15fad385d8ba816a04e4048e6b803255658e5043e822f2c60e2beb0b29cb5a42->leave($__internal_15fad385d8ba816a04e4048e6b803255658e5043e822f2c60e2beb0b29cb5a42_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a53c116d50ef298687122e020485d5832c4c7351c8d42097f7e4f5508e9b83d9 = $this->env->getExtension("native_profiler");
        $__internal_a53c116d50ef298687122e020485d5832c4c7351c8d42097f7e4f5508e9b83d9->enter($__internal_a53c116d50ef298687122e020485d5832c4c7351c8d42097f7e4f5508e9b83d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a53c116d50ef298687122e020485d5832c4c7351c8d42097f7e4f5508e9b83d9->leave($__internal_a53c116d50ef298687122e020485d5832c4c7351c8d42097f7e4f5508e9b83d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
