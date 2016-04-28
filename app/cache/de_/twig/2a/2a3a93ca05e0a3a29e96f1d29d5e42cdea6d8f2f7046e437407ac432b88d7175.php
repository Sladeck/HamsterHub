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
        $__internal_eb1d0945f864919f26e8bd89e3d986e2f14d81b49490ad1c89d36555a0107151 = $this->env->getExtension("native_profiler");
        $__internal_eb1d0945f864919f26e8bd89e3d986e2f14d81b49490ad1c89d36555a0107151->enter($__internal_eb1d0945f864919f26e8bd89e3d986e2f14d81b49490ad1c89d36555a0107151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_eb1d0945f864919f26e8bd89e3d986e2f14d81b49490ad1c89d36555a0107151->leave($__internal_eb1d0945f864919f26e8bd89e3d986e2f14d81b49490ad1c89d36555a0107151_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a31ab3ff91fbdd62b278c7ddfa32a11bb8ce5cea8c6aa85ba5831b38008709a9 = $this->env->getExtension("native_profiler");
        $__internal_a31ab3ff91fbdd62b278c7ddfa32a11bb8ce5cea8c6aa85ba5831b38008709a9->enter($__internal_a31ab3ff91fbdd62b278c7ddfa32a11bb8ce5cea8c6aa85ba5831b38008709a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a31ab3ff91fbdd62b278c7ddfa32a11bb8ce5cea8c6aa85ba5831b38008709a9->leave($__internal_a31ab3ff91fbdd62b278c7ddfa32a11bb8ce5cea8c6aa85ba5831b38008709a9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2a3b3d17d9371b578b5f4fa85053a9ee50ab08a5cf9b21ac10f88c581323e1fb = $this->env->getExtension("native_profiler");
        $__internal_2a3b3d17d9371b578b5f4fa85053a9ee50ab08a5cf9b21ac10f88c581323e1fb->enter($__internal_2a3b3d17d9371b578b5f4fa85053a9ee50ab08a5cf9b21ac10f88c581323e1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2a3b3d17d9371b578b5f4fa85053a9ee50ab08a5cf9b21ac10f88c581323e1fb->leave($__internal_2a3b3d17d9371b578b5f4fa85053a9ee50ab08a5cf9b21ac10f88c581323e1fb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_10223e600c1cd497a9abb73daaab87ee0e25b71cb240fa33ed590b8f801e7601 = $this->env->getExtension("native_profiler");
        $__internal_10223e600c1cd497a9abb73daaab87ee0e25b71cb240fa33ed590b8f801e7601->enter($__internal_10223e600c1cd497a9abb73daaab87ee0e25b71cb240fa33ed590b8f801e7601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_10223e600c1cd497a9abb73daaab87ee0e25b71cb240fa33ed590b8f801e7601->leave($__internal_10223e600c1cd497a9abb73daaab87ee0e25b71cb240fa33ed590b8f801e7601_prof);

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
