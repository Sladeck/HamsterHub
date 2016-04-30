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
        $__internal_9ea7fc6ea61b097161c42cb994bf3ecea50f591d473da568987fbbfc1fa66aa2 = $this->env->getExtension("native_profiler");
        $__internal_9ea7fc6ea61b097161c42cb994bf3ecea50f591d473da568987fbbfc1fa66aa2->enter($__internal_9ea7fc6ea61b097161c42cb994bf3ecea50f591d473da568987fbbfc1fa66aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9ea7fc6ea61b097161c42cb994bf3ecea50f591d473da568987fbbfc1fa66aa2->leave($__internal_9ea7fc6ea61b097161c42cb994bf3ecea50f591d473da568987fbbfc1fa66aa2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_19de49f81f890528129a3450aebc9eb474f456beba6b656eb59a5d387f43e5ac = $this->env->getExtension("native_profiler");
        $__internal_19de49f81f890528129a3450aebc9eb474f456beba6b656eb59a5d387f43e5ac->enter($__internal_19de49f81f890528129a3450aebc9eb474f456beba6b656eb59a5d387f43e5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_19de49f81f890528129a3450aebc9eb474f456beba6b656eb59a5d387f43e5ac->leave($__internal_19de49f81f890528129a3450aebc9eb474f456beba6b656eb59a5d387f43e5ac_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2257e731cd8ff899e49b02bc64687a31f36ee3c29de1714839632c4e8fa5dc05 = $this->env->getExtension("native_profiler");
        $__internal_2257e731cd8ff899e49b02bc64687a31f36ee3c29de1714839632c4e8fa5dc05->enter($__internal_2257e731cd8ff899e49b02bc64687a31f36ee3c29de1714839632c4e8fa5dc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2257e731cd8ff899e49b02bc64687a31f36ee3c29de1714839632c4e8fa5dc05->leave($__internal_2257e731cd8ff899e49b02bc64687a31f36ee3c29de1714839632c4e8fa5dc05_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_38f3785d43a6cc078767e83dd9eedb62b687fa65755af58b05ad6d5c0212bf10 = $this->env->getExtension("native_profiler");
        $__internal_38f3785d43a6cc078767e83dd9eedb62b687fa65755af58b05ad6d5c0212bf10->enter($__internal_38f3785d43a6cc078767e83dd9eedb62b687fa65755af58b05ad6d5c0212bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_38f3785d43a6cc078767e83dd9eedb62b687fa65755af58b05ad6d5c0212bf10->leave($__internal_38f3785d43a6cc078767e83dd9eedb62b687fa65755af58b05ad6d5c0212bf10_prof);

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
