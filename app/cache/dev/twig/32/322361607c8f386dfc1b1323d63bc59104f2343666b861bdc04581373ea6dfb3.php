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
        $__internal_112339aadfd953460eaa7e3e7898c25c8e4536dd942ec393a1c0dbf3e6be0035 = $this->env->getExtension("native_profiler");
        $__internal_112339aadfd953460eaa7e3e7898c25c8e4536dd942ec393a1c0dbf3e6be0035->enter($__internal_112339aadfd953460eaa7e3e7898c25c8e4536dd942ec393a1c0dbf3e6be0035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_112339aadfd953460eaa7e3e7898c25c8e4536dd942ec393a1c0dbf3e6be0035->leave($__internal_112339aadfd953460eaa7e3e7898c25c8e4536dd942ec393a1c0dbf3e6be0035_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_51dcff4c9988b78ac413c23f597fade2a7ea139d1c0306ada381144a47d2c02e = $this->env->getExtension("native_profiler");
        $__internal_51dcff4c9988b78ac413c23f597fade2a7ea139d1c0306ada381144a47d2c02e->enter($__internal_51dcff4c9988b78ac413c23f597fade2a7ea139d1c0306ada381144a47d2c02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_51dcff4c9988b78ac413c23f597fade2a7ea139d1c0306ada381144a47d2c02e->leave($__internal_51dcff4c9988b78ac413c23f597fade2a7ea139d1c0306ada381144a47d2c02e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_973cc72e1444f981e1520d794967ad459872e51a534dacf7d5ca5d71046d04a0 = $this->env->getExtension("native_profiler");
        $__internal_973cc72e1444f981e1520d794967ad459872e51a534dacf7d5ca5d71046d04a0->enter($__internal_973cc72e1444f981e1520d794967ad459872e51a534dacf7d5ca5d71046d04a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_973cc72e1444f981e1520d794967ad459872e51a534dacf7d5ca5d71046d04a0->leave($__internal_973cc72e1444f981e1520d794967ad459872e51a534dacf7d5ca5d71046d04a0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_730cddcc954aa8d119b31c1124a49160749db4db16b417412d257d8d2c994940 = $this->env->getExtension("native_profiler");
        $__internal_730cddcc954aa8d119b31c1124a49160749db4db16b417412d257d8d2c994940->enter($__internal_730cddcc954aa8d119b31c1124a49160749db4db16b417412d257d8d2c994940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_730cddcc954aa8d119b31c1124a49160749db4db16b417412d257d8d2c994940->leave($__internal_730cddcc954aa8d119b31c1124a49160749db4db16b417412d257d8d2c994940_prof);

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
