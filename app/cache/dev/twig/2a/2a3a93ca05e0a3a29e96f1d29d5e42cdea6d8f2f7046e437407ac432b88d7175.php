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
        $__internal_0a395d9f4bba4fa9cdfae917a979772fee2e40eb0bd798ee964cd79ddf242f5b = $this->env->getExtension("native_profiler");
        $__internal_0a395d9f4bba4fa9cdfae917a979772fee2e40eb0bd798ee964cd79ddf242f5b->enter($__internal_0a395d9f4bba4fa9cdfae917a979772fee2e40eb0bd798ee964cd79ddf242f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0a395d9f4bba4fa9cdfae917a979772fee2e40eb0bd798ee964cd79ddf242f5b->leave($__internal_0a395d9f4bba4fa9cdfae917a979772fee2e40eb0bd798ee964cd79ddf242f5b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_41aa90df3655a513eebc60bff9d02baeb8886e1e220ee59e9a4a69049a23bdcd = $this->env->getExtension("native_profiler");
        $__internal_41aa90df3655a513eebc60bff9d02baeb8886e1e220ee59e9a4a69049a23bdcd->enter($__internal_41aa90df3655a513eebc60bff9d02baeb8886e1e220ee59e9a4a69049a23bdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_41aa90df3655a513eebc60bff9d02baeb8886e1e220ee59e9a4a69049a23bdcd->leave($__internal_41aa90df3655a513eebc60bff9d02baeb8886e1e220ee59e9a4a69049a23bdcd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5dee34e7644440521a730ac63249a9c1ad741512e28866756ed0cdde152f2121 = $this->env->getExtension("native_profiler");
        $__internal_5dee34e7644440521a730ac63249a9c1ad741512e28866756ed0cdde152f2121->enter($__internal_5dee34e7644440521a730ac63249a9c1ad741512e28866756ed0cdde152f2121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5dee34e7644440521a730ac63249a9c1ad741512e28866756ed0cdde152f2121->leave($__internal_5dee34e7644440521a730ac63249a9c1ad741512e28866756ed0cdde152f2121_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2797c486c6c98cff2cac42bc331a16a1d57f95b14da1e51314bfd1c170251269 = $this->env->getExtension("native_profiler");
        $__internal_2797c486c6c98cff2cac42bc331a16a1d57f95b14da1e51314bfd1c170251269->enter($__internal_2797c486c6c98cff2cac42bc331a16a1d57f95b14da1e51314bfd1c170251269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2797c486c6c98cff2cac42bc331a16a1d57f95b14da1e51314bfd1c170251269->leave($__internal_2797c486c6c98cff2cac42bc331a16a1d57f95b14da1e51314bfd1c170251269_prof);

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
