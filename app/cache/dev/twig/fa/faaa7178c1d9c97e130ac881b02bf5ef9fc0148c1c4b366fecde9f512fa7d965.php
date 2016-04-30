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
        $__internal_0b32adf9eca310129276b095a970e29c9667154b9f0390c3cfd8eb4550298e93 = $this->env->getExtension("native_profiler");
        $__internal_0b32adf9eca310129276b095a970e29c9667154b9f0390c3cfd8eb4550298e93->enter($__internal_0b32adf9eca310129276b095a970e29c9667154b9f0390c3cfd8eb4550298e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b32adf9eca310129276b095a970e29c9667154b9f0390c3cfd8eb4550298e93->leave($__internal_0b32adf9eca310129276b095a970e29c9667154b9f0390c3cfd8eb4550298e93_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6efa1832428bc4ac126d40753ab8f1837dcee9533c4d371024bc96b6e496f03f = $this->env->getExtension("native_profiler");
        $__internal_6efa1832428bc4ac126d40753ab8f1837dcee9533c4d371024bc96b6e496f03f->enter($__internal_6efa1832428bc4ac126d40753ab8f1837dcee9533c4d371024bc96b6e496f03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6efa1832428bc4ac126d40753ab8f1837dcee9533c4d371024bc96b6e496f03f->leave($__internal_6efa1832428bc4ac126d40753ab8f1837dcee9533c4d371024bc96b6e496f03f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_426ce9587d065d6e7dbdff87dab51668119ac394b8b76fcc87dcc3362f485790 = $this->env->getExtension("native_profiler");
        $__internal_426ce9587d065d6e7dbdff87dab51668119ac394b8b76fcc87dcc3362f485790->enter($__internal_426ce9587d065d6e7dbdff87dab51668119ac394b8b76fcc87dcc3362f485790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_426ce9587d065d6e7dbdff87dab51668119ac394b8b76fcc87dcc3362f485790->leave($__internal_426ce9587d065d6e7dbdff87dab51668119ac394b8b76fcc87dcc3362f485790_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f72d77ca50e6e96cdc06784ee6b140d91d23cca63cb08ad87e0b42ac4bfaf3df = $this->env->getExtension("native_profiler");
        $__internal_f72d77ca50e6e96cdc06784ee6b140d91d23cca63cb08ad87e0b42ac4bfaf3df->enter($__internal_f72d77ca50e6e96cdc06784ee6b140d91d23cca63cb08ad87e0b42ac4bfaf3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f72d77ca50e6e96cdc06784ee6b140d91d23cca63cb08ad87e0b42ac4bfaf3df->leave($__internal_f72d77ca50e6e96cdc06784ee6b140d91d23cca63cb08ad87e0b42ac4bfaf3df_prof);

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
