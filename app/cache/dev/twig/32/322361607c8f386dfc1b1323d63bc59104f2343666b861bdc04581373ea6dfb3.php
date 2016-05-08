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
        $__internal_0b5bae2b7f0c49e16879f23551fb62e7f126ea3c1b5f8f81ed9521e5bb5e6174 = $this->env->getExtension("native_profiler");
        $__internal_0b5bae2b7f0c49e16879f23551fb62e7f126ea3c1b5f8f81ed9521e5bb5e6174->enter($__internal_0b5bae2b7f0c49e16879f23551fb62e7f126ea3c1b5f8f81ed9521e5bb5e6174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b5bae2b7f0c49e16879f23551fb62e7f126ea3c1b5f8f81ed9521e5bb5e6174->leave($__internal_0b5bae2b7f0c49e16879f23551fb62e7f126ea3c1b5f8f81ed9521e5bb5e6174_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5782831045fb12a655b67fd8ae298cd5ce44ecfab0d063e2ee9c7fbd0f2ae60d = $this->env->getExtension("native_profiler");
        $__internal_5782831045fb12a655b67fd8ae298cd5ce44ecfab0d063e2ee9c7fbd0f2ae60d->enter($__internal_5782831045fb12a655b67fd8ae298cd5ce44ecfab0d063e2ee9c7fbd0f2ae60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5782831045fb12a655b67fd8ae298cd5ce44ecfab0d063e2ee9c7fbd0f2ae60d->leave($__internal_5782831045fb12a655b67fd8ae298cd5ce44ecfab0d063e2ee9c7fbd0f2ae60d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d0a824c90e3c668858102fb6c0356b9cb3a5959d9bf40c9f2ebd8cbd52457e35 = $this->env->getExtension("native_profiler");
        $__internal_d0a824c90e3c668858102fb6c0356b9cb3a5959d9bf40c9f2ebd8cbd52457e35->enter($__internal_d0a824c90e3c668858102fb6c0356b9cb3a5959d9bf40c9f2ebd8cbd52457e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0a824c90e3c668858102fb6c0356b9cb3a5959d9bf40c9f2ebd8cbd52457e35->leave($__internal_d0a824c90e3c668858102fb6c0356b9cb3a5959d9bf40c9f2ebd8cbd52457e35_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a0b63caa34a9767db5415bb607f699bcd78953ed1f9471defb95319dafd58f0e = $this->env->getExtension("native_profiler");
        $__internal_a0b63caa34a9767db5415bb607f699bcd78953ed1f9471defb95319dafd58f0e->enter($__internal_a0b63caa34a9767db5415bb607f699bcd78953ed1f9471defb95319dafd58f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a0b63caa34a9767db5415bb607f699bcd78953ed1f9471defb95319dafd58f0e->leave($__internal_a0b63caa34a9767db5415bb607f699bcd78953ed1f9471defb95319dafd58f0e_prof);

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
