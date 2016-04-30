<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e7836c3fdff3017f999d3dad989d2f0291a0a63e41268eeb33d630bbfa14a767 extends Twig_Template
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
        $__internal_3ef754189adf24399bcd4bac8f6142cf9bdeda305e560371b1391fe062745632 = $this->env->getExtension("native_profiler");
        $__internal_3ef754189adf24399bcd4bac8f6142cf9bdeda305e560371b1391fe062745632->enter($__internal_3ef754189adf24399bcd4bac8f6142cf9bdeda305e560371b1391fe062745632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3ef754189adf24399bcd4bac8f6142cf9bdeda305e560371b1391fe062745632->leave($__internal_3ef754189adf24399bcd4bac8f6142cf9bdeda305e560371b1391fe062745632_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_035b3c0aaf9ea2e90802d88953450340253cc9d4b39c39bafc3da72379943cb6 = $this->env->getExtension("native_profiler");
        $__internal_035b3c0aaf9ea2e90802d88953450340253cc9d4b39c39bafc3da72379943cb6->enter($__internal_035b3c0aaf9ea2e90802d88953450340253cc9d4b39c39bafc3da72379943cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_035b3c0aaf9ea2e90802d88953450340253cc9d4b39c39bafc3da72379943cb6->leave($__internal_035b3c0aaf9ea2e90802d88953450340253cc9d4b39c39bafc3da72379943cb6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8b9bfbf12c5029b7d8b75f439482109f548c0279f2dbdab424be3412a91e37a1 = $this->env->getExtension("native_profiler");
        $__internal_8b9bfbf12c5029b7d8b75f439482109f548c0279f2dbdab424be3412a91e37a1->enter($__internal_8b9bfbf12c5029b7d8b75f439482109f548c0279f2dbdab424be3412a91e37a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8b9bfbf12c5029b7d8b75f439482109f548c0279f2dbdab424be3412a91e37a1->leave($__internal_8b9bfbf12c5029b7d8b75f439482109f548c0279f2dbdab424be3412a91e37a1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_13cd5824846731fd99e16fba056cdadc1d3e663eb15b1df5d3f5ff8c90e554e5 = $this->env->getExtension("native_profiler");
        $__internal_13cd5824846731fd99e16fba056cdadc1d3e663eb15b1df5d3f5ff8c90e554e5->enter($__internal_13cd5824846731fd99e16fba056cdadc1d3e663eb15b1df5d3f5ff8c90e554e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_13cd5824846731fd99e16fba056cdadc1d3e663eb15b1df5d3f5ff8c90e554e5->leave($__internal_13cd5824846731fd99e16fba056cdadc1d3e663eb15b1df5d3f5ff8c90e554e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
