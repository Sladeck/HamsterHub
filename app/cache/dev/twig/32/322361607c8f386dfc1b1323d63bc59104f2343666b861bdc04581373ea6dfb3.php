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
        $__internal_9fa96b347cc4ad81c9fb64d4701a5540675145aba8ed0c21abe794f77b0f5000 = $this->env->getExtension("native_profiler");
        $__internal_9fa96b347cc4ad81c9fb64d4701a5540675145aba8ed0c21abe794f77b0f5000->enter($__internal_9fa96b347cc4ad81c9fb64d4701a5540675145aba8ed0c21abe794f77b0f5000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9fa96b347cc4ad81c9fb64d4701a5540675145aba8ed0c21abe794f77b0f5000->leave($__internal_9fa96b347cc4ad81c9fb64d4701a5540675145aba8ed0c21abe794f77b0f5000_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_630556240b0e682d4898475bc426e383a3d84cfc55211c44068a783a7fca699d = $this->env->getExtension("native_profiler");
        $__internal_630556240b0e682d4898475bc426e383a3d84cfc55211c44068a783a7fca699d->enter($__internal_630556240b0e682d4898475bc426e383a3d84cfc55211c44068a783a7fca699d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_630556240b0e682d4898475bc426e383a3d84cfc55211c44068a783a7fca699d->leave($__internal_630556240b0e682d4898475bc426e383a3d84cfc55211c44068a783a7fca699d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0a576b324932dcfb43dd5adc4d1f2af56d4dd5e4c44f32c2d5337ff69212a4da = $this->env->getExtension("native_profiler");
        $__internal_0a576b324932dcfb43dd5adc4d1f2af56d4dd5e4c44f32c2d5337ff69212a4da->enter($__internal_0a576b324932dcfb43dd5adc4d1f2af56d4dd5e4c44f32c2d5337ff69212a4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0a576b324932dcfb43dd5adc4d1f2af56d4dd5e4c44f32c2d5337ff69212a4da->leave($__internal_0a576b324932dcfb43dd5adc4d1f2af56d4dd5e4c44f32c2d5337ff69212a4da_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e7089488b559a706ea0ac1720052783037b0b41538226ef8065f2be25a789ed8 = $this->env->getExtension("native_profiler");
        $__internal_e7089488b559a706ea0ac1720052783037b0b41538226ef8065f2be25a789ed8->enter($__internal_e7089488b559a706ea0ac1720052783037b0b41538226ef8065f2be25a789ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e7089488b559a706ea0ac1720052783037b0b41538226ef8065f2be25a789ed8->leave($__internal_e7089488b559a706ea0ac1720052783037b0b41538226ef8065f2be25a789ed8_prof);

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
