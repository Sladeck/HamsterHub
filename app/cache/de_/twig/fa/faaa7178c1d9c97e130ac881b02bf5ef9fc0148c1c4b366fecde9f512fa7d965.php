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
        $__internal_9e46083d0f7792327a5785461c1cf1544da6baf3e748597b8a9caea9668c886e = $this->env->getExtension("native_profiler");
        $__internal_9e46083d0f7792327a5785461c1cf1544da6baf3e748597b8a9caea9668c886e->enter($__internal_9e46083d0f7792327a5785461c1cf1544da6baf3e748597b8a9caea9668c886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9e46083d0f7792327a5785461c1cf1544da6baf3e748597b8a9caea9668c886e->leave($__internal_9e46083d0f7792327a5785461c1cf1544da6baf3e748597b8a9caea9668c886e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1f8fc23c81afcd3147184721d8c3ea680a39ce670d4b0843f14512a4c29f1af0 = $this->env->getExtension("native_profiler");
        $__internal_1f8fc23c81afcd3147184721d8c3ea680a39ce670d4b0843f14512a4c29f1af0->enter($__internal_1f8fc23c81afcd3147184721d8c3ea680a39ce670d4b0843f14512a4c29f1af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1f8fc23c81afcd3147184721d8c3ea680a39ce670d4b0843f14512a4c29f1af0->leave($__internal_1f8fc23c81afcd3147184721d8c3ea680a39ce670d4b0843f14512a4c29f1af0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_160b2205169b986982e0d94d8587803fb1b47f561a2e8ef20245cf9813ce1e77 = $this->env->getExtension("native_profiler");
        $__internal_160b2205169b986982e0d94d8587803fb1b47f561a2e8ef20245cf9813ce1e77->enter($__internal_160b2205169b986982e0d94d8587803fb1b47f561a2e8ef20245cf9813ce1e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_160b2205169b986982e0d94d8587803fb1b47f561a2e8ef20245cf9813ce1e77->leave($__internal_160b2205169b986982e0d94d8587803fb1b47f561a2e8ef20245cf9813ce1e77_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f0887034296599d5231fb00868da4be45e55f2bb02552685a35f64e69ebd74a4 = $this->env->getExtension("native_profiler");
        $__internal_f0887034296599d5231fb00868da4be45e55f2bb02552685a35f64e69ebd74a4->enter($__internal_f0887034296599d5231fb00868da4be45e55f2bb02552685a35f64e69ebd74a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f0887034296599d5231fb00868da4be45e55f2bb02552685a35f64e69ebd74a4->leave($__internal_f0887034296599d5231fb00868da4be45e55f2bb02552685a35f64e69ebd74a4_prof);

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
