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
        $__internal_f1cca0b425d9f67c6a45b40f71f7ce98c86aaed7c9dfa8d792f9f8438f913f41 = $this->env->getExtension("native_profiler");
        $__internal_f1cca0b425d9f67c6a45b40f71f7ce98c86aaed7c9dfa8d792f9f8438f913f41->enter($__internal_f1cca0b425d9f67c6a45b40f71f7ce98c86aaed7c9dfa8d792f9f8438f913f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f1cca0b425d9f67c6a45b40f71f7ce98c86aaed7c9dfa8d792f9f8438f913f41->leave($__internal_f1cca0b425d9f67c6a45b40f71f7ce98c86aaed7c9dfa8d792f9f8438f913f41_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cecbaae8a7bbd583b877a0c99e5e131c6988597f579827077a3a18d8ab92a374 = $this->env->getExtension("native_profiler");
        $__internal_cecbaae8a7bbd583b877a0c99e5e131c6988597f579827077a3a18d8ab92a374->enter($__internal_cecbaae8a7bbd583b877a0c99e5e131c6988597f579827077a3a18d8ab92a374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cecbaae8a7bbd583b877a0c99e5e131c6988597f579827077a3a18d8ab92a374->leave($__internal_cecbaae8a7bbd583b877a0c99e5e131c6988597f579827077a3a18d8ab92a374_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4a8b3ac5a7548be4b01245174fe0b2aadc1ff1fe5fd0684f9c850c0008a3708e = $this->env->getExtension("native_profiler");
        $__internal_4a8b3ac5a7548be4b01245174fe0b2aadc1ff1fe5fd0684f9c850c0008a3708e->enter($__internal_4a8b3ac5a7548be4b01245174fe0b2aadc1ff1fe5fd0684f9c850c0008a3708e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4a8b3ac5a7548be4b01245174fe0b2aadc1ff1fe5fd0684f9c850c0008a3708e->leave($__internal_4a8b3ac5a7548be4b01245174fe0b2aadc1ff1fe5fd0684f9c850c0008a3708e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b58da8116b3f95d495bf952066437e5101fac8ca2513bbc839f839826478ad6c = $this->env->getExtension("native_profiler");
        $__internal_b58da8116b3f95d495bf952066437e5101fac8ca2513bbc839f839826478ad6c->enter($__internal_b58da8116b3f95d495bf952066437e5101fac8ca2513bbc839f839826478ad6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b58da8116b3f95d495bf952066437e5101fac8ca2513bbc839f839826478ad6c->leave($__internal_b58da8116b3f95d495bf952066437e5101fac8ca2513bbc839f839826478ad6c_prof);

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
