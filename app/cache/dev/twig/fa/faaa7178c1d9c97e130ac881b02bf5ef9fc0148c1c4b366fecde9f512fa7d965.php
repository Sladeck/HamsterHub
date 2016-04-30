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
        $__internal_9190343f7403542f13bbb486429010c3f9d22aa8ed9ede07a2cff28f94a643bc = $this->env->getExtension("native_profiler");
        $__internal_9190343f7403542f13bbb486429010c3f9d22aa8ed9ede07a2cff28f94a643bc->enter($__internal_9190343f7403542f13bbb486429010c3f9d22aa8ed9ede07a2cff28f94a643bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9190343f7403542f13bbb486429010c3f9d22aa8ed9ede07a2cff28f94a643bc->leave($__internal_9190343f7403542f13bbb486429010c3f9d22aa8ed9ede07a2cff28f94a643bc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8cda96cf9ab6d4c9ed1a47b1815d5008eab20fa50ad8176a45ec2f58a01ca079 = $this->env->getExtension("native_profiler");
        $__internal_8cda96cf9ab6d4c9ed1a47b1815d5008eab20fa50ad8176a45ec2f58a01ca079->enter($__internal_8cda96cf9ab6d4c9ed1a47b1815d5008eab20fa50ad8176a45ec2f58a01ca079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8cda96cf9ab6d4c9ed1a47b1815d5008eab20fa50ad8176a45ec2f58a01ca079->leave($__internal_8cda96cf9ab6d4c9ed1a47b1815d5008eab20fa50ad8176a45ec2f58a01ca079_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1f17b580d51201de907b103e75df9c64abf4169a5c83e60336829a1f8afa4ee4 = $this->env->getExtension("native_profiler");
        $__internal_1f17b580d51201de907b103e75df9c64abf4169a5c83e60336829a1f8afa4ee4->enter($__internal_1f17b580d51201de907b103e75df9c64abf4169a5c83e60336829a1f8afa4ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1f17b580d51201de907b103e75df9c64abf4169a5c83e60336829a1f8afa4ee4->leave($__internal_1f17b580d51201de907b103e75df9c64abf4169a5c83e60336829a1f8afa4ee4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a03f0dadcd06ac3318d5f62f5d840069d8c5af9f6e59a0091c0d2977b851cfe1 = $this->env->getExtension("native_profiler");
        $__internal_a03f0dadcd06ac3318d5f62f5d840069d8c5af9f6e59a0091c0d2977b851cfe1->enter($__internal_a03f0dadcd06ac3318d5f62f5d840069d8c5af9f6e59a0091c0d2977b851cfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a03f0dadcd06ac3318d5f62f5d840069d8c5af9f6e59a0091c0d2977b851cfe1->leave($__internal_a03f0dadcd06ac3318d5f62f5d840069d8c5af9f6e59a0091c0d2977b851cfe1_prof);

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
