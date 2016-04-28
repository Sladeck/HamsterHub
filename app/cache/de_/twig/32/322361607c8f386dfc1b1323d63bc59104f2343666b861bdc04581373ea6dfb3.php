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
        $__internal_a31d63d98dbf829d6a28078b9733ea018e6ed80f33232a6ee9b1e5e3e74918ac = $this->env->getExtension("native_profiler");
        $__internal_a31d63d98dbf829d6a28078b9733ea018e6ed80f33232a6ee9b1e5e3e74918ac->enter($__internal_a31d63d98dbf829d6a28078b9733ea018e6ed80f33232a6ee9b1e5e3e74918ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a31d63d98dbf829d6a28078b9733ea018e6ed80f33232a6ee9b1e5e3e74918ac->leave($__internal_a31d63d98dbf829d6a28078b9733ea018e6ed80f33232a6ee9b1e5e3e74918ac_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4e16b5251fc9936dae4a09c3ff05edc61156a3285271f06da41aa98a2bf0ec77 = $this->env->getExtension("native_profiler");
        $__internal_4e16b5251fc9936dae4a09c3ff05edc61156a3285271f06da41aa98a2bf0ec77->enter($__internal_4e16b5251fc9936dae4a09c3ff05edc61156a3285271f06da41aa98a2bf0ec77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4e16b5251fc9936dae4a09c3ff05edc61156a3285271f06da41aa98a2bf0ec77->leave($__internal_4e16b5251fc9936dae4a09c3ff05edc61156a3285271f06da41aa98a2bf0ec77_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a5b197688564d3e6f217d69ab68aacf6b7831884644ebb97b3b42e79e4fd55a8 = $this->env->getExtension("native_profiler");
        $__internal_a5b197688564d3e6f217d69ab68aacf6b7831884644ebb97b3b42e79e4fd55a8->enter($__internal_a5b197688564d3e6f217d69ab68aacf6b7831884644ebb97b3b42e79e4fd55a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a5b197688564d3e6f217d69ab68aacf6b7831884644ebb97b3b42e79e4fd55a8->leave($__internal_a5b197688564d3e6f217d69ab68aacf6b7831884644ebb97b3b42e79e4fd55a8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a9bbe152ee5853b99e452a7733c1ac86a07cac2e5939f33cd829dfc4c866755c = $this->env->getExtension("native_profiler");
        $__internal_a9bbe152ee5853b99e452a7733c1ac86a07cac2e5939f33cd829dfc4c866755c->enter($__internal_a9bbe152ee5853b99e452a7733c1ac86a07cac2e5939f33cd829dfc4c866755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a9bbe152ee5853b99e452a7733c1ac86a07cac2e5939f33cd829dfc4c866755c->leave($__internal_a9bbe152ee5853b99e452a7733c1ac86a07cac2e5939f33cd829dfc4c866755c_prof);

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
