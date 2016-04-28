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
        $__internal_602a6a2e83b91dcdb82ad2f3bc5e6a8d375feb160efd5c80c2f870338e24dc53 = $this->env->getExtension("native_profiler");
        $__internal_602a6a2e83b91dcdb82ad2f3bc5e6a8d375feb160efd5c80c2f870338e24dc53->enter($__internal_602a6a2e83b91dcdb82ad2f3bc5e6a8d375feb160efd5c80c2f870338e24dc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_602a6a2e83b91dcdb82ad2f3bc5e6a8d375feb160efd5c80c2f870338e24dc53->leave($__internal_602a6a2e83b91dcdb82ad2f3bc5e6a8d375feb160efd5c80c2f870338e24dc53_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_51d848d91d6679dc1ab77a84110267288cb584c9d261fb72fa89da4df9b35377 = $this->env->getExtension("native_profiler");
        $__internal_51d848d91d6679dc1ab77a84110267288cb584c9d261fb72fa89da4df9b35377->enter($__internal_51d848d91d6679dc1ab77a84110267288cb584c9d261fb72fa89da4df9b35377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_51d848d91d6679dc1ab77a84110267288cb584c9d261fb72fa89da4df9b35377->leave($__internal_51d848d91d6679dc1ab77a84110267288cb584c9d261fb72fa89da4df9b35377_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_95f0f94284252d3b0043c70bd926000de25366d03ba8d48340809986d8a8cda2 = $this->env->getExtension("native_profiler");
        $__internal_95f0f94284252d3b0043c70bd926000de25366d03ba8d48340809986d8a8cda2->enter($__internal_95f0f94284252d3b0043c70bd926000de25366d03ba8d48340809986d8a8cda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_95f0f94284252d3b0043c70bd926000de25366d03ba8d48340809986d8a8cda2->leave($__internal_95f0f94284252d3b0043c70bd926000de25366d03ba8d48340809986d8a8cda2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_58a9c960d0ab09fafdcb173d46c43f73420e619f0875e0a7fbd64f3fb686e8b2 = $this->env->getExtension("native_profiler");
        $__internal_58a9c960d0ab09fafdcb173d46c43f73420e619f0875e0a7fbd64f3fb686e8b2->enter($__internal_58a9c960d0ab09fafdcb173d46c43f73420e619f0875e0a7fbd64f3fb686e8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_58a9c960d0ab09fafdcb173d46c43f73420e619f0875e0a7fbd64f3fb686e8b2->leave($__internal_58a9c960d0ab09fafdcb173d46c43f73420e619f0875e0a7fbd64f3fb686e8b2_prof);

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
