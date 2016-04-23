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
        $__internal_678264124377ad60e9f529c9f3220a2585d2fd2c1758e1dc01b552063e78ce06 = $this->env->getExtension("native_profiler");
        $__internal_678264124377ad60e9f529c9f3220a2585d2fd2c1758e1dc01b552063e78ce06->enter($__internal_678264124377ad60e9f529c9f3220a2585d2fd2c1758e1dc01b552063e78ce06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_678264124377ad60e9f529c9f3220a2585d2fd2c1758e1dc01b552063e78ce06->leave($__internal_678264124377ad60e9f529c9f3220a2585d2fd2c1758e1dc01b552063e78ce06_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_898c462dda73578ad850b92ee6798012bd3dd5001ee26548288578533e46b3b9 = $this->env->getExtension("native_profiler");
        $__internal_898c462dda73578ad850b92ee6798012bd3dd5001ee26548288578533e46b3b9->enter($__internal_898c462dda73578ad850b92ee6798012bd3dd5001ee26548288578533e46b3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_898c462dda73578ad850b92ee6798012bd3dd5001ee26548288578533e46b3b9->leave($__internal_898c462dda73578ad850b92ee6798012bd3dd5001ee26548288578533e46b3b9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3e48559206a85ed7767d39f41ec477cffab5bd0009a6823e812a54c31dc86da5 = $this->env->getExtension("native_profiler");
        $__internal_3e48559206a85ed7767d39f41ec477cffab5bd0009a6823e812a54c31dc86da5->enter($__internal_3e48559206a85ed7767d39f41ec477cffab5bd0009a6823e812a54c31dc86da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3e48559206a85ed7767d39f41ec477cffab5bd0009a6823e812a54c31dc86da5->leave($__internal_3e48559206a85ed7767d39f41ec477cffab5bd0009a6823e812a54c31dc86da5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_43cc99f25786aed9f043198fa66caf604bbfcc6a7fb4e71785bee50a2dbbf62f = $this->env->getExtension("native_profiler");
        $__internal_43cc99f25786aed9f043198fa66caf604bbfcc6a7fb4e71785bee50a2dbbf62f->enter($__internal_43cc99f25786aed9f043198fa66caf604bbfcc6a7fb4e71785bee50a2dbbf62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_43cc99f25786aed9f043198fa66caf604bbfcc6a7fb4e71785bee50a2dbbf62f->leave($__internal_43cc99f25786aed9f043198fa66caf604bbfcc6a7fb4e71785bee50a2dbbf62f_prof);

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
